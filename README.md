
Creating a blog using Laravel

1. Created a path for my app on my local machine, we are going to be using a server for the laravel application
   So we connect to our server, tools / deployment /configuration. Then we open our SSH terminal and run
   "composer create-project laravel/laravel DAblog(ProjectName) --prefer-dist(to select the latest version)"
2. Navigated to our public_html directory on our server in our terminal which is visible to the public and create a shortcut for our app
   using " ln -s ../DAblog/public DanielArshBlog"
3. Downloaded the app from the server and placed the vendor folder in the excluded path, this prevents downloading the vendor file
   from the server which helps to save download time.
4. Once the App file is downloaded, opened the ENV file and connected to database
5. Installed the UI scaffolding using "composer require laravel/ui="4.*", then ran "php artisan ui bootstrap"
   then ran the frontend package "npm install && npm run build".
6. Installed easy authentication with "php artisan ui: auth"
7. Modified the user_table migration by adding a 'type' field to filter which type of user is logged in
8. created an article and category model ,controller and migration " php artisan make:model Article -cm
   " and " php artisan make:model Category -cm"
9. Created another migration to increase the body field for the articles table "php artisan make:migration modify_body_table_name --table=articles
   "
**Note : after every table created and updated we always run the migration using "php artisan migrate"
10. 
