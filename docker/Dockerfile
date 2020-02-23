FROM php:7.4-cli


COPY bin/docker-entrypoint /usr/local/bin/

RUN  chmod +x /usr/local/bin/docker-entrypoint	

VOLUME /usr/src/

WORKDIR /usr/src/

ENTRYPOINT ["/usr/local/bin/docker-entrypoint"]

#CMD [ "docker-entrypoint", "index.php" ]