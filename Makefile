mysql:
    docker run --name multiregion -e MYSQL_ROOT_USERNAME=root -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=multiregion -p 3306:3306 -d mysql
