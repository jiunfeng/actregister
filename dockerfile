#//TODO:make gold image
#//- 用laravel 製作 此專案

#offical ubuntu base image
FROM ubuntu:23.10

#avoid interactive prompts when installing php by using deafult
ENV DEBIAN_FRONTEND=noninteractive

#nginx and cp conf
RUN apt update && apt upgrade -y
RUN apt install nginx -y
COPY /Docker/nginx.con /etc/nginx/sites-available/default
#RUN service nginx start

RUN apt install php8.2-fpm -y
RUN service php8.2-fpm start

COPY /actregister /var/www/html/web
# #laravel相關插件
# RUN apt install php8.2 -y
# RUN apt install php-fpm php-cli php-mbstring php-xml php-curl -y
# RUN service php8.2-fpm start
RUN chgrp -R www-data /var/www/html/web/
#laravel專案
RUN chmod 755 -R /var/www/html/web/storage/
#開laravel log 權限

# #php composer install
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" &&\
#     php composer-setup.php &&\
#     mv composer.phar /usr/local/bin/composer &&\
#     php -r "unlink('composer-setup.php');"

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]



#有掛載laravel進去


