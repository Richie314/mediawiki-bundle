# PostgreSQL demo DB
This is a demo configuration based upon a postgresql instance. It also spawns a pgadmin4 instance on port 8080.

## Run the sample
Move in the current folder
```bash
cd Examples/postgres
```

Start the container via 
```bash
docker-compose up -d
```

Follow the setup and download the LocalSettings.php file. Append, at the end of the file, the line
```php
require_once __DIR__ . "/BundleSettings.php";
```
and save it in the current folder.

Edit the [docker-compose.yml](./docker-compose.yml) file by **uncommenting** the line that contains ```LocalSettings.php``` (removing the '#' at the start)

Restart the container
```bash
docker-compose down && docker-compose up -d
```
### Credentials
Postgres's user is ```admin``` and its password ```password```. The database to use is ```my_wiki```.

pgAdmin's user is ```admin@pgadmin.com``` with password ```password```.

Both pgAdmin and mediawiki will find the postgres instance at the address ```postgres``` on port 5432

## Sample logos
The logos provided by default are taken from [SvgRepo](https://svgrepo.com)