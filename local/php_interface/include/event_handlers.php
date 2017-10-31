<?
//AddEventHandler("iblock", "OnBeforeIBlockElementAdd", array("CIBlocksHandlers", "OnBeforeIBlockElementAddUpdateHandler"));
AddEventHandler("iblock", "OnAfterIBlockElementAdd", array("CIBlocksHandlers", "OnAfterIBlockElementAddUpdateHandler"));

//AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", array("CIBlocksHandlers", "OnBeforeIBlockElementAddUpdateHandler"));
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", array("CIBlocksHandlers", "OnAfterIBlockElementAddUpdateHandler"));

//AddEventHandler("iblock", "OnBeforeIBlockElementDelete", array("CIBlocksHandlers", "OnBeforeIBlockElementDeleteHandler"));

class CIBlocksHandlers
{
    private static $element_id = null;
    private static $iblock_id = null;
    
    function OnAfterIBlockElementAddUpdateHandler(&$arFields)
    {
        /* @var CUser $USER */
        global $USER;
        
//        if ($arFields["IBLOCK_ID"] == IBLOCK_ID_REVIEWS) // для отзывов по заказам
        if (false)
        {
            self::$element_id = $arFields["ID"];
            self::$iblock_id = IBLOCK_ID_REVIEWS;
    
            self::setProperty('AVERAGE', ceil(
                (
                    self::getProperty('SPEED') +
                    self::getProperty('QUALITY') +
                    self::getProperty('EXPECTATIONS')
                ) / 3
            ));
            self::setProperty('USER_ID', $USER->GetID());
            self::nullFields();
        }
    }
    
	function OnBeforeIBlockElementAddUpdateHandler(&$arFields)
	{
	}

	function OnBeforeIBlockElementDeleteHandler($ID)
	{
	}
	
	private function setProperty($property_name, $value)
    {
        CIBlockElement::SetPropertyValuesEx(self::$element_id, self::$iblock_id, [$property_name => $value]);
    }
	
    private function getProperty($property_name, $default_value = 0)
    {
        if($prop = self::getPropertyValue($property_name))
        {
            return $prop;
        }
        else
        {
            self::setProperty($property_name, $default_value);
            return $default_value;
        }
    }
	
    private function getPropertyValue($property_name)
    {
        $db_props = CIBlockElement::GetProperty(self::$iblock_id, self::$element_id, array("sort" => "asc"), Array("CODE"=>$property_name));
        if($ar_props = $db_props->Fetch())
            return $ar_props["VALUE"];
        else
            return false;
    }
    
    private function nullFields()
    {
        self::$element_id = null;
        self::$iblock_id = null;
    }
}

AddEventHandler("main", "OnBeforeUserRegister", Array("CMainHandlers", "OnBeforeUserUpdateHandler"));
AddEventHandler("main", "OnBeforeUserUpdate", Array("CMainHandlers", "OnBeforeUserUpdateHandler"));
AddEventHandler("main", "OnBeforeProlog", Array("CMainHandlers", "OnBeforePrologHandler"));
class CMainHandlers
{
    function OnBeforePrologHandler()
    {
        /* @var CUser $USER */
        /* @var CMain $APPLICATION */
        global $USER, $APPLICATION;
        if (strpos($APPLICATION->GetCurPage(), '/personal') !== false && !$USER->IsAuthorized())
            LocalRedirect('/', false, '401 Unauthorized');
    }

	function OnBeforeUserUpdateHandler(&$arFields)
	{
        $arFields["LOGIN"] = $arFields["EMAIL"];
        $return = $arFields;
        
        /* @var CUser $USER */
        /* @var CMain $APPLICATION */
	    global $APPLICATION, $USER;
	    if (strpos($APPLICATION->GetCurPage(), '/personal/profile/') !== false)
        {
            if (strlen($arFields['LAST_NAME']) < 1)
            {
                $APPLICATION->ThrowException('Не введена фамилия');
                $return = false;
            }
            if (strlen($arFields['NAME']) < 1)
            {
                $APPLICATION->ThrowException('Не введено имя');
                $return = false;
            }
            
            if (isset($arFields['PASSWORD']) && isset($arFields['CONFIRM_PASSWORD']))
            {
                if (!isset($_POST['OLD_PASSWORD']))
                {
                    $APPLICATION->ThrowException('Не введен старый пароль');
                    $return = false;
                }
                else
                {
                    $rsUser = CUser::GetByLogin($USER->GetLogin());
                    if ($arUser = $rsUser->Fetch())
                    {
                        if(strlen($arUser["PASSWORD"]) > 32)
                        {
                            $salt = substr($arUser["PASSWORD"], 0, strlen($arUser["PASSWORD"]) - 32);
                            $db_password = substr($arUser["PASSWORD"], -32);
                        }
                        else
                        {
                            $salt = "";
                            $db_password = $arUser["PASSWORD"];
                        }
        
                        $user_password =  md5($salt.$_POST['OLD_PASSWORD']);
        
                        if ( $user_password != $db_password )
                        {
                            $APPLICATION->ThrowException('Старый пароль введен неверно');
                            $return = false;
                        }
                    }
                }
            }
        }
        
        return $return;
	}
}
?>