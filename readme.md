# Lumen PHP Framework

INIT : 

composer install
composer update

créer une base MySQL nommée pompiers et modifier le fichier .env pour avoir les accès à la base

Exécuter :

php artisan migrate
composer dump-autoload
php artisan db:seed

puis 

php -S localhost:8001 -t public 

pour lancer le serveur
