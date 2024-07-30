# MariaDB demo DB
This is a demo configuration based upon a sqlite db. It also spawns a phpmyadmin instance on port 8080

## Run the sample
Move in the current folder
```bash
cd Examples/mariadb
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
Mariadb's user is ```root``` and its password ```password```.

This is a demo and those credentials can't be used in a real scenario.
## Sample logos
The logos provided by default are taken from [SvgRepo](https://svgrepo.com)