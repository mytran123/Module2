<?php

class Application
{
    private $instance;
    //thuộc tính $instance giúp trỏ đến một đối tượng duy nhất
    //của Application, và cũng chỉ có một đối tượng dyy

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();