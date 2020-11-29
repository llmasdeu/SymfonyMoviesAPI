# SymfonyMoviesAPI
Simple movies API written with Symfony 5.

## Installation

In order to execute this project, there are some changes needed to be made, detailed here:

1. We need to set the database parameters. To do so, go to the file `.env`, and modify the following line: `DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"`. The package used for the dependencies allows other database engines, such as SQLite or PostgreSQL. However, this project has been tested with MySQL.

2. In the project's folder, we'll need to create the database. For that, we'll execute the command `bin/console doctrine:database:create`.

3. Now we need to export the written entities as the schema for the database. We'll need to execute the command `bin/console make:migration`. Having executed it, a prompt will appear requesting us if we want to continue. We need to write 'yes'.

4. Once exported the entities, we need to migrate them to the database as tables. To do so, we'll execute the command `bin/console doctrine:migrations:migrate`. As the previous step, a prompt will appear requesting us if we want to contine. We need to agree.

5. All set!

## Methods

This API has implemented the following methods:

* `[GET] /list_movies` -> This will retrieve the registered movies in the database.
* `[GET] /get_movie` -> This will get movies that match the search criteria indicated by the user. There are four possibles fields: `id`, `title`, `director`, `year`. To make this work, we need to indicate at least one of these fields. NOTE: the `title` and `director` fields need the exact value.
* `[POST] /add_movie` -> This will allow us to register a movie. In order to do so, we need to indicate a `title`(string), a `director`(string), and a `year`(string).
