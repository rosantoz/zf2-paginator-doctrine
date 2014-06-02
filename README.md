# Zend Framework 2 Paginator + Doctrine 2

This project is an example on how to use ZF2 Paginator and Doctrine 2 together.


# Installation

1. Clone this project by typing `git clone https://github.com/rosantoz/ ....` on your terminal;
2. Enter the project directory: `cd [folder name]`
3. Update composer (optional): `php composer.phar self-update`
4. Run composer: `php composer.phar install`
5. Create a local.php file on `config/autoload` folder and insert your database credentials
```
<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params'      => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => '1234',
                    'dbname'   => 'zf2_doc_paginator',
                    'encoding' => 'utf8',
                )
            )
        )
    )
);
```
6. Use doctrine command line tool to create the database table `php public/index.php orm:schema-tool:create`
7. Use doctrine command line tool to create data fixtures `php public/index.php data-fixture:import`


# Read more

For a more detailed explanation go to [insert blog post url]


@todo change repo name and update instructions

for the blog post:

1 - Create Adapter on module/Application/src/Application/Paginator/Adapter
2 - Create paginator service on module/Application/Module.php
3 - Create User Repository and implement method count and getItems
4 - Call paginator service on your controller
5 - Implement view
6 - Create partial file to show paginator links (add to view_manager on module.config)
7 - Create application/paginator route

for github:

