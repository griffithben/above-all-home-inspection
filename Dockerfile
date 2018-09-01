FROM alpine:3.7

RUN apk --update --no-cache add php7 \
	php7-apache2 \
	php7-cli \
	php7-common \
	php7-ctype \
	php7-curl \
	php7-dom \
	php7-gd \
	php7-iconv \
	php7-json \
	php7-mbstring \
	php7-mcrypt \
	php7-mysqli \
	php7-oauth \
	php7-openssl \
	php7-pdo_mysql \
	php7-phar \
	php7-posix \
	php7-session \
	php7-simplexml \
	php7-soap \
	php7-tokenizer \
	php7-xml \
	php7-xmlwriter \
	php7-xsl \
	php7-zlib \
	apache2 \
	git \
	nodejs

ENV COMPOSER_VERSION 1.2.1

RUN php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" && \
    php -r "copy('https://composer.github.io/installer.sig', '/tmp/composer-setup.sig');" && \
    php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer --version=$COMPOSER_VERSION && \
    php -r "unlink('/tmp/composer-setup.php');" \
    chmod +x /usr/local/bin/composer

RUN sed -i '/^#LoadModule rewrite_module/s/^#//' /etc/apache2/httpd.conf && \
	sed -ri \
		-e 's!^(\s*CustomLog)\s+\S+!\1 /proc/self/fd/1!g' \
		-e 's!^(\s*ErrorLog)\s+\S+!\1 /proc/self/fd/2!g' \
		"/etc/apache2/httpd.conf"

RUN sed -i 's/^DocumentRoot/#DocumnetRoot/' /etc/apache2/httpd.conf

RUN mkdir /run/apache2 && chown apache:apache /run/apache2

COPY docker/httpd-foreground /usr/local/bin/

COPY docker/deflate.conf /etc/apache2/conf.d/deflate.conf

ADD . /var/www/app

RUN chmod -R 777 /var/www/app/config/bin/xdebug.sh

RUN sh /var/www/app/config/bin/xdebug.sh

RUN cat /var/www/app/docker/apache.conf >> /etc/apache2/httpd.conf

RUN chmod -R 777 /var/www/app/storage && chmod -R 777 /var/www/app/bootstrap

WORKDIR /var/www/app

RUN php /usr/local/bin/composer install --prefer-dist --no-interaction

EXPOSE 80

CMD ["httpd-foreground"]