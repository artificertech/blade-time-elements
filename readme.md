# BladeTimeElements

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI](https://github.styleci.io/repos/411778492/shield?branch=master)](https://github.styleci.io/repos/411778492?branch=master)

This package is a blade wrapper arrount the [github/time-elements](https://github.com/github/time-elements) package. This package provides blade components and a blade directive to easily utilize the time-elements in your laravel project. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
composer require artificertech/blade-time-elements
```

## Usage

Include the time elements javascript in your project. You may place do so by utilizing the following blade directive in your application's layout file:

```html
<body>

    ...

    <!-- Time Element Scripts -->
    @timeElementScripts
</body>

```

or you may see the [github/time-elements](https://github.com/github/time-elements) documentation to include the script via npm


After the script is included you may use any of the following blade components to render a time element. The `datetime` property accepts an ISO 8601 formatted timestamp string or a `\Carbon\Carbon` instance

```html
<x-relative-time datetime="{{ $item->created_at }}"></x-relative-time>
<x-local-time datetime="{{ $item->created_at }}"></x-local-time>
<x-time-until datetime="{{ $item->created_at }}"></x-time-until>
<x-time-ago datetime="{{ $item->created_at }}"></x-time-ago>
```

you may also pass any additional attributes to the components that will be added to the html elements. For a full list of what attributes are accepted for each element see the [github/time-elements](https://github.com/github/time-elements) documentation. 

each component also has a nullable default slot.

```html
<x-time-ago datetime="{{ $item->created_at }}" class="test-class" format="micro"> backup text </x-time-ago>
```

## Livewire

If you use time-elements inside of a livewire context you may run into issues where the time elements do not work after livewire re-renders the page. To solve this each time element includes the wire:replace functionality (made possible by the https://github.com/archtechx/wire-replace package)

Follow the instructions here to install that package via npm or the CDN

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email cole.shirley@artificertech.com instead of using the issue tracker.

## Credits

- [Cole Shirley][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/artificertech/blade-time-elements.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/artificertech/blade-time-elements.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/artificertech/blade-time-elements/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/artificertech/blade-time-elements
[link-downloads]: https://packagist.org/packages/artificertech/blade-time-elements
[link-travis]: https://travis-ci.org/artificertech/blade-time-elements
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/artificertech
[link-contributors]: ../../contributors
