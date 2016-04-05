<?php

class Pico_GitPull{

  function __construct($owner){
  }

  public function precheck(){
    return "";
  }

  public function run(){
    chdir(ROOT_DIR);
    exec('git pull 2>&1', $output, $ret);
    return array("success" => $ret == 0, "message" => implode("\n", $output));
  }
}

?>