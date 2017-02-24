<?php
class View {
 public function __construct() {
  //echo 'Это вид';
  //$this->view->render('enter');
}

public function render($name) {
  require $_SERVER['HTTP_HOST']. '/application/views/'.$name.'.php';
}
}
?>
