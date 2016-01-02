# [Kokekunster.no](www.kokekunster.no)
A collection of hotlinks for everything you need frequent access to as a student enrolled in the "Applied Physics and Mathematics" Master in Science Program at NTNU.

URL: [www.kokekunster.no](www.kokekunster.no)

The website is mainly written in HTML and CSS. PHP is used sparingly in order to import repetitive code across the site, and javascript is used to save the user's choice of semester in a cookie and subsequently redirect the user to the correct semester during their next visit.

The site offers responsive design, intended for use with most browsers and and form factors. The file archive uses the [h5ai file indexer](http://larsjung.de/h5ai/) in order to serve locally hosted files in a more user friendly and appealing fashion.

## Installation instructions
The included virtualhost configuration is written for Apache 2, but the website could also be hosted with lighttpd, nginx and cherokee, since these are the webservers supported by the h5ai file indexer. But you will need to rewrite the virtualhost configuration for webservers other than Apache 2.

 The following are instructions for setting up a webserver which can serve the website, including the h5ai file indexer. The given commands need to be entered in your terminal.

Update your package lists from the repositories and upgrade existing packages.
```Shell
sudo apt-get update && sudo apt-get -y upgrade && sudo apt-get -y dist-upgrade && sudo apt-get -y autoremove
```

####Enable Apache modules
Install the Apache 2 webserver, php5, and exim4.
```Shell
sudo apt-get -y install apache2 apache2-doc apache2-utils
sudo apt-get -y install php5 libapache2-mod-php5 php5-mcrypt
sudo apt-get -y install exim4
```

Enable the apache modules used for rewriting URLs and making URLs case-insensetive.
```Shell
sudo a2enmod rewrite
sudo a2enmod speling
```

Now we need to install the mod_pagespeed "output filter" module which optimizes the speed of the served web content. Ubuntu and Debian have packages you can download and install (or any Linux distribution that uses .DEB packages).

If you’re on a 64-bit version (likely)...

```Shell
wget https://dl-ssl.google.com/dl/linux/direct/mod-pagespeed-stable_current_amd64.deb
```

If you’re on a 32-bit version (less likely)...
```Shell
wget https://dl-ssl.google.com/dl/linux/direct/mod-pagespeed-stable_current_i386.deb
```

Install this downloaded package.

```Shell
sudo dpkg -i mod-pagespeed-*.deb
sudo apt-get -f install
```

And then remove the downloaded package.

```Shell
rm mod-pagespeed-*.deb
```

####Install h5ai prerequisites
Install necessary packages in order for h5ai to be able to generate thumbs for different media content types.
```Shell
sudo apt-get install php5-gd libav-tools imagemagick tar zip
```

####Set up the Mail Transfer Agent (MTA)*
*A good DigitalOcean guide can be found [here](https://www.digitalocean.com/community/tutorials/how-to-install-the-send-only-mail-server-exim-on-ubuntu-12-04). A specific guide for kokekunster will follow.

To configure Exim for your environment, execute:
```Shell
sudo dpkg-reconfigure exim4-config
```

Make the following choices in the configuration window which appears on your screen:

1) `internet site; mail is sent and received directly using SMTP`.

2) System mail name: the same as your Fully Qualified Domain Name (FQDN), e.g. `silicon.kokekunster.no`.

3) SMTP listen on: `127.0.0.1 ; ::1`.

4)  Other destinations for which mail is accepted: List your FQDN, local hostname, `localhost.localdomain`, and `localhost`, e.g. `silicon.kokekunster.no; silicon; localhost.localdomain; localhost`.

5) Domains to relay mail for: `Leave this field blank`.

6) Machines to relay mail for: `Leave this field blank`.

7) Keep number of DNS-queries minimal (Dial-on-Demand): `<No>`

8) Delivery method for local mail: `Maildir format in home directory`

9) Split configuration into small files? `<No>`

####Clone the website repository
Now we need to create the folder which will contain the DocumentRoot for the website's content.

```Shell
mkdir -p /var/www/kokekunster.no
```

And then we can clone the website's repository to a folder named public_html within this folder.

```Shell
git clone https://github.com/JakobGM/kokekunster.no.git /var/www/kokekunster.no/public_html
```

Create a symbolic link between apache sites-available folder and the repository's virtualhost configuration.

```Shell
sudo ln -s /var/www/kokekunster.no/public_html/virtualhosts/kokekunster.no.conf /etc/apache2/sites-available/kokekunster.no.conf
```

Enable the website in Apache 2.
```Shell
sudo a2ensite kokekunster.no
```

The site should now be up and running!
