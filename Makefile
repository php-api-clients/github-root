# set all to phony
SHELL=bash

.PHONY: *

DOCKER_CGROUP:=$(shell cat /proc/1/cgroup | grep docker | wc -l)
COMPOSER_CACHE_DIR=$(shell composer config --global cache-dir -q || echo ${HOME}/.composer/cache)

ifneq ("$(wildcard /.dockerenv)","")
    IN_DOCKER=TRUE
else ifneq ("$(DOCKER_CGROUP)","0")
	IN_DOCKER=TRUE
else
    IN_DOCKER=FALSe
endif

ifeq ("$(IN_DOCKER)","TRUE")
	DOCKER_RUN=
else
	DOCKER_RUN=docker run --rm -i \
		-v "`pwd`:`pwd`" \
		-v "${COMPOSER_CACHE_DIR}:/home/app/.composer/cache" \
		-w "`pwd`" \
		"wyrihaximusnet/php:8.2-nts-alpine-slim-dev"
endif

generate-clients:
	$(DOCKER_RUN) php utils/client-skelleton-setup.php
	$(DOCKER_RUN) ls ./clients | xargs -I % $(DOCKER_RUN) php ./vendor/bin/openapi-client-generator ./clients/%/etc/openapi-generator-config.yaml
