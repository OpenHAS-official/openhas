> :warning: **Still in development**: Please be aware that OpenHAS is still in active development and that the current version is not suitable for live use. Some links in this file may not work correctly. The (api) documentation is not yet available. The first version will hopefully be released soon.

<p align="center"><a href="https://openhas.net" target="_blank"><img src="https://github.com/OpenHAS-official/media/raw/master/logo/gradient-fullslogan.svg?raw=true" alt="OpenHAS Logo" title="OpenHAS Logo" width="400"></a></p>

## About OpenHAS
[OpenHAS](https://openhas.net) is a completely new, ready-to-use, automation software specially developed for hosting businesses. The software is built on the Laravel PHP framework and is therefore extremely fast, easy to maintain and clear for other developers. The application has lots of advantages but the most important one is the fact that the software is 100% open-source. That bring some major advantages over closed-source alternatives. Having the ability to change every single line of code, be able to check for any privacy or security related flaws or add custom modules, it is all possible.

### OpenHAS Cloud
As soon as the first stable version (v1.0.0) of OpenHAS is published, the team will start working hard on a Cloud based version of OpenHAS. This cloud platform will be launched in cooperation with Proxeuse, initially only in Europe.

## Features
Businesses can automate lots of proccesses when using OpenHAS. Admin users are able to shape the software to their likings, create products, manage the frontend, etc. using the API or the designated back-end. The frontend is build using templates and is therefore completely customizable. The client experience starts when they place an order by choosing (multiple) products, creating an account (or logging in), paying with any of the payment gateways in the list below and automatically having a hosting account created for them on any of the pre-configured servers. Admin users are notified by the new order via email and/or a via a notification service like [Rocket.Chat](https://github.com/RocketChat) or Slack.

## Modules
### Hosting Panels
 - cPanel 86+
 - DirectAdmin 1.60+
 - Plesk 17.8+
 - Nextcloud 17+
 - Owncloud 10.3+
 - Pterodactyl 1.0+
### Domain Registrars
 - Openprovider
 - Request others by creating an Issue.
### Payment Providers
 - Stripe
 - PayPal
 - Mollie
 - Coinbase Commerce
 - Bank Transfer (manual)
### Notification Providers
 - Email
 - Rocket.Chat
 - Slack

## Requirements
 - PHP 7.3+
    - BCMath PHP Extension
    - Ctype PHP Extension
    - cURL PHP Extension
    - Fileinfo PHP Extension
    - JSON PHP Extension
    - Mbstring PHP Extension
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
 - PHP Composer
 - A database, either:
    - MySQL 5.6+ or,
    - PostgresQL 9.4+ or,
    - SQLite 3.3.8+
 - Apache, NGINX or any other PHP compatible webserver
 - SMTP account (or any other mail delivery account [supported by Laravel](https://laravel.com/docs/8.x/mail))
 - Access to the Command Line (SSH)

## Installation
The installation of OpenHAS is fairly simple for experienced users. Below is a basic explanation of how to install OpenHAS with the help of Composer.
 1. Download the latest release file to your local machine.
 2. Unzip the downloaded file.
 3. Upload the unzipped folder to your webserver via (S)FTP or the online file manager provided by your hosting provider.
 4. Run the `php artisan openhas:install` command in your SSH console. It will lead you through the installation proccess and check if all required PHP extensions are available.

Do you get an error message like `Command 'php' not found`? Or do you need help with executing command lines? Then check our [documentation](https://docs.openhas.net/URL_INVULLEN) which has help guides for the most popular hosting panels such as cPanel, DirectAdmin and Plesk. If the guide can't help you, please [open an Issue](https://github.com/OpenHAS-official/openhas/issues/new) on Github.

## Documentation
All documentation files are listed in a [separate Github repository](https://github.com/OpenHAS-official/docs) but are also available on our [online documentation portal](https://docs.openhas.net).

## API
OpenHAS features an extensive and secure REST API. It allows both clients and admins to perform certain tasks from within another application. API keys can be issued by clients and admins in respectively the front-end and the back-end. Full documentation can be [found online](https://api.openhas.net).

## Translations
The primary language of OpenHAS is English but it has a 100% completed translation for Dutch. You are able to translate OpenHAS into the language of your liking by creating new language files. More information can be found in our [documentation](https://docs.openhas.net/URL_INVULLEN). You would help us and the community enormously by adding your translation to the OpenHAS repository. If you would like more information about this, please [create an issue](https://github.com/OpenHAS-official/openhas/issues/new).

## Custom Modules
Do you need other domain registrars, hosting panels or payment gateways to be added? Feel free to [open an Issue](https://github.com/OpenHAS-official/openhas/issues/new), develop it yourself and open a pull request or contact the main developer directly at <roelreijneveld@proxeuse.com>.

## Contributors
 - Proxeuse (Domain registration, webhosting and other supplies and services) | [Website](https://www.proxeuse.com/) | [Github](https://github.com/Proxeuse)
 - Roel Reijneveld (Main Developer) | [Website](https://roelreijneveld.nl) | [Github](https://github.com/RoelReijn) | [LinkedIn](https://linkedin.com/in/roelreijneveld) | [Twitter](https://twitter.com/roelreijneveld)

## About the developer
Roel Reijneveld is a 16-year-old student from the Netherlands. He is currently in his fifth year of the six-year preparatory scientific education course at [Het Streek Lyceum](https://www.hetstreek.nl/bovenbuurtweg). His passion for technology started with his birth and at the age of six/seven he started making websites with free to use drag-and-drop builders. In the first year of his current study, a school project took place in which the assignment was to create a website with WordPress. This was the first contact with a PHP application and the concept of webhosting and was the reason for founding his own company (Proxeuse) in August 2018. Since then, Roel has focused his business on high quality, privacy-friendly services and with that, his customer base has been growing. Halfway through 2019 Roel started writing simple PHP scripts and plugins. After that Roel learned the basics of the Laravel framework and developed the idea for an open-source hosting automation system in early 2020.

## License
Open Source Hosting Automation Software (OpenHAS)
Copyright (C) 2020 Roel Reijneveld

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
