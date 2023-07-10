
Creating a blog using Laravel

1. Created a path for my app on my local machine, we are going to be using a server for the laravel application
   So we connect to our server, tools / deployment /configuration. Then we open our SSH terminal and run
   "composer create-project laravel/laravel DAblog(ProjectName) --prefer-dist(to select the latest version)"
2. Navigated to our public_html directory on our server in our terminal which is visible to the public and create a shortcut for our app
   using " ln -s ../DAblog/public DanielArshBlog"
3. Downloaded the app from the server and placed the vendor folder in the excluded path, this prevents downloading the vendor file
   from the server which helps to save download time.
4. Once the App file is downloaded, opened the ENV file and connected to database
