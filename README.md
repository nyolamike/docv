# docv

A cv auditing platform in laravel

## setup

* Install PHP

```terminal
brew install php@8.2
```

* Install compser [Website Instructions](https://getcomposer.org/download/)

```termial
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```

```termial
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
```

```terminal
php -r "unlink('composer-setup.php');"
```

This will put the composer.phar file into the current directly. If you need composer to be global then move it to your PATH

```terminal
sudo mv composer.phar /usr/local/bin/composer
```

## Get Laravel using composer

```terminal
composer global require laravel/installer
```

The installer will be downloaded and install laravel

## Add laravel to your path in ~/.zshrc

```terminal
nano  ~/.zshrc
```

add the following at the bottom of the file and restart your terminal or run `source ~/.zshrc` to load it in without closing the terminal

```zshrc
export PATH="$HOME/.composer/vendor/bin:$PATH"
```

## Create a new project

```terminal
laravel new docv
```

## Install valet

```terminal
composer global require laravel/valet
```

now run

```terminal
valet install
```

This installs nginx, phpfpm, dnsmasq

Tell valet to use the current folder

```terminal
sudo valet park
```

To see the site go to [http://docv.test/](http://docv.test/)

to see packed projects

```terminal
sudo valet parked
```

to user .dev tld instead of .test

```terminal;
sudo valet tld dev
```

- blade is template enginee that laravel uses
- artisan is a command line utility for generating eloquent models
- eloquent is our ORM
- sanctum is an authentication library for laravel api
- views are in the resources folder




