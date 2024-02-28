#!/bin/bash

# Step 0. Check if the user's current working directory is the same as the script's directory
SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
if [[ $PWD != $SCRIPT_DIR ]]; then
    echo "Please run the script from the same directory where the script is located."
    exit 1
fi

# Step 1. Check if the compose container named "webserver" and "database" are currently running
WEB_SERVER_CONTAINER="webserver"
DATABASE_CONTAINER="database"

if ! docker compose ps | grep -q $WEB_SERVER_CONTAINER; then
    echo "Webserver container is not running."
    exit 1
fi

if ! docker compose ps | grep -q $DATABASE_CONTAINER; then
    echo "Database container is not running."
    exit 1
fi

# Step 2. Run the mysqldump command inside the webserver container
# Note: You should pass the password as an environment variable or through a secure method.
#       Avoid hardcoding passwords directly in scripts.
docker compose exec $WEB_SERVER_CONTAINER /bin/bash -c \
    "mysqldump -h $DATABASE_CONTAINER -p\$MYSQL_ROOT_PASSWORD drupal > drupal_database.sql"

# Check if the command was successful
if [ $? -ne 0 ]; then
    echo "The mysqldump command failed."
    exit 1
fi

# Step 3. Move the file to the current directory
mv www/drupal_database.sql $PWD/drupal_database.sql

# Check if the file was successfully copied
if [ $? -ne 0 ]; then
    echo "Failed to copy database.dump to the current directory."
    exit 1
fi

echo "Database dump was successful and moved to the current directory."
