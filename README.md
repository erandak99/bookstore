Symfony Assignment
==============
PHP Version: **PHP 7.2**
symfony Version **PHP 3.4**

Step 1

Clone the project:
https://github.com/erandak99/bookstore.git

Step 2

Run `composer install`

Step 3

Config database(sample db details): `app/config/parameters.yml.dist`

Step 4 

Create Database : `php bin/console doctrine:database:create`

Step 5

Create Schema: `php bin/console doctrine:schema:update --force`

Step 6

Feed the database `php bin/console doctrine:fixtures:load`

Step 7

Run the application: `php bin/console server:start`

**Test Cases**

`./vendor/bin/simple-phpunit`


**Note:**
* Coupon stored in coupon table.
* Discount details are stored in the catergory table.
* Cart Total Value rounded for two decimal places.
* Recommended environment is linux(Development done from ubuntu-Mint)
* Since there are no any user registration, cart's books store using a unique id. when user close the browser, cart item will         be lose.
