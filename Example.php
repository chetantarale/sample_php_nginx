<?php
class Example {
  public function test() {
  	$text = file_get_contents("http://localhost");
    return $text;
  }
}
?>
