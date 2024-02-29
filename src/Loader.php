<?php
namespace Aqua;

class Loader
{
    private string $pathToLoad = '';
    private array $info = [];

    public function file(string $filename, array $dataToExtract = [])
    {
        $fileInfo = pathinfo(Loader::pathConverter($filename));

        extract($dataToExtract);
        if (file_exists($filePath = $this->pathToLoad . ($fileInfo['filename']??'uknowm'))) {
            include $filePath;
        } else {
            throw new \Exception("File $filePath not found!");
        }
    }

    public static function pathConverter(string $input)
    {
        return str_replace('.', DS, trim($input, '.'));
    }

    public function __set($key, $value) {
        $this->info[$key] = $value;
    }
}