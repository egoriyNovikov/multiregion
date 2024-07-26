# **MultiRegions**

## **Как** поднять
### Установка зависимостей php
  ```
composer install
```
### Создаём БД SSWORD=root
```
Есть makefile, который нужно запустить и он выполнит команду и поднимет mysql или прописать в консоли
```
docker run --name multiregion -e MYSQL_ROOT_USERNAME=root -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=multiregion -p 3306:3306 -d mysql
```
### Установка api hh.ru
```
php artisan load:cities
```
### Поднимаем локальный сервер php
```
php artisan serve
```
