<?php

require_once 'Imodel.php';

abstract class Model implements Imodel
{
    abstract public function square();

    abstract public function perimeter();
}
