#!/bin//bin/sh

apk add php7-xdebug --repository http://dl-3.alpinelinux.org/alpine/edge/testing/
echo 'zend_extension=/usr/lib/php7/modules/xdebug.so' >> '/etc/php7/php.ini'
echo 'xdebug.remote_enable=1' >> '/etc/php7/php.ini'
echo 'xdebug.remote_port=9000' >> '/etc/php7/php.ini'
echo 'xdebug.remote_handler=dbgp' >> '/etc/php7/php.ini'
echo 'xdebug.remote_autostart=true' >> '/etc/php7/php.ini'
echo 'xdebug.remote_connect_back=1' >> '/etc/php7/php.ini'
echo 'xdebug.idekey=PHPSTORM' >> '/etc/php7/php.ini'
echo 'xdebug.max_nesting_level=250' >> '/etc/php7/php.ini'
sed -i -E 's/max_execution_time *= *[0-9]+/max_execution_time = 300/' '/etc/php7/php.ini'
