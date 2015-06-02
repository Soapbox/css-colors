css-colors
==========

[![Build Status](https://travis-ci.org/SoapBox/css-colors.svg?branch=master)](https://travis-ci.org/SoapBox/css-colors)

Takes in a HEX color and produces variations of that colour for the foreground and background

It takes a great php class made by Patrick Fitzgerald in 2004 ( http://www.barelyfitz.com/projects/csscolor/ ) and wraps it in a library for use in your project.

## Installation

Install this package through Composer. Add the following to your composer.json file:
```php
"require": {
    "soapbox/css-colors": "dev-master"
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


## How to Use:

All you need to do is put the HEX values into a colour object
```php
$color = Csscolor::make('3D88C8');

$color->bg['0']; // returns the same colour as entered
$color->bg['+1']; // +1 to +5 and -1 to -5 to return variations of the colour to work with gradiants
$color->fg['0']; // returns a colour that can sit on the foreground of the defined hex value
...

```

A var_dump of the $color objects instanciated with the color #3D88C8 look like the following:
```php
object(SoapBox\Csscolor\Csscolor)[1109]
  public 'bg' => 
    array (size=11)
      0 => string '3D88C8' (length=6)
      '+1' => string '5a9ad0' (length=6)
      '+2' => string '6ea6d6' (length=6)
      '+3' => string '9fc4e4' (length=6)
      '+4' => string 'cee1f1' (length=6)
      '+5' => string 'ecf4fa' (length=6)
      -1 => string '3474aa' (length=6)
      -2 => string '2e6696' (length=6)
      -3 => string '1f4464' (length=6)
      -4 => string '0f2232' (length=6)
      -5 => string '060e14' (length=6)
  public 'fg' => 
    array (size=11)
      0 => string 'ffffff' (length=6)
      '+1' => string '000000' (length=6)
      '+2' => string '000000' (length=6)
      '+3' => string '000000' (length=6)
      '+4' => string '0f2232' (length=6)
      '+5' => string '1f4464' (length=6)
      -1 => string 'ffffff' (length=6)
      -2 => string 'ffffff' (length=6)
      -3 => string 'ffffff' (length=6)
      -4 => string 'cee1f1' (length=6)
      -5 => string '9fc4e4' (length=6)
  public 'minBrightDiff' => int 126
  public 'minColorDiff' => int 500
```
