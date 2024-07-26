# **MultiRegions**

## **Как** поднять
### Установка зависимостей php
  ```
composer install
```
### Создаём БД 


Есть makefile, который нужно запустить и он выполнит команду и поднимет mysql или прописать в консоли
```
docker run --name multiregion -e MYSQL_ROOT_USERNAME=root -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=multiregion -p 3306:3306 -d mysql
```
Сделает миграцию  нужных полей в БД
```
php artisan migrate
```
### Установка api hh.ru
```
php artisan load:cities
```
### Поднимаем локальный сервер php
```
php artisan serve
```
### API
API тестировал через postman
http://127.0.0.1:8000/api/cities - POST, с параметрами name, slug
http://127.0.0.1:8000/api/cities/id - DELETE  
