@echo off
cd /d "%~dp0"
echo ZENTRIX (solo visual) en http://localhost:3000
echo.
php -S localhost:3000 -t public
