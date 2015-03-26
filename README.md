# RestFulApi
Sample Code for RestFul Api my personal information.  

How it works.
1. You can use PostMan addons in Google Chrome.
2. Just paste this url /index.php?name=first
3. For more user friendly URL you can create an .htaccess file, please see below  code.

Try this .htacces in your localhost
--------------------------------------------------------
# Turn on the rewrite engine
Options +FollowSymLinks
RewriteEngine On

# Request routing
RewriteRule ^([a-zA-Z_-]*)$ index.php?name=$1 [nc,qsa]
--------------------------------------------------------
