Silex-bootstrap
===============

Silex-bootstrap is an already setup [Silex][silex] project. It helps you get started by providing you with everything you need for a lightweight Silex application. By the way, [Silex][silex] is a PHP micro-framework.

This project embeds an HTML5Boilerplate structure with Twitterboostrap 2 for the frontend. Regarding the backend, the basics is already setup for you. There is some templating, routing, cache, controllers, basic settings and a solid directory structure.

It's very similar to [Silex Kitchen Edition][silexkitchen], but with less stuff. Oh, it's open source, and it's [on Github][githubproject].

Installation
------------

1) Download composer : 

	curl -s http://getcomposer.org/installer | php

2) Download the latest version of the source code and of its dependencies :

	php composer.phar create-project keirua/silex-bootstrap YourProject/
where YourProject/ is the directory of your future project.


Done ! You can now start hacking into YourProject/src/app.php. There already are 2 routes, / and /hello/plop

If you don't know Silex, I'm pretty sure the [documentation][silexdoc] can be useful.

Directory structure
-------------------

The directory structure is the following

	src/
	  views/
	app/
	  cache/
	  logs/
	web/
	vendor/

**src/** is the root of your code. Create some routes in app.php, and put the templates in the views directory. A layout file based on HTML5Boilerplate is already there, it can be of use.

**app/** contains all the settings of the application. Everything is in a file named bootstrap.php. If you want to add more service providers from Silex, do it there.

**web/** contains everything which is exposed. Make sure your web server only serves this directory to people. It also contains all the public assets : css, js and images.

**vendor/** contains all the dependencies of the project. The dependencies are listed in composer.json.


This tool was made with love by [KeiruaProd][keiruaprod].

[silex]: http://silex.sensiolabs.org/
[silexdoc]: http://silex.sensiolabs.org/documentation
[silexkitchen]: https://github.com/lyrixx/Silex-Kitchen-Edition
[githubproject]: https://github.com/Keirua/silex-bootstrap
[keiruaprod]: http://www.keiruaprod.fr