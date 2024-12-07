## Working with the sibling checkouts
##
## composer.json resolves the generator and the openapi-tools packages through
## path repositories that point at sibling checkouts. Those live outside this
## repository, so the plugin's `DOCKER_RUN` — which mounts only this repository
## — cannot see them: composer reports the path repository url as missing, and
## the generator's bin proxy fails to include its target. Mounting the workspace
## root that holds every sibling keeps both resolvable.
##
## The `workspace-*` targets mirror `install`/`update` with that mount in place.
## Use them instead of the stock ones for as long as the path repositories are
## configured. Scripts are skipped for the same reason the stock targets skip
## them: they are run separately via `on-install-or-update`.

WORKSPACE_ROOT?=$(shell cd ../.. && pwd)

ifeq ("$(IN_DOCKER)","TRUE")
    WORKSPACE_DOCKER_RUN:=
else
    WORKSPACE_DOCKER_RUN=docker run --rm -i $(DOCKER_DEFAULT_SECURITY_OPS) -e OTEL_PHP_FIBERS_ENABLED="${OTEL_PHP_FIBERS_ENABLED}" -v "$(WORKSPACE_ROOT):$(WORKSPACE_ROOT)" -v "${COMPOSER_CACHE_DIR}:${COMPOSER_CONTAINER_CACHE_DIR}" -w "$(shell pwd)" --ulimit nofile=1000000 ${CONTAINER_NAME}
endif

workspace-install: ## Install dependencies with the sibling checkouts mounted ####
	$(WORKSPACE_DOCKER_RUN) composer install --no-scripts

workspace-update: ## Update dependencies with the sibling checkouts mounted ####
	$(WORKSPACE_DOCKER_RUN) composer update -W --no-scripts

## Client generation
##
## The client name is passed as an extra argument rather than as a variable, so
## these read the same way the generate-* workflows invoke them:
## `make generate-client GitHub`. The catch-all rule absorbs that second goal.

generate-client: ## Generate a single client, passing its name as an argument (e.g. `make generate-client GitHub`) ####
	$(WORKSPACE_DOCKER_RUN) vendor/bin/openapi-generator clients/$(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))/etc/openapi-generator-config.php

generate-clients: ## Generate every client in ./clients ####
	ls ./clients | xargs -I % $(MAKE) generate-client %
