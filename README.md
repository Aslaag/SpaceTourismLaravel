Pour bien installer ce projet, plusieurs étapes à suivre !

Installe toutes les dépendances nécessaires définies dans composer.json (Laravel, Scribe, etc.) :
composer install

Installe les dépendances front-end & compile les assets pour le développement
npm install && npm run dev
CTRL + C

Recréer toutes les tables et remplit automatiquement la base avec des données de test définies dans les seeders :
php artisan migrate:fresh --seed

Démarre le serveur Laravel
php artisan serve
