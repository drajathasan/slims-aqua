<?php
namespace Aqua;

use League\Plates\Engine;

final class View extends Engine
{
    private string $templateDir = '';
    
    public function __construct(string $templateDir = '')
    {

    }
}