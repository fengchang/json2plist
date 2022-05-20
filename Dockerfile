# The Dockerfile packs together code and PHP/Apache environment to an image
# It can be built and run with a single command: docker run -p 8080:80 $(docker build -q .)
# Then you can access the application from http://127.0.0.1:8080/

FROM php:7.4-apache

COPY . /var/www/html

