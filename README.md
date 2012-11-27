YSpeedTestMini
==============

This is a Yii Framework widget used to embed a SpeedTest.net on your local website.

### Installation
Download the zip file or clone from GitHub (see below) and place the content in protected/extensions/.
You first need to fetch the mini.zip package from speedtest. There's a script which can do this for you. Just run
```bash
protected/extensions/update-speedtest.sh
```
This will require cURL and unzip.

### Usage
In your view, just add
```php
<?php 
    $this->widget ("ext.YSpeedTestMini.YSpeedTestMini"); 
?>  
```

### License
GNU GPL v2

### Links
 * [GitHub](https://github.com/YetOpen/yspeedtestmini)
 * [Yii Framework](http://www.yiiframework.com/extension/yspeedtestmini/)
 * [SpeedTest Mini](http://www.speedtest.net/mini.php)
 * [YetOpen](http://www.yetopen.it)
