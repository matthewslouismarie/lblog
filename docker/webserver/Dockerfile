    FROM php:7.2.5-apache

# Update packages
RUN apt-get update

# Switch to standard user
RUN useradd -m louis
RUN apt-get install -y sudo
COPY config/sudoers /etc/sudoers.d/sudoers
RUN chmod 0444 /etc/sudoers.d/sudoers
USER louis

# Update PATH
ENV PATH="/home/louis/bin:${PATH}"

# Install WP-CLI
RUN mkdir ~/bin
RUN curl -o ~/bin/wp -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN sudo chmod +x ~/bin/wp
RUN sudo apt-get install -y less
RUN sudo apt-get install -y mysql-client

# Ownership on html
RUN sudo chown -cR louis: .

# PHP configuration
RUN sudo docker-php-ext-install mysqli

# Download WordPress
RUN wp core download

# # Fix Apache warning
# RUN sudo echo "ServerName 172.16.238.10" | sudo tee /etc/apache2/conf-available/servername.conf

# # Enable HTTPS
# COPY tls/apache-selfsigned.key /etc/ssl/private/apache-selfsigned.key
# COPY tls/apache-selfsigned.crt /etc/ssl/certs/apache-selfsigned.crt
# COPY tls/dhparam.pem /etc/ssl/certs/dhparam.pem
# COPY tls/ssl-params.conf /etc/apache2/conf-available/ssl-params.conf
# COPY tls/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
# RUN sudo a2enmod rewrite
# RUN sudo a2enmod ssl
# RUN sudo a2enmod headers
# RUN sudo a2ensite default-ssl
# RUN sudo a2enconf ssl-params
# RUN sudo a2enconf servername

# Install Composer
RUN sudo apt-get install -y wget
COPY scripts/install-composer /home/louis/bin
COPY scripts/composer /home/louis/bin
RUN sudo chmod +x ~/bin/install-composer ~/bin/composer
RUN install-composer
RUN rm ~/bin/install-composer

# Install NPM and Grunt
RUN sudo apt-get install -y gnupg2
RUN sudo curl -sL https://deb.nodesource.com/setup_8.x | sudo bash -
RUN sudo apt-get install -y nodejs
RUN sudo apt-get install -y git
RUN sudo npm install -g grunt-cli

# # Set working directory
WORKDIR /var/www/html/wp-content/themes/lblog

# ZIP extension for Composer
RUN sudo apt-get install -y zlib1g-dev
RUN sudo docker-php-ext-install zip
#COPY config/000-default.conf /etc/apache2/sites-enabled/000-default.conf
#RUN sudo a2enmod rewrite
#RUN sudo a2enmod headers

COPY scripts/start-server /home/louis/bin/start-server
RUN sudo chmod +x ~/bin/start-server

CMD start-server