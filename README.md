symfony_tests
=============

CRUD using PHP & Symfony2/3 for a simple Contact form.

### Were used:

- Symfony 2/3
- Doctrine
- Composer
- Twig Template
- Bootstrap
- Ajax
- FOSUserBundle - Security
- knplabs/knp-paginator-bundle - Pagination
- doctrine/doctrine-fixtures-bundle - Fixture

- Deployed in Amazon AWS [http://ec2-34-253-121-209.eu-west-1.compute.amazonaws.com](http://ec2-34-253-121-209.eu-west-1.compute.amazonaws.com)  

### Installation & Usage

* Create a database in Mysqladmin
* Follow the instructions from the link to install the composer in the app folder. Https://getcomposer.org/download/
* run ``` composer install ```
* run ``` php app/console doctrine:schema:update --force ``` 
* run ``` php app/console doctrine:fixtures:load ```
* run ``` php app/console server:run ``` 
* User: ``` admin ``` password: ``` admin ```


