## fatfree composer demo

This is a little F3 app that uses composer for loading dependencies.

To install the requirements, just run `composer install` and it'll download the fatfree-core and additional packages.

This setup uses the composer autoloader for loading all fixed dependencies, but the F3 autoloader for all application classes. 
This way you don't need to update your composer classmap all the time while developing your application, since the F3 classloader is smart enough to load your files dynamically. 

