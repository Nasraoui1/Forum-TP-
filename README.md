ForumTP - Application de forum moderne avec Symfony

ForumTP est une application de forum complète développée avec Symfony 6, offrant une plateforme de discussion interactive avec une interface utilisateur inspirée de Reddit. Cette application permet aux utilisateurs de créer des comptes, de participer à des discussions organisées par catégories, et inclut un système complet de gestion des utilisateurs et de modération.

🚀 Installation et configuration

Cloner le dépôt
git clone https://github.com/Nasraoui1/Forum-TP-.git
cd forumtp

Installer les dépendances

composer install
Configurer l'environnement

# Copier le fichier .env en .env.local et modifier les paramètres
cp .env .env.local
# Éditer le fichier .env.local pour configurer la base de données et le mailer
Créer la base de données et exécuter les migrations

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
Charger les fixtures (données de test)

php bin/console doctrine:fixtures:load
Démarrer le serveur

symfony server:start

👤 Comptes par défaut
Les fixtures créent automatiquement les comptes suivants:
Administrateur: admin@forum.com / admin123
Utilisateur standard: user@forum.com / user123
Utilisateur banni: banned@forum.com / banned123