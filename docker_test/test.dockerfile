FROM nginx:latest
LABEL authors="le_thom"

COPY docker_test/test.conf /etc/nginx/nginx.conf
#COPY app/ /var/www/airsoft/app/
#COPY public/ /var/www/airsoft/public/
##RUN rm /var/www/airsoft/public/index.php
##COPY public/index.php /var/www/airsoft/index.php
#
#COPY config/ /var/www/airsoft/config/
#COPY . /var/www/airsoft/

EXPOSE 15260