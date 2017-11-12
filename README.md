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
    "gulch/assets": "^0.1"
}
```
and finally run
```bash
composer update
```
