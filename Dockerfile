FROM composer:2 AS vendor
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
  --no-dev \
  --prefer-dist \
  --no-interaction \
  --no-progress \
  --optimize-autoloader

FROM php:8.2-cli-alpine
WORKDIR /var/www/html

COPY . .
COPY --from=vendor /app/vendor ./vendor

RUN adduser -D app \
  && mkdir -p storage/logs \
  && chown -R app:app storage

USER app

EXPOSE 3000
CMD ["php", "-S", "0.0.0.0:3000", "-t", "public", "public/router.php"]
