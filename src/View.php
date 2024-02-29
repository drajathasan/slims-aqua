<?php
namespace Aqua;

use League\Plates\Engine;

final class View
{
    private static ?View $instance = null;
    private ?Loader $loader = null;

    public static function getInstance()
    {
        if (self::$instance === null) self::$instance = new View;
        return self::$instance;
    }

    public static function setBasePath(string $pathToTemplate)
    {
        self::getInstance()->templateStructure = [
            'base' => $pathToTemplate . DS,
            'layouts' => '',
            'components' =>  [
                'path' => $pathToTemplate . '/components/'
            ],
            'sections' =>  [
                'path' => $pathToTemplate . '/sections/'
            ]
        ];

        self::getInstance()->loader = new Loader;
        self::getInstance()->loader->base = $pathToTemplate . DS;
        self::getInstance()->loader->layouts = [
            'path' => $pathToTemplate . '/layouts/',
            'default' => 'main',
        ];

        self::getInstance()->loader->components = [
            'path' => $pathToTemplate . '/components/'
        ];

        self::getInstance()->loader->components = [];

        return self::getInstance();
    }

    public static function extendLayout(array $data = [], string $opsionalLayout = '') {
        // self::getInstance()
    }

    public static function render(string $viewName, array $data = [])
    {
        return null;
    }

    private function pathResolver(string $path)
    {
        return str_replace('.', DS, $path);
    }
}