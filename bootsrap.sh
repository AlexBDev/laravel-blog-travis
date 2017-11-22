#!/usr/bin/env bash

source ./user-permission.sh
docker-compose up -d --force-recreate --build
docker-compose exec -T php composer install
