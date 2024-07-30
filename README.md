# Mediawiki Preconfigured
This is a Docker image based upon [mediawiki:latest](https://hub.docker.com/_/mediawiki/)

It is bundled with various extensions that come preconfigured

## Configuration
After starting the image, follow the instructions and download the ```LocalSettings.php``` volume.
At the end of the file add this line to include the bundled modules and configure them

```php
require_once __DIR__ . "/BundleSettings.php";
```

You can add other modules as you normally would after this line.

## Bundled modules
- [ContributionScores](https://www.mediawiki.org/wiki/Extension:Contribution_Scores)
- [LastUserLogin](https://www.mediawiki.org/wiki/Extension:LastUserLogin)
- [Maintenance](https://www.mediawiki.org/wiki/Extension:Maintenance)
- [Iframe](https://www.mediawiki.org/wiki/Extension:Iframe)
- [EmbedVideo](https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo)
- [Maps](https://maps.extension.wiki/)
- [WikiEditor](https://www.mediawiki.org/wiki/Extension:WikiEditor)
- [CodeMirror](https://www.mediawiki.org/wiki/Extension:CodeMirror)
- [TemplateStyles](https://www.mediawiki.org/wiki/Extension:TemplateStyles)
- [ParserFunctions](https://www.mediawiki.org/wiki/Extension:ParserFunctions)
- [WikiMarkdown](https://github.com/kuenzign/WikiMarkdown/)
- [Cite](https://www.mediawiki.org/wiki/Extension:Cite)
- [MobileFrontend](https://www.mediawiki.org/wiki/Extension:MobileFrontend)
- [DarkMode](https://www.mediawiki.org/wiki/Extension:DarkMode)
- [Popups](https://www.mediawiki.org/wiki/Extension:Popups)
- [PageImages](https://www.mediawiki.org/wiki/Extension:PageImages)
- [TextExtracts](https://www.mediawiki.org/wiki/Extension:TextExtracts)

## Useful templates
- [KeyPress](https://en.wikipedia.org/wiki/Template:Key_press)

### Example configurations
Three docker-compose examples are provided:
- [SQLite based](./Examples/sqlite/)
- [MariaDB based](./Examples/mariadb/)
- [PostgreSQL based](./Examples/postgres/)