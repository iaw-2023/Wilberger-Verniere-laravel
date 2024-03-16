#!/bin/bash

# Update package list and install dependencies
apt-get update
apt-get install -y libpq-dev

# Install pdo_pgsql extension
docker-php-ext-install pdo_pgsql