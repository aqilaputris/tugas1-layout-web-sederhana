
 ## PEMBUATAN TABLE MIGRATION
   php artisan make:migration nama_migrasinya --create-name_table

   php artisan migrate

   php artisan make:model Models/Post

   php artisan make:seeder PostSeeder
   php artisan db:seed --class:PostSeeder

   php artisan make:controllers PostController










## PEMBUATAN DATABASE 
table: prefences
id 
name
contact

 banner_image
 banner_title
 banner_text
 about_title
 about_text_one
 about_text_two
 footer_address
 footer_facebook
 footer_twitter
 footer_linkedln
 footer_web
 footer_about_text
 
table: portfolio
id
image
title
desc

table: contact
id
name
email
phone
message

  $table->string('name');
            $table->string('contact');
            $table->string('banner_image');
            $table->string('banner_title');
            $table->string('banner_text');
            $table->string('about_title');
            $table->string('about_text_one');
            $table->string('about_text_two');
            $table->string('footer_address');
            $table->string('footer_facebook');
            $table->string('footer_twitter');
            $table->string('footer_linkeldn');
            $table->string('footer_web');
            $table->string('footer_about_text');
