FROM mediawiki:latest

RUN <<EOR
    apt-get update
    apt-get install -y ffmpeg
    rm -rf /var/lib/apt/lists/*
EOR

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
  install-php-extensions zip pgsql

#
# Extensions
#

WORKDIR /var/www/html/extensions

# User and general management
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/ContributionScores.git ./ContributionScores/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/LastUserLogin.git ./LastUserLogin/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/Maintenance.git ./Maintenance/

# Embeds
ADD https://github.com/sigbertklinke/Iframe.git ./Iframe/
ADD https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo.git ./EmbedVideo/
ADD https://github.com/ProfessionalWiki/Maps.git ./Maps/

# Visuals and editors
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/WikiEditor.git ./WikiEditor/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/CodeMirror.git ./CodeMirror/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/TemplateStyles.git ./TemplateStyles/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/ParserFunctions.git ./ParserFunctions/
ADD https://github.com/kuenzign/WikiMarkdown.git ./WikiMarkdown/

# Other components
# ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/Gadgets.git ./Gadgets/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/Cite.git ./Cite/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/Genealogy.git ./Genealogy/

# Appearence
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/MobileFrontend.git ./MobileFrontend/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/DarkMode.git ./DarkMode/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/Popups.git ./Popups/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/PageImages.git ./PageImages/
ADD https://gerrit.wikimedia.org/r/mediawiki/extensions/TextExtracts.git ./TextExtracts/

#
# Composer
# 

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

WORKDIR /var/www/html/extensions/TemplateStyles
RUN composer install --no-dev -o

WORKDIR /var/www/html/extensions/Maps/
RUN composer install --no-dev -o

WORKDIR /var/www/html
COPY ./composer.json ./composer.local.json
COPY ./BundleSettings.php ./BundleSettings.php

RUN composer update --no-dev -o