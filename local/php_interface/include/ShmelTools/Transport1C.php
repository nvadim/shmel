<?php

namespace ShmelTools;


class Transport1C
{
    private static $fileData = '/webservices_data/transport.json';

    public static function import()
    {
        $cars = \ShmelAPI\ApiWrapper::getInstance()->getData('cars');

        $fp = fopen($_SERVER['DOCUMENT_ROOT'] . self::$fileData, 'w');
        fwrite($fp, json_encode($cars, JSON_UNESCAPED_UNICODE));
        fclose($fp);

        return "\\ShmelTools\\Transport1C::import();";
    }

    public static function getTransport()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . self::$fileData;

        $f = fopen($file, 'r');
        $data = fread($f, filesize($file));
        fclose($f);

        return json_decode($data, 1);
    }


    public static function getPricesByTime()
    {
        /*$cars = self::getTransport();

        for($i = 0; $i<count($cars); $i++) {
            if(!$cars[$i])
                continue;

            $car = $cars[$i];
            $carId = $car['StructCathegory']['ID'];
            if ($car['StructRate']['Rate'] != 'Переезд Без НДС')
                continue;

        if (array_intersect($this->arDayTime, $arCarCondintion)) {

        }

        $_SESSION['transport_categories'][$carId][]*/

    }
}