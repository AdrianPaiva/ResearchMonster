**Make you have COMPOSER installed, simply navigate to the project directory, right click and select use composer here or use the command line in PHPstorm**


**For the database make sure to use migrations instead of using phpmyadmin to work on the database**!

simply use "php artisan migrate" after you create an empty database in mysql named "researchmonster"

This creates all the tables from laravel code and saves us from manually loading databases everytime we change something!

You can fill the database with data you specify in code using seeds, just type "php artisan db:seed".

You can look at the users table migration and seed file for an example!