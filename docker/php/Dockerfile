# =========================================================
# PHP8.2 con Apache
# =========================================================
# Creación de la imagen con el servidor web y PHP8.2

# carga la imagen indicada en el fichero .env (8.2-apache)
FROM php:${php_version}

# actualizaciones, instalación de extensiones de PHP y configuración
RUN apt-get update && apt-get install --no-install-recommends -y \
  libzip-dev \
  libxml2-dev \
  mariadb-client \
  zip \
  unzip \
  && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN pecl install zip pcov
RUN docker-php-ext-enable zip \
  && docker-php-ext-install pdo_mysql \
  && docker-php-ext-install bcmath \
  && docker-php-ext-install soap \
  && docker-php-source delete

RUN a2enmod rewrite setenvif \
  && a2enconf disable-elb-healthcheck-log \ 
  && a2dissite * \
  && a2disconf other-vhosts-access-log

# para los virtualhosts (si fuera el caso)
# COPY _linux_sites/*.conf /etc/apache2/sites-available/

# instalar composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

CMD ["apache2-foreground"]
