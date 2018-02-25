<?php
/**
 * Created by PhpStorm.
 * User: nvadim
 * Date: 24.02.18
 * Time: 21:33
 */

namespace ShmelTools;


class Tools
{
    /**
     * Cписок адресов
     *
     * @param $data
     * @param $sourceRoute
     */
    public static function getRouteList(&$data, $sourceRoute)
    {
        for ($i = 0; $i < count($sourceRoute['FROM']); $i++) {
            $data['select_route']["reference"][] = $sourceRoute['FROM'][$i];
            $data['select_route']["reference_id"][] = "from_{$i}";
        }
        $data['select_route']["reference"][] =$sourceRoute['TO'];
        $data['select_route']["reference_id"][] = 'to';
    }

}