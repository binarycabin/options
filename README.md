# Options

Class-based select options for Laravel.

This package makes it easy to store a static list of array items. This is useful in form select-list building.

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

