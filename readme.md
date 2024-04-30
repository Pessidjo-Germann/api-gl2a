# API PHP
Une api qui a pour but de récupérer la liste des demandes de services
Pour ceci on a pas utilisé de Design Pattern en particulier

# Le dossier contient deux fichiers: 
    - api.php qui contient l'api en question
    - function.php qui contient les fonctions qui sont utilisées dans l'api

# Explication du contenu de function.php
    -La fonction getConnexion(): qui nous connecte à notre base de donnée c'est le fichier à modifier si jamais on veut changer de table
    -La fonction sendJSON($info): qui recoit les données de notre base de donnée en paramètre puis la transforme en JSON avant de la renvoyer
    -La fonction getService(): c'est ici qu'on écrit notre requête à exécuter puis on appele sendJSON pour encoder les données recues de la base de donnée

# GUIDE D'UTILISATION

Une fois que le projet a été cloné, il faut mettre le dossier API dans le dossier htdocs de Xampp ou alors dans le dossier www de wamp.

Ensuite pour tester il faut utiliser postman, ainsi cet api n'a qu'un seul point d'entrée(endpoint) qui est : 
    ```
     localhost/api/api.php?demande 
    ```

Une autre version de cet api avec le design pattern MVC est:
    *[API EN MVC](https://github.com/Pessidjo-Germann/api_gl2b)

**Pessidjo Germann**

