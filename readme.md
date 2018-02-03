# Project implemented during test

## Installation

Create a `.env` file. You can copy the `.env.example` file. The DB details need to updated.

````
DB_DATABASE=rohit_blog
DB_USERNAME=root
DB_PASSWORD=
````

Then run the following commands to finish up.
````
$ composer install
$ php artisan migrate --seed
$ php artisan serve
````

Two users are seeded - rohit.admin@gmail.com and rohit.user@gmail.com. Password for both is `secret`.

To create a new post, visit "/admin/posts/new". Posts can be viewed at "/admin/posts". Clicking on the post title will take you to individual post page.
