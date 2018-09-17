# Bacart transliteration
Allows to transliterate and trim UTF-8 strings. 

Installation
------------

`composer require bacart/transliteration`

Usage example
-------------
```php
use Bacart\Transliteration\Transliteration;

...

$phrases = [
    'Привет, Мир!',
    'さようなら',
];

foreach ($phrases as $phrase) {
    echo Transliteration::transliterate($phrase);
}
```

**Will output:**
```
privet-mir
sayounara
```

Long text example
-----------------
```php
echo TransliterationUtils::transliterate('Some very long slug text', 20);
```
**Will output:**
`some-very-long-slug`
