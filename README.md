# www.kokekunster.no
En linkportal for alt du trenger som en FYSMAT-student

URL: www.kokekunster.no

Linkportalen er hovedsakelig skrevet fra scratch med HTML og CSS.
PHP benyttes for import av repetativ HTML kode på kryss av semesterene
og javascript for å manipulere semester-spesifikk CSS på disse elementene.
Javascript benyttes også for å sette cookie for hvilket semester som er
foretrukket av brukeren, og javascriptet redirecter til riktig semsester.


Siden har som hensikt å fungere for de fleste formfaktorer og nettlesere,
med unntak av mange utgaver av Internet Explorer, hvor .svg skaleringen
for øyeblikket er kun delvis fungerende.


Arkivet benytter seg av h5ai (http://larsjung.de/h5ai/), et filindekseringssystem
som gjør arkivet litt mer snasent enn Apache sin standard filindeksering.


Eventuelle planer for utvidelse:
- .png fallback bilder for nettlesere som ikke støtter .svg
- Ressursside med oversikt over alle bøkene som FYSMATere trenger, ShareLatex
  ressurser og andre innsida-artikler som er relevante
- Fikse custom error 404 .html fallback med link tilbake til semesterene og arkivet
- Legge til link til git repo-et
- Legge til 4. semester


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
                DirectoryIndex index.php 1semester.php  index.html  /_h5ai/server/php/index.php

                #All URLS rewritten as kokekunster.no --> www.kokekunster.no
                RewriteEngine On
                RewriteCond %{HTTP_HOST} !^www\.
                RewriteCond %{HTTPS}s ^on(s)|
                RewriteRule ^ http%1://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

                #Fix wrong capitalization
                CheckSpelling On
                CheckCaseOnly On

                # Direct Apache to send all HTML output to the mod_pagespeed output handler.
                AddOutputFilterByType MOD_PAGESPEED_OUTPUT_FILTER text/html

        </Directory>
        <Directory /var/www/kokekunster.no/public_html/>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
                Order allow,deny
                allow from all
                DirectoryIndex  index.php 1semester.php index.html  /_h5ai/server/php/index.php

                # Direct Apache to send all HTML output to the mod_pagespeed output handler.
                AddOutputFilterByType MOD_PAGESPEED_OUTPUT_FILTER text/html
        </Directory>

        <Directory />
                Options FollowSymLinks
                AllowOverride None
                DirectoryIndex  index.php 1semester.php index.html  /_h5ai/server/php/index.php
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
