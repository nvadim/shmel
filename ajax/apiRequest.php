<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use sspat\ShmelAPI\APIClient;
use sspat\ShmelAPI\Requests\ListAndCostOfGoodsRequest;
use sspat\ShmelAPI\Requests\ListAndCostOfServicesRequest;
use sspat\ShmelAPI\Requests\ListAndTermsOfKitsRequest;
use sspat\ShmelAPI\Requests\TermsOfRatesForCarsRequest;
use sspat\ShmelAPI\Requests\TermsOfRatesForLoadersRequest;
use sspat\ShmelAPI\Requests\TermsOfRiggingRequest;

if(empty($_REQUEST['type'])) {
    die();
}


try {
    $api = new APIClient(
        APIClient::TEST_ENDPOINT,
        [
            'login' => WS_LOGIN,
            'password' => WS_PASSWORD
        ]
    );

    // goods, services, kits, cars, loaders, rigging
    switch ($_REQUEST['type']) {
    case 'goods':
        $request = new ListAndCostOfGoodsRequest();
        break;
    case 'services':
        $request = new ListAndCostOfServicesRequest();
        break;
    case 'kits': // перечень и условия пакетов на переезд
        $request = new ListAndTermsOfKitsRequest();
        break;
    case 'cars': // условия тарифа на транспортные средства
        $request = new TermsOfRatesForCarsRequest();
        break;
    case 'loaders':
        $request = new TermsOfRatesForLoadersRequest();
        break;
    case 'rigging':
        $request = new TermsOfRiggingRequest();
        break;
    }

    $response = $api->sendRequest($request);
} catch (ShmelAPIConfigException $e) {
    // Обработка ошибки конфигурации
} catch (ShmelAPISoapException $e) {
    // Обработка ошибки уровня SOAP
} catch (ShmelAPICacheException $e) {
    // Обработка ошибки уровня кеширования
}

$data = $response->getData();

if($_REQUEST['debug']) {
    d($data);
    die();
}
echo json_encode($data, JSON_UNESCAPED_UNICODE);
