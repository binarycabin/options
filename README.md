# Options

Class-based select options for Laravel

## Installation

```$xslt
composer require binarycabin/options
```

## Generate Permissions

```$xslt
php artisan make:option CLASSNAME
```

ie:

```$xslt
php artisan make:option County
```

## Display the option

```$xslt
$field->options(\App\Options\County::get('---')) !!}
```

