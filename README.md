# OpenGisCRM CodeIgniter 4 Version
Manage your clients and leads with an Open Source Gis CRM Software.

## Starting 🚀

_These instructions will allow you to get a copy of the project running on your local machine for development and testing purposes._

## Demo Web-App :movie_camera: 


* [Demo CodeIgniter 4](https://www.youtube.com/watch?v=nDQmo14mxuk)

### Pre-requirements 📋

- PHP 7.4 >=
- PostgreSQL (Or MySQL)
- [Composer](https://getcomposer.org/)

## Additional details on dependencies

Assuming you're running Ubuntu, and then install all dependencies from the following list:

sudo apt-get install php7.4 php7.4-pgsql php7.4-mysql php7.4-intl php7.4-json php7.4-mbstring

## Installation

The following steps are meant to be used on a development server.


- Clone Project

```bash
$ composer create-project opengiscrm/auth
``` 
- Setup vendor libraries 

```bash
$ composer install
```
- Run server 

```bash
$ php spark serve
```
- Create Database and Run migrations

```bash
$ php spark db:create 
```

```bash
$ php spark migrate -all
```

- Run seeds

```bash
$ php spark db:seed LoadSeeder
```

## Access Web-App:

_Admin: youremail@yourdomain.com

## Technologies 🛠️

* [CodeIgniter v4.2.10](https://codeigniter.com/user_guide/index.html) 

## Courses :movie_camera: 

* [Youtube](https://www.youtube.com/channel/UCh7tHVI7ZmqJbJmpPlvl7HQ)
* [Udemy](https://www.udemy.com/course/codeigniter-4-desarrollando-en-linux/?referralCode=9607DCD14D42AE5C29F9)    

## Author ✒️

* **Jonathan Castro** - *Web Developer* - [jonathancastrodeveloper](https://github.com/jonathancastrodeveloper)

## Contact :telephone_receiver:

* [Discord](https://discord.gg/hzgXcPxkmq)

## Contact :mailbox:

_jonathancastro@opengiscrm.com_

## Donations 🎁

* [Paypal](https://paypal.me/joncastroweb?locale.x=es_XC) - Thank you very much for your contribution.
