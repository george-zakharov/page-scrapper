# Page Scrapper project #
This application scraps links and images from the given URL.

## Server setup ##
Using Apache preferred.
_Note: Need `php-curl` library to be installed._

Setup for virtual host example:
```
<VirtualHost *:80>
    ServerName page-scrapper.loc
    DocumentRoot /home/YOURNAME/www/page-scrapper.loc/web/
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

## Assets used ##
* css/bootstrap.min.css
* css/font-awesome.min.css
* css/main.css
* js/bootstrap.min.js
* js/jquery-3.1.0.min.js
