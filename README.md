[![Coverage Status](https://coveralls.io/repos/github/gulch/assets/badge.svg?branch=master)](https://coveralls.io/github/gulch/assets?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gulch/assets/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gulch/assets/?branch=master)

# gulch/Assets
PHP Package for gathering some type of assets (js, css) and write once into document.

Special Thanks: [Funtime](https://funtime.kiev.ua) Team.

## Install

You will need [Composer](http://getcomposer.org) installed.
```bash
composer require gulch/assets
```

## How to use

```php
use gulch\Assets\Asset;
use gulch\Assets\Renderer\BodyCssRenderer;

$bodyCss = new Asset(new BodyCssRenderer);
$bodyCss->add('asset1.css')->add('asset2.css');
// ...
$bodyCss->add('asset3.css');

// ... and in your html template just write
$bodyCss->write();
```
Result
```html
<link href="asset1.css" rel="stylesheet" type="text/css" property="stylesheet">
<link href="asset2.css" rel="stylesheet" type="text/css" property="stylesheet">
<link href="asset3.css" rel="stylesheet" type="text/css" property="stylesheet">
```
