Bacart transliteration
======================
[![Latest Stable Version](https://poser.pugx.org/bacart/transliteration/v/stable.png)](https://packagist.org/packages/bacart/transliteration)
[![Total Downloads](https://poser.pugx.org/bacart/transliteration/downloads.svg)](https://packagist.org/packages/bacart/transliteration)
[![License](https://poser.pugx.org/bacart/transliteration/license.svg)](https://packagist.org/packages/bacart/transliteration)

Allows to transliterate and trim UTF-8 strings. 

Requirements
------------
 - PHP >= 7.1
 
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
This util is released under the [MIT license](LICENSE).

About
-----
Bacart transliteration development is led by the [Bacart][2] team.

[1]: https://packagist.org/packages/bacart/transliteration
[2]: https://github.com/bacart
