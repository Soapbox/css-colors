css-colors
==========

Takes in a HEX color and produces variations of that colour for the foreground and background

It takes a great php class made by Patrick Fitzgerald in 2004 ( http://www.barelyfitz.com/projects/csscolor/ ) and wraps it in a library for use in your project.

## Installation

Install this package through Composer. Add the following to your composer.json file:
```php
"require": {
    "soapbox/css-color": "dev-master"
}
```
Next, run composer install

Finally, add the service provider and the facade to app/config/app.php.
```php
'providers' => array(
    // ...

    'SoapBox\Csscolor\CsscolorServiceProvider'
)


Not requred, but you can addd the Csscolor alias if you want.

'aliases' => array(
    // ...

    'Csscolor' => 'SoapBox\Csscolor\Facade'
)
```