<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: ÏÂÎç12:14
 */


class Autoloader
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'register'));
    }

    private function register($className)
    {
//        var_dump($className);
        if (stristr($className, '\\') === FALSE) {
            $classNamePath = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        } else {
            $parts = explode('\\', $className);
            $classNamePath = implode(DIRECTORY_SEPARATOR, $parts) . '.php';
//            var_dump($classNamePath);
        }
        $includePath = explode(':', get_include_path());
//        var_dump($includePath);
        foreach ($includePath as $path) {
            $classPath = $path . DIRECTORY_SEPARATOR . $classNamePath;
//            var_dump($classPath);
            if (file_exists($classPath)) {
                require_once($classPath);
                return;
            }
        }
    }

    public function tree($directory)
    {
        $mydir = dir($directory);
        while ($file = $mydir->read()) {
            if ((is_dir($directory . DIRECTORY_SEPARATOR . $file)) AND ($file != ".") AND ($file != "..")) {
                $this->tree("$directory/$file");
            } elseif ($file != "." AND $file != "..") {
                echo $directory . DIRECTORY_SEPARATOR . $file;
            }
        }
        $mydir->close();
    }

    public static function loader()
    {
        new Autoloader();
    }
}

Autoloader::loader();


//spl_autoload_register(
//    function($class) {
//        static $classes = null;
////        $dir = dirname(__DIR__);
//        if ($classes === null) {
//            $classes = array(
//                'simple\DatabaseConfigure' => '/demo/lib/Di/simple/DatabaseConfigure.php',
//                'simple\DatabbaseConnection' =>'/demo/lib/Di/simple/DatabaseConnection.php',
////                'sebastianbergmann\\money\\aed' => '/currency/AED.php',
////                'sebastianbergmann\\money\\exception' => '/interfaces/Exception.php',
////                'sebastianbergmann\\money\\intlformatter' => '/IntlFormatter.php',
////                'sebastianbergmann\\money\\invalidargumentexception' => '/exceptions/InvalidArgumentException.php'
//
//            );
//        }
//        $cn = strtolower($class);
//        var_dump($classes);
//
//        if (isset($classes[$cn])) {
////            var_dump(__DIR__ . $classes[$cn]);
////            require   $classes[$cn];
////            var_dump($classes[$cn]);
//            require   $classes[$cn];
//        }
//    },
//    true,
//    false
//);