## JSOBlog in Laravel


JSOBlog is simple blog engine developed using laravel By Hiren Kavad. JSOBlog doesn't use any database. JSOBlog maintains all blog post data in Plain JSON File. So it is very fast.

JSOBlog is suitable for Blog of your personal website or organization. It is very easy to templating your post page any any theme because JSOBlog utilizes Blade templating engine.

## Why JSOBlog ?

  - It's Simple
  - Copy and install
  - Easy api bulding(Laravel)
  - Easy to mould into your template

## Getting Started

  It is very easy to install JSOBlog on your server or machine. it can run on any php environment. Follow Below step for installation.
  1. Fork or clone code on your server's webroot.
  2. Open Your command prompt and download all dependecy using 'composer install' command.
  3. Open app/database/db/user.jdb file.
  4. Add your email address and plain password. as per below snippet 
  
  -
      {
        "user": [
            {
                "username": "hiren",
                "email": "hirenkavad@ymail.com",
                "password": "mypass",
                "que": "Favourite Pet",
                "ans": "Montu"
            }
        ]
      }

  5. Start laravel server by " php artisan serve " command or if you are using shared hosting than change little bit configuration as per below guide. [Laravel on shared hosting](http://driesvints.com/blog/laravel-4-on-a-shared-host).
  6. Start Blogging.

## For Developers

  1. Use it, fork it, share it.
  2. Pull request appreciated.
  3. Please give suggestion and make JSOBlog more rich
  4. You can create api based blog very easily. just refer code of app/Controllers/BlogController.php for code.
  5. Current Version of JSOBlog is jusy concept, can be used for simple bloging. make it more rich by your effort. Lots of things to be added yet.
  


### License

The JSOBlog is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
