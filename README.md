# nan-apps-page

##Mi sitio, portfolio y más.

###Tecnologías:

1. Entorno: Docker -> http://laradock.io 
2. Nginx y php-fpm
3. PHP7 ( Laravel )
4. MySQL 
5. Vue.js 


-------------------------------------------------

Docker Compose commands

`docker-compose up -d nginx mysql workspace php-fpm`

`docker-compose exec --user=laradock workspace bash`


--------------------------------------------------

Troubleshoot

1. Para ver log `docker logs -f $(docker ps | grep php-fpm | awk -F $'[ ]{2,}' '{ print $7 }')`