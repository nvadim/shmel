<?php
namespace ShmelTools;

/**
 * Основные настройки сайта
 * чтобы не юзать битриксовый и не лезть в БД
 */
class Options
{
    private static $instance;
    private $props = array();

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Options();
        }
        return self::$instance;
    }

    public function setProperty($key, $val)
    {
        $propArray = &$this->props;

        if (!in_array($key, $this->props)) {
            $propArray[$key] = $val;
        }
    }

    public function getProperty($key, $default = false)
    {
        if (isset($this->props[$key])) {
            return $this->props[$key];
        }

        return $default;
    }
}