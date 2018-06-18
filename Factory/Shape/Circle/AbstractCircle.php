<?php

require_once dirname(__DIR__) .'/InterfaceShape.php';

abstract class AbstractCircle implements InterfaceShape {
   abstract public function setRadius($radius);
}