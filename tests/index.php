<?php

require_once '../vendor/autoload.php';

use Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output\BooleanAttribute;

$attr = new BooleanAttribute(['truelabel' => null, 'name' => 'ddd', 'id' => '1', 'label' => 'ccc', 'type' => 'x', 'entityId' => 12, 'required' => false, 'allowedToEdit' => false]);