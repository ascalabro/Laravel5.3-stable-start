# Standard Promo README

###Objectives

Provide an app, for the promotional industry which will pull data from the promostandards SOAP web services. This will eliminate the need for all suppliers' distributors to dedicate  significant time as well as resources to pull their own data.

The following data will be fetched and rendered in the native and web applications:

* Check product inventories - [Inventory 1.2.1 SOAP documentation](http://promostandards.org/service/view/4/)
* Get order shipment notification data - [Order Ship Notification 1.0.0 SOAP documentation](http://promostandards.org/service/view/6/)
* Check order status - [Order Status 1.0.0 documentation](http://promostandards.org/service/view/1/)
* Product data - [Product Data 1.0.0 documentation](http://promostandards.org/service/view/7/)

### Web Server Requirements

The production server is Ubuntu 16.04 and will use PHP 7, but PHP 5.6.25 should work as well.

To install PHP 7 on Ubuntu, I ran these commands:

```
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.0
```
Install the PHP 7 PDO driver:

`sudo apt-get install php7.0-mysql`

A MySQL server must also be running somewhere, it can be local or remote. You will point the website and API to it later.

### Setting up environment

Clone the git repository(access to Bitbucket required) to get started:

`git clone https://ascalabro@bitbucket.org/ascalabro/standard-promo.git`

The website and API are using [Laravel 5.3](https://laravel.com/docs/5.3). The `web` directory contains all code for the public-facing website and API.

The `native` directory contains all code for the native apps(Android, iOS, Windows).

#### Web ####
After cloning the repo, you must install the PHP dependencies. We use the wonderful package manager composer.

If you do not have composer, see https://getcomposer.org/download/ to install:

Run the following command to install all PHP dependencies:

`$ composer update`

This will install all dependencies to the `/web/vendor` folder.

Next, add a new virtual host for the website, and set the web root to the `/web/public/` directory.

The following Apache VirtualHost configuration works for me:
      
```apacheconfig
DocumentRoot "/full/path/to/standard-promo/web/public"
ServerName dev.standard-promo
<Directory "/full/path/to/standard-promo/web/public">
  allow from all
  Options None
  Require all granted
</Directory>
```

Next, you must edit the `.env` file, specifically the db credentials section, to match your MySQL database credentials. The base database for the app is called `standard_promo` in production.

After making sure the credentials are correct and the database has been created, run the app migrations by utilizing [Laravel artisan](https://laravel.com/docs/5.3/artisan): 

`php artisan migrate`

To test your app, you can run `php artisan serve --host 0.0.0.0`, and you will be able to access the app at the url that appears on your vm. Example:

```
$ php artisan serve --host 0.0.0.0
Laravel development server started on http://0.0.0.0:8000/
```

Now, type the url into a browser exchanging `0.0.0.0` with your vm's IP address.

##### Database configuration

Web uses MySQL relational database. Native properties connect to the web API to get data.

#### Native app ####

TODO: Create documentation for setting up native app dev environment