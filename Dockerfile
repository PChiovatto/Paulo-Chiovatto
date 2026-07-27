# TV que Vende — site em PHP servido por Apache.
FROM php:8.3-apache

# Compressão e cache dos estáticos; ambos já vêm no php:apache.
RUN a2enmod deflate expires headers

COPY . /var/www/html/

# Configuração de produção padrão do PHP (sem exibir erro na tela do visitante).
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && chown -R www-data:www-data /var/www/html

EXPOSE 80
