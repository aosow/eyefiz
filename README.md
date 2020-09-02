## Installation

Après avoir cloner le projet, se rendre dans le dossier du projet: 

```
cd eyefiz
```

Puis installer les dependances:

```
composer install
```

Créer et copier le fichier .env

```
cp .env.example .env
```

Générez une clé d’encryption

```
php artisan key:generate
```

Mettre les bonnes permissions à l’ensemble des répertoires et fichiers

```
chmod 755 -R eyefiz/
```

```
chmod -R o+w eyefiz/storage
```

Configurez le fichier .env pour permettre la création et la connexion à la base de donnée:
remplissez les options DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME et DB_PASSWORD

J'ai créer une commande qui permet de créer la base de donnée une fois le fichier .env configuré

```
php artisan database:create
```

Ajouter les tables avec les migrations

```
php artisan migrate
```

Remplir la base de données avec les données de test contenu dans les fichiers seed

```
php artisan db:seed --class=CategorySeeder
```

```
php artisan db:seed --class=ProductSeeder
```

```
php artisan db:seed --class=PostSeeder
```

Puis lancer le server 

```
php artisan serve
```
