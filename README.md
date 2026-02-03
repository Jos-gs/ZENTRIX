# ZENTRIX — Landing y suscripción

Web corporativa tipo landing + planes de suscripción para **ZENTRIX**: creación de páginas, soporte, servidor y dominio incluidos. Arquitectura **MVC en PHP 8+** sin frameworks.

## Requisitos

- **PHP 8.0** o superior (extensiones: pdo_mysql, json, mbstring, session)
- **MySQL 5.7+** o **MariaDB 10.3+**
- Composer (para autoload)

## Estructura del proyecto

```
ZENTRIX/
├── app/
│   ├── Controllers/    # Controladores
│   ├── Core/           # Router, Database, Security, View
│   ├── Models/         # User, Plan, Subscription, Lead, Ticket
│   └── Views/          # Vistas (layouts, partials, páginas)
├── config/
│   ├── app.php        # Configuración general (nombre, admin, WhatsApp)
│   ├── db.php         # Conexión MySQL (PDO)
│   └── routes.php     # Rutas GET/POST
├── public/
│   ├── index.php      # Entrada única
│   ├── router.php     # Router para servidor PHP integrado
│   └── assets/        # CSS, JS
├── storage/           # Logs, cache (opcional)
├── schema.sql         # Esquema y datos semilla
├── bootstrap.php
├── composer.json
└── README.md
```

## Configuración

### 1. Variables de entorno (opcional)

Puedes usar variables de entorno o editar directamente `config/app.php` y `config/db.php`:

| Variable          | Descripción                    | Ejemplo          |
|-------------------|--------------------------------|------------------|
| `ZENTRIX_ENV`     | Entorno (production/development) | production       |
| `ZENTRIX_DEBUG`   | Mostrar errores (0/1)          | 0                |
| `ZENTRIX_URL`     | URL base del sitio             | http://localhost:8000 |
| `ZENTRIX_DB_HOST` | Host de MySQL                  | 127.0.0.1        |
| `ZENTRIX_DB_PORT` | Puerto MySQL                   | 3306             |
| `ZENTRIX_DB_NAME` | Nombre de la base de datos     | zentrix          |
| `ZENTRIX_DB_USER` | Usuario MySQL                  | root             |
| `ZENTRIX_DB_PASS` | Contraseña MySQL               | (vacío en local) |

### 2. Usuario administrador

Los usuarios con acceso al panel **/admin** se definen por email en `config/app.php`:

```php
'admin_emails' => [
    'admin@zentrix.com',
],
```

Para tener un admin: crea una cuenta con **Suscribirme** usando ese email (o inserta un usuario en la tabla `users` con ese email) y luego inicia sesión en **/login**. Ese usuario verá el enlace **Admin** y podrá acceder a **/admin**.

### 3. Base de datos

1. Crear la base de datos:

```bash
mysql -u root -p -e "CREATE DATABASE zentrix CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

2. Importar el esquema y datos semilla:

```bash
mysql -u root -p zentrix < schema.sql
```

### 4. Instalar dependencias (autoload)

```bash
composer install
```

## Cómo ejecutar en local

**Importante:** Si arrancas solo con `php -S localhost:3000` (sin `router.php`), la ruta `/assets/styles.css` dará 404 y la página se verá sin estilos. Hay que usar el router.

Desde la raíz del proyecto, **una** de estas opciones:

**Opción A — Scripts (Windows, más fácil):**

- Doble clic en **`start.bat`**, o en PowerShell: `.\start.ps1`
- Arranca el servidor en **http://localhost:3000** usando `router.php`.

**Opción B — Línea de comandos:**

```bash
php -S localhost:3000 router.php
```

**Opción C** (con document root en `public`):

```bash
php -S localhost:8000 -t public public/router.php
```

Luego abre en el navegador: **http://localhost:3000** (o el puerto que uses).

- **/** — Home  
- **/servicios** — Servicios  
- **/planes** — Planes  
- **/suscribirme** — Formulario de suscripción  
- **/contacto** — Contacto  
- **/soporte** — Soporte y FAQ  
- **/ticket** — Abrir ticket (requiere login)  
- **/login** — Iniciar sesión  
- **/logout** — Cerrar sesión  
- **/panel** — Panel cliente (requiere login)  
- **/admin** — Panel admin (solo emails en `admin_emails`)

## Seguridad

- **CSRF**: todos los formularios (POST) usan token CSRF.  
- **Escape**: salida escapada con `htmlspecialchars` en vistas.  
- **Headers**: X-Frame-Options, X-Content-Type-Options, etc. en `Security::setSecurityHeaders()`.  
- **Validación**: validación server-side en cada controlador que procesa POST.

## Pagos

La integración de pagos está **pendiente**. Las suscripciones se guardan con estado `pending` o `active`; en el futuro se podrá conectar un gateway (Stripe, etc.).

## Licencia

Uso interno / ZENTRIX.
