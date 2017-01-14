# Standard Promo README

###Objectives

Provide an app, for the promotional industry which will pull data from the promostandards SOAP web services. This will eliminate the need for all suppliers' distributors to dedicate  significant time as well as resources to pull their own data.

The following data will be fetched and rendered in the native and web applications:

* Check product inventories - [Inventory 1.2.1 SOAP documentation](http://promostandards.org/service/view/4/)
* Get order shipment notification data - [Order Ship Notification 1.0.0 SOAP documentation](http://promostandards.org/service/view/6/)
* Check order status - [Order Status 1.0.0 documentation](http://promostandards.org/service/view/1/)
* Product data - [Product Data 1.0.0 documentation](http://promostandards.org/service/view/7/)

### Web Server Requirements

The production server is Ubuntu 16.04 and will use PHP 7, but PHP 5.6.25 should work as well(Laravel 5.3 requires PHP 5.6 or greater)

To install PHP 7 on Ubuntu, I ran these commands:

```
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.0
```
Install the PHP 7 PDO driver:

`sudo apt-get install php7.0-mysql`

You may have to also install mbstring and zip

`sudo apt-get install php7.0-mbstring`
`sudo apt-get install php7.0-zip`

A MySQL server must also be running somewhere, it can be local or remote. You will point the website and API to it later.

## Setting up project environment

The repository lives in [Bitbucket](https://bitbucket.org/). You must be granted access to the [repo](https://bitbucket.org/ascalabro/standard-promo) before cloning is possible.

Clone the git repository to get started:

`git clone https://ascalabro@bitbucket.org/ascalabro/standard-promo.git`

The public-facing website and API are using [Laravel 5.3](https://laravel.com/docs/5.3). The `web` directory contains all of this code.

The `native` directory contains all code for the native apps(Android, iOS, Windows).

### Web ####

#### Backend setup (required)
After cloning the repo, you must install the PHP dependencies. We use the wonderful package manager composer.

If you do not have composer, see https://getcomposer.org/download/ to install:

Run the following command to install all PHP dependencies:

`$ composer update`

This will install all dependencies to the `/web/vendor` folder.

Next, add a new virtual host for the website, and set the web root to the `/full/path/to/standard-promo/web/public/` directory.

The following Apache VirtualHost configuration works for me:
      
```apacheconfig
DocumentRoot "/full/path/to/standard-promo/web/public"
ServerName dev.standard-promo
<Directory "/full/path/to/standard-promo/web/public">
    allow from all
    AllowOverride All
    Require all granted
</Directory>
ErrorLog ${APACHE_LOG_DIR}/standard-promo-error.log
CustomLog ${APACHE_LOG_DIR}/standard-promo-access.log combined

```

Next, you must edit the `.env` file, specifically the db credentials section, to match your MySQL database credentials. The default database for the app is called `standard_promo`.

After making sure the credentials are correct and the database has been created, run the app migrations by utilizing [Laravel artisan](https://laravel.com/docs/5.3/artisan): 

`php artisan migrate`

To test your app, you can run `php artisan serve --host 0.0.0.0`, and you will be able to access the app at the url that appears on your vm. Example:

```
$ php artisan serve --host 0.0.0.0
Laravel development server started on http://0.0.0.0:8000/
```

Now, type the above url into a browser exchanging `0.0.0.0` with your vm's IP address.

#### Front-end setup for development

Use Laravel's Elixir API for Gulp tasks. See the [docs](https://laravel.com/docs/5.3/elixir)

Make sure Node.js and NPM are installed on your machine, as well as Gulp.

Test for presence of node & npm  

```
$ node -v
$ npm -v
```

Make sure [Gulp](http://gulpjs.com/) is installed. 

`$ npm install --global gulp-cli`

The default package.json file includes Elixir and the Webpack JavaScript module bundler. 
Think of this like your `composer.json` file, except it defines Node dependencies instead of PHP. 
You may install the dependencies it references by running:

`$ npm install`

If you are developing on a Windows system or you are running your VM on a Windows host system, you may need to run the npm install command with the --no-bin-links switch enabled:

`# npm install --no-bin-links`

We use Sass which is stored at `/web/resources/assets/sass`. This is compiled to `/web/public/css/`.

Same goes for the js in `/web/resources/assets/js`.

See the docs for [running Elixir](https://laravel.com/docs/5.3/elixir#running-elixir) for working with front-end assets.

#### Database configuration

Web uses MySQL relational database. Native apps will connect to the web API to get data.

### Native app ####

TODO: Create documentation for setting up native app dev environment