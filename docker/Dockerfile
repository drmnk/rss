
FROM php:8.2.2-fpm

# Нам нужен пользователь для выполнения команд Composer и Artisan
ARG user
ARG uid

# Установим необходимые пакеты
RUN apt-get update && apt-get install -y \
    wget git curl zip unzip libpq-dev libonig-dev libxml2-dev

# Очистим кэш после установки
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Установим нужные расширения, которых нет в базовой поставке
RUN docker-php-ext-install pdo pdo_pgsql mbstring

# Загрузим композер
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создадим системного пользователя
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www