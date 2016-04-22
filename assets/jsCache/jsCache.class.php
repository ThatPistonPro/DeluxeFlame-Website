<?php

/**
jsCache - A class used to cache a webpage or data (string/array)
Created by Jack (https://jack.wtf/)
Copyright (c) 2015 - https://jack.wtf/
*/

class jsCache {

  function __construct($a, $b, $c, $d = true) {
    if (!file_exists('assets/jsCache/caches'))
    mkdir('assets/jsCache/caches', 0777, true);
    $this->file = "assets/jsCache/caches/" . $a . ".cache";
    $this->url = $b;
    $this->time = $c;
    $this->isWebsite = $d;
  }

  function readData($isWebsite = true) {
    if(!$isWebsite)
    $url = $a;
    else
    $url = $this->url;
    $file = $this->file;
    $time = $this->time;
    if(!file_exists($file) || $this->isExpired()) {
      if($this->isWebsite) {
        try {
          file_put_contents($file, json_encode(file_get_contents($url)));
        } catch(Exception $ex) {}
        }
        else
        file_put_contents($file, json_encode($url));
      }
      return json_decode(file_get_contents($file));
    }

    function isExpired() {
      return (time() - $this->time > filemtime($this->file));
    }

  }

?>
