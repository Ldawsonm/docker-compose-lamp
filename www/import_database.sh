#!/bin/bash

# Variables
DB_USER="root"
DB_PASS="tiger"
DB_NAME="drupal"
DUMP_FILE="database.dump"

# Check if the dump file exists
if [ ! -f "$DUMP_FILE" ]; then
    echo "Dump file not found: $DUMP_FILE"
    exit 1
fi

# Create the database (optional: remove this block if the database already exists)
echo "Creating database $DB_NAME..."
mysql -u "$DB_USER" -p"$DB_PASS" -h database -e "CREATE DATABASE IF NOT EXISTS \`$DB_NAME\`;"

# Import the dump into the database
echo "Importing dump into $DB_NAME..."
mysql -u "$DB_USER" -p"$DB_PASS" -h database "$DB_NAME" < "$DUMP_FILE"

if [ $? -eq 0 ]; then
    echo "Database imported successfully."
else
    echo "Error occurred during import."
fi
