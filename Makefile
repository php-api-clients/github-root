# set all to phony
SHELL=bash

# If the first argument is "run"...
ifeq (generate-client,$(firstword $(MAKECMDGOALS)))
  # use the rest as arguments for "run"
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
  # ...and turn them into do-nothing targets
  $(eval $(RUN_ARGS):;@:)
endif

.PHONY: *

DOCKER_CGROUP:=$(shell cat /proc/1/cgroup | grep docker | wc -l)
COMPOSER_CACHE_DIR=$(shell composer config --global cache-dir -q || echo ${HOME}/.composer/cache)

ifneq ("$(wildcard /.you-are-in-a-wyrihaximus.net-php-docker-image)","")
    IN_DOCKER=TRUE
else
    IN_DOCKER=FALSE
endif

ifeq ("$(IN_DOCKER)","TRUE")
	DOCKER_RUN=
	DOCKER_SHELL=
else
	DOCKER_RUN=docker run --rm -t \
		-v "`pwd`:`pwd`" \
		-v "${COMPOSER_CACHE_DIR}:/home/app/.composer/cache" \
		-w "`pwd`" \
		"wyrihaximusnet/php:8.2-nts-alpine-slim-dev"
	DOCKER_SHELL=docker run --rm -it \
		-v "`pwd`:`pwd`" \
		-v "${COMPOSER_CACHE_DIR}:/home/app/.composer/cache" \
		-w "`pwd`" \
		"wyrihaximusnet/php:8.2-nts-alpine-slim-dev"
endif

shell: ## Provides Shell access in the expected environment ###
	$(DOCKER_SHELL) ash

setup-clients:
	$(DOCKER_RUN) php utils/client-skelleton-setup.php

generate-clients: setup-clients
	ls ./clients | xargs -I % $(MAKE) generate-client %

composer-update-clients:
	ls ./clients | xargs -I % $(DOCKER_RUN) bash -c 'composer update -W -d clients/%'

generate-client:
	$(DOCKER_RUN) php ./vendor/bin/openapi-generator ./clients/$(RUN_ARGS)/etc/openapi-generator-config.php
	$(DOCKER_RUN) bash -c 'cd clients/$(RUN_ARGS) && composer install -o --no-progress --no-ansi && (make cs-fix || true)'
