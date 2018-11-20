#!/bin/bash

path=$(cd "$(dirname "${BASH_SOURCE-$0}")"; pwd)
docker-compose -f "${path}/../docker-compose.yml" exec workspace $@