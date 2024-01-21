FROM mcr.microsoft.com/devcontainers/php:0-8.2

RUN apt-get update \
     && apt-get install -y libzip-dev \
     && docker-php-ext-install zip 

# composer require pkpass/pkpass