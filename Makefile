export DOCKER_IMAGE_NAME=php-test
export DOCKER_COMPOSE_FILE=docker-compose.yml
export DOCKER_COMPOSE_OPTIONS=--force-rm
export DOCKER_COMPOSE_OPTIONS_NOCACHE=--force-rm --no-cache


build:
	docker-compose -f $(DOCKER_COMPOSE_FILE) build $(DOCKER_COMPOSE_OPTIONS)

run-basket1:
	docker-compose run --name $(DOCKER_IMAGE_NAME)-basket1 --rm $(DOCKER_IMAGE_NAME)-basket1

run-basket2:
	docker-compose run --name $(DOCKER_IMAGE_NAME)-basket2 --rm $(DOCKER_IMAGE_NAME)-basket2

run-basket3:
	docker-compose run --name $(DOCKER_IMAGE_NAME)-basket3 --rm $(DOCKER_IMAGE_NAME)-basket3

run-basket4:
	docker-compose run --name $(DOCKER_IMAGE_NAME)-basket4 --rm $(DOCKER_IMAGE_NAME)-basket4
