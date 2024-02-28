#!/bin/bash

SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
if [[ $PWD != $SCRIPT_DIR ]]; then
    echo "Please run the script from the same directory where the script is located."
    exit 1
fi

# Variables
DB_NAME="drupal"
DUMP_FILE="drupal_database.sql"
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

# Check if the dump file exists
if [ ! -f "$DUMP_FILE" ]; then
    echo "Dump file not found: $DUMP_FILE"
    exit 1
fi

# Create the database (optional: remove this block if the database already exists)
echo "Creating database $DB_NAME..."
docker compose exec $WEB_SERVER_CONTAINER /bin/bash -c \
"mysql -p"\$MYSQL_ROOT_PASSWORD" -h database -e \"CREATE DATABASE IF NOT EXISTS drupal\""

# Import the dump into the database
echo "Importing dump into $DB_NAME..."
mv $DUMP_FILE www/$DUMP_FILE
docker compose exec $WEB_SERVER_CONTAINER /bin/bash -c \
"mysql -p\"\$MYSQL_ROOT_PASSWORD\" -h database \"$DB_NAME\" < \"$DUMP_FILE\""

if [ $? -eq 0 ]; then
    echo "Database imported successfully."
else
    echo "Error occurred during import."
fi