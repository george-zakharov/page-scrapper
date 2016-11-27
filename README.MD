# Page Scrapper project #
This application scraps links and images from the given URL.

## Server setup ##
Using Apache preferred.
Setup for virtual host example:
```
<VirtualHost *:80>
    ServerName page-scrapper.loc
    DocumentRoot /home/wildwind/www/page-scrapper.loc/web/
    <Directory />
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php
        
        # other settings
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

## Project structure ##
* _core_ directory consists of general scripts of this application
* _web_ directory consists of index file and _assets_.
    * _assets_ stores css and js files used.

### web/index.php ###
This is the entry point of the application.
It consists of html layout with URL form inside.

### core/***.php ###
Provides math operations with data.
* Parameters:
    * `$***` for ***,
    * `$***` for ***,
    * `$***` for ***.
* Main methods are:
    * `__construct()` for ***,
    * `***` to ***,
    * `***` for ***,
    * `***` for ***,
    * `***` for ***,
    * `***` for ***.

## Assets used ##
* css/bootstrap.min.css
* css/font-awesome.min.css
* css/main.css
* js/bootstrap.min.js
* js/jquery-3.1.0.min.js