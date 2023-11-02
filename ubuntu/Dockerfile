FROM ubuntu:22.04

# Install Apache
RUN apt-get update
RUN apt-get -y install tzdata
RUN apt-get -y install apache2

# Install PHP 8.2 and necessary extensions
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get install -y php8.2 php8.2-cli php8.2-common php8.2-gd php8.2-mbstring php8.2-curl php8.2-xml php8.2-bcmath
RUN apt-get install -y libpq-dev
RUN apt-get install -y php8.2-pgsql
RUN apt-get install -y php8.2-opcache
RUN echo "opcache.enable=1" >> /etc/php/8.2/cli/php.ini

# Install Xdebug for PHP 8.2
RUN apt-get install -y php8.2-xdebug
RUN echo "zend_extension=/usr/lib/php/20220829/xdebug.so" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.client_port=9003" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.mode=debug" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.remote_autostart=on" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.remote_enable=on" >> /etc/php/8.2/mods-available/xdebug.ini

# Enable Apache rewrite module and configure the document root
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html/drupal
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Set the working directory and copy your application code
WORKDIR /var/www/html
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# Expose port 80 and start Apache
EXPOSE 80
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
