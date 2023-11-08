# Utilisation d'une image Laravel Sail (vous pouvez personnaliser cela en fonction de vos besoins)
FROM sail-8.2/app

# Copier le code source de Laravel dans le conteneur
COPY ./src /var/www/html

# Spécifier le répertoire de travail
WORKDIR /var/www/html

# Exposer le port du serveur web (si nécessaire)
# EXPOSE 80

# Spécifier la commande pour démarrer Laravel (ajustez-la en fonction de vos besoins)
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
