# Options

[![Build Status](https://travis-ci.org/binarycabin/options.svg?branch=master)](https://travis-ci.org/binarycabin/options)

[![StyleCI](https://github.styleci.io/repos/174015614/shield?branch=master)](https://github.styleci.io/repos/174015614)

Class-based select options for Laravel.

This package makes it easy to store a static list of array items. This is useful in form select-list building.

## Installation

```$xslt
composer require binarycabin/options
```

## Usage

### Generate Permissions

```$xslt
php artisan make:option CLASSNAME
```

ie:

```$xslt
php artisan make:option County
```

This will create a new file located at: /app/Options/Country.php

### Edit your array

In your generated option file, edit the array in the getArray method to include the available option items:

```
public function getArray(){
  return [
    'US' => 'United States of America',
    'CA' => 'Canada',
  ];
}
```

### Display the option

```
foreach(\App\Options\County::get('---') as $optionKey => $optionValue)
{
  echo '<option value="{{ $optionKey }}">{{ $optionValue }}</option>'
}
```

or using something like anahkiasen/former:

```
{!! Former::select()->options(\App\Options\County::get('---')) !!}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
