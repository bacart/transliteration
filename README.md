Bacart transliteration
======================
[![PHP from Packagist](https://img.shields.io/packagist/php-v/symfony/symfony.svg)](https://packagist.org/packages/bacart/transliteration)
[![Latest Stable Version](https://poser.pugx.org/bacart/transliteration/v/stable.png)](https://packagist.org/packages/bacart/transliteration)
[![Total Downloads](https://poser.pugx.org/bacart/transliteration/downloads.svg)](https://packagist.org/packages/bacart/transliteration)
[![License](https://poser.pugx.org/bacart/transliteration/license.svg)](LICENSE)

Allows to transliterate and trim UTF-8 strings. 

Installation
------------
##### Using command line:
Run the following command and you will get the latest version by [Packagist][1].

```bash
composer require bacart/transliteration
```

##### Using composer.json
To use the newest (maybe unstable) version add following into your composer.json:

```json
{
    "require": {
        "bacart/transliteration": "dev-master"
    }
}
```
Usage example
-------------
```php
use Bacart\Transliteration\Transliteration;

...

echo Transliteration::transliterate('Привет, Мир!');
echo Transliteration::transliterate('さようなら');
```

##### Output:
```
privet-mir
sayounara
```

Long text example
-----------------
```php
echo Transliteration::transliterate('Some very long slug text', 20);
```
##### Output:
`some-very-long-slug`

License
-------
This project is released under the [MIT license](LICENSE).

About
-----
Project development is led by the [Bacart][2] team.

[1]: https://packagist.org/packages/bacart/transliteration
[2]: https://github.com/bacart
