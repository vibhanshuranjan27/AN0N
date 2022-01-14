FROM php:7.0-apache
FROM httpd:2.4-alpine
COPY src/ /var/www/html
EXPOSE 80