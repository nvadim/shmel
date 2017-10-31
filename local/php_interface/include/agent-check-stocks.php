<?
function AgentCheckStocks()
{
	if(CModule::IncludeModule("iblock")) {
		$arSelect = array("ID");
		$arFilter = array("IBLOCK_ID" => PROMOTIONS_IBLOCK_ID, "<DATE_ACTIVE_TO" => ConvertTimeStamp(false, "FULL"));
		$rsStocks = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
		$cntStocks = intval($rsStocks->SelectedRowsCount());
		if ($cntStocks > 0) {
			
			$str = $cntStocks." ".declOfNum($cntStocks, array('акция', 'акции', 'акций'));

			CEventLog::Add(array(
				"SEVERITY" => "SECURITY",
				"AUDIT_TYPE_ID" => "COMPLETED_STOCKS",
				"MODULE_ID" => "iblock",
				"ITEM_ID" => "",
				"DESCRIPTION" => "На сайте есть ".$str." с истекшей датой активности.",
			));

			$arEventFields = array(
				"STOCKS_CNT" => $str,
			);
			CEvent::Send("COMPLETED_STOCKS", "s1", $arEventFields, "N");
		}
	}
	return "AgentCheckStocks();";
}
	
function declOfNum($number, $titles) {
	$cases = array (2, 0, 1, 1, 1, 2);
	return $titles[ ($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)] ];
}
?>