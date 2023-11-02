# Docker using drupal, php 8.2, postgres 16.0 and ubuntu 22.04

* If local installed postgres, change port 5432 -> 5431

```
    postgres:
        build: ./db
        restart: always
        volumes:
            - ./db/sql:/docker-entrypoint-initdb.d
        environment:
            - POSTGRES_USER=$POSTGRES_USER
            - POSTGRES_PASSWORD=$POSTGRES_PASSWORD
        ports:
            - 5431:5432
        logging:
            driver: "json-file"
            options:
                max-size: $LOG_SIZE
                max-file: $LOG_FILES
        networks:
            - backend
```

- setting file docker-composer.yml
- username and password login database in file .env

* Install xdebug support debug in coding

```
RUN apt-get install -y php8.2-xdebug
RUN echo "zend_extension=/usr/lib/php/20220829/xdebug.so" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.client_port=9003" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.mode=debug" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.remote_autostart=on" >> /etc/php/8.2/mods-available/xdebug.ini
RUN echo "xdebug.remote_enable=on" >> /etc/php/8.2/mods-available/xdebug.ini
```

# Good luck
