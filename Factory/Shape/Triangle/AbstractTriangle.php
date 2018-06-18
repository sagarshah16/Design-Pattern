<?php
require_once dirname(__DIR__) .'/InterfaceShape.php';

  abstract class AbstractTriangle implements InterfaceShape {
       abstract public function setSide($side);
  }
?>