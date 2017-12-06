# Assets
PHP Package for gathering some type of assets (js, css) and write once into document.

## Install

You will need [Composer](http://getcomposer.org) installed.

Add to your **composer.json** file this git repo
```bash
"repositories":[
    {
	    "type": "git",
        "url": "http://github.com/gulch/assets"
    }
]
```
and add to **require** section
```bash
"require": {
    "gulch/assets": "^0.2"
}
```
and finally run
```bash
composer update
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