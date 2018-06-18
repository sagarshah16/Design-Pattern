<?php
require_once dirname(__DIR__) .'/InterfaceShape.php';

abstract class AbstractRectangle implements InterfaceShape  {
    abstract public function setSide($side);
}