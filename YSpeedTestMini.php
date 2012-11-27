<?php

/**
 * Yii Framework widget to display a speedtest on your view
 * 
 * @link https://github.com/YetOpen/yspeedtestmini
 * @author Lorenzo "maxxer" Milesi <maxxer@yetopen.it>
 * @version 0.1
 */
class YSpeedTestMini extends CWidget
{
    private $_assetsUrl;

    public function run()
    {
        // FIXME check assets/ has been populated

        Yii::app()->clientScript->registerScriptFile($this->getAssetsUrl()."/speedtest/swfobject.js?v=2.2");

        $html_noflash = '
	  <div id="mini-demo">
		  Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
	  </div><!--/mini-demo-->';

        $script = '
	  var flashvars = {
			upload_extension: "php"
		};
		var params = {
			wmode: "transparent",
			quality: "high",
			menu: "false",
			allowScriptAccess: "always"
		};
		var attributes = {};
		swfobject.embedSWF("'.$this->getAssetsUrl().'/speedtest.swf?v=2.1.8", "mini-demo", "350", "200", "9.0.0", "'.$this->getAssetsUrl().'/speedtest/expressInstall.swf", flashvars, params, attributes);';
        echo $html_noflash;
        Yii::app()->clientScript->registerScript($this->getId(), $script);
    }

    private function getAssetsUrl ()
    {
        if ($this->_assetsUrl == NULL) {
            $this->_assetsUrl = 
                Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.YSpeedTestMini.assets')); 
        }
        return $this->_assetsUrl;
    }
}
?>
