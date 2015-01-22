**Make you have COMPOSER and xampp installed, simply navigate to inside the project directory, right click on empty space and select use composer here or use the command line in PHPstorm**

**You also need to run the "composer install" command once after you install the project****

**For the database make sure to use migrations instead of using phpmyadmin to work on the database**!

simply use "php artisan migrate" after you create an empty database in mysql named "researchMonster"

This creates all the tables from laravel code and saves us from manually loading databases everytime we change something!

You can fill the database with data you specify in code using seeds, just type "php artisan db:seed".

You can look at the users table migration and seed file for an example!

Use the built-in laravel server instead of apache by typing "php artisan serve" in composer then navigate to "localhost:8000" in your browser.


Tutorial Video - make sure you understand everything in this video!

https://www.youtube.com/watch?v=XwhZ4xX7Qmc