# Лабораторная работа №4: Запуск сайта в контейнере

# Цель работы
Выполнив данную работу студент сможет подготовить образ контейнера для запуска веб-сайта на базе Apache HTTP Server + PHP (mod_php) + MariaDB.

# Задание
Создать Dockerfile для сборки образа контейнера, который будет содержать веб-сайт на базе Apache HTTP Server + PHP (mod_php) + MariaDB. База данных MariaDB должна храниться в монтируемом томе. Сервер должен быть доступен по порту 8000.

Установить сайт WordPress. Проверить работоспособность сайта.

# Выполнение
После создания всех необходимых файлов/папок строим образ контейнера с именем apache2-php-mariadb при помощи команды:
```docker build -t apache2-php-mariadb files``` 
в докерфайл мы поместили следующий код:
```# create from debian image
FROM debian:latest

# install apache2, php, mod_php for apache2, php-mysql and mariadb
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server && \
    apt-get clean
```
После запуска образа у нас скачиваются файлы apache2, php, mod_php for apache2, php-mysql and mariadb
Образ строился 173,2 секунды 

Создайте контейнер apache2-php-mariadb из образа apache2-php-mariadb и запустите его в фоновом режиме с командой запуска bash.
``` docker run -ti -p 8000:80 --name apache2-php-mariadb apache2-php-mariadb /bin/bash```

mkdir -p files/apache2
mkdir -p files/php
mkdir -p files/mariadb

docker build -t apache2-php-mariadb containers04
docker run -d --name apache2-php-mariadb apache2-php-mariadb bash
docker cp apache2-php-mariadb:/etc/apache2/sites-available/000-default.conf files/apache2/
docker cp apache2-php-mariadb:/etc/apache2/apache2.conf files/apache2/
docker cp apache2-php-mariadb:/etc/php/8.2/apache2/php.ini files/php/
docker cp apache2-php-mariadb:/etc/mysql/mariadb.conf.d/50-server.cnf files/mariadb/
