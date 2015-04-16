# www.kokekunster.no
En linkportal for alt du trenger som en FYSMAT-student

URL: www.kokekunster.no

Linkportalen er hovedsakelig skrevet fra scratch med HTML og CSS.
PHP benytter for import av repetativ HTML kode på kryss av semesterne
og javascript for å "påføre" CSS på disse elementene.


Siden har som hensikt å fungere for de fleste formfaktorer,
med unntak av mange utgaver av Internet Explorer.


Arkivet benytter seg av h5ai (http://larsjung.de/h5ai/), et filindekseringssystem
som gjør arkivet litt mer snasent enn Apache sin filindeksering.


Eventuelle planer for utvidelse:
- 3. semester kommer i løpet av sommeferien
- Utvidelse for 2013-kullet
- Cookies eller instilling for hvilket semester du går, slik at når du returnerer,
  så returnerer du til riktig semester-fane
- .png fallback bilder for nettlesere som ikke støtter .svg


Her er oppsettet for Apache-konfigen
```apache
<VirtualHost *:80>
       ServerAdmin webmaster@kokekunster.no
       ServerName kokekunster.no
       ServerAlias www.kokekunster.no
       ServerAlias www.Kokekunster.no
       ServerAlias Kokekunster.no

       DocumentRoot /var/www/kokekunster.no/public_html
       <Directory />
               Options FollowSymLinks
               AllowOverride None
               DirectoryIndex 2semester.php  index.html  index.php  /_h5ai/server/php/index.php
               RewriteEngine On
               RewriteCond %{HTTP_HOST} !^www\.
               RewriteCond %{HTTPS}s ^on(s)|
               RewriteRule ^ http%1://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
       </Directory>
       <Directory /var/www/kokekunster.no/public_html/>
               Options Indexes FollowSymLinks MultiViews
               AllowOverride None
               Order allow,deny
               allow from all
               DirectoryIndex  2semester.php index.html  index.php  /_h5ai/server/php/index.php
       </Directory>

       <Directory />
               Options FollowSymLinks
               AllowOverride None
               DirectoryIndex  2semester.php index.html  index.php  /_h5ai/server/php/index.php
       </Directory>

       ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
       <Directory "/usr/lib/cgi-bin">
               AllowOverride None
               Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
               Order allow,deny
               Allow from all
       </Directory>

       ErrorLog ${APACHE_LOG_DIR}/error.log

       # Possible values include: debug, info, notice, warn, error, crit,
       # alert, emerg.
       LogLevel warn

       CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
