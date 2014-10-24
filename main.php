<?php
/**
 * @package HYKW NewsFeed plugin
 * @version 1.0.0
 */
/*
  Plugin Name: HYKW Global Variables Container plugin
  Plugin URI: https://github.com/hykw/hykw-wp-globals-container
  Description: カスタマイズ項目など$GLOBALSで持ちまわる値を一元管理するクラス
  Author: hitoshi-hayakawa
  Version: 1.0.0
*/

class hykwGVC
{
  private $container;

  function __construct()
  {
    $this->container = array();
  }
  
  public function set($key, $value)
  {
    $this->container[$key] = $value;
  }

  public function get($key, $defaultValue = '')
  {
    if (isset($this->container[$key]))
      return $this->container[$key];

    return $defaultValue;
  }

  ### for debug
  public function dump()
  {
    echo "<pre>\n";
    foreach ($this->container as $key => $value) {
      echo sprintf("***KEY:[%s]\n***VALUE:%s\n",
	  $key, esc_html($value));
	  
      echo "<hr>\n";
    }
    echo "</pre>\n";

    exit;
  }
}

####################
# There is no place to create a instance, because functions.php in a child theme 
# will be called(so, you have to new the instance in each child themes...)

define('HYKWGVC', 'gHYKWgvc');
$gHYKWgvc = new hykwGVC();

/*
  Usage:
    $GLOBALS[HYKWGVC]->set('key', 'value');
*/
