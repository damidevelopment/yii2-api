# Yii2 API template

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.2.0.

INSTALLATION
------------

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this site using the following command:

~~~
php composer.phar install
php yii migrate
~~~

In composer.json we have postInstall script which setup permissions on files and folders. But if php script itself
can't change his own files and folders, you have to change permissions yourself.

- `runtime/` - folder for caching and logging
- `web/assets/` - folder for caching js and css
- `yii` - executable for running terminal scripts (on windows machine yii.bat should be executable too, I guess)


### Endpoint dev checklist

- create model
- create resource model
- create controller or/and action
- define verbs
- add AccessControl rule?
- API documentation of request (by actions annotation)
- API documentation of response (inside definitions)
- API documentation of resource (by resource's annotation)