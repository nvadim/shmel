<?php
namespace ShmelApi;

use sspat\ShmelAPI\APIClient;
use sspat\ShmelAPI\Requests\ListAndCostOfGoodsRequest;
use sspat\ShmelAPI\Requests\ListAndCostOfServicesRequest;
use sspat\ShmelAPI\Requests\ListAndTermsOfKitsRequest;
use sspat\ShmelAPI\Requests\TermsOfRatesForCarsRequest;
use sspat\ShmelAPI\Requests\TermsOfRatesForLoadersRequest;
use sspat\ShmelAPI\Requests\TermsOfRiggingRequest;
use sspat\ShmelAPI\Requests\CarsCategoriesRequest;


class ApiWrapper {

    private static $_instance = null;
    private function __construct() {    }

    static public function getInstance() {
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    public function getData($method) {
        if(!$method)
            return false;

        try {
            $api = new APIClient(
                APIClient::PRODUCTION_ENDPOINT,
                [
                    'login' => WS_LOGIN,
                    'password' => WS_PASSWORD
                ]
            );

            // goods, services, kits, cars, loaders, rigging, carscategories
            switch ($method) {
            case 'goods':
                $request = new ListAndCostOfGoodsRequest();
                break;
            case 'services':
                $request = new ListAndCostOfServicesRequest();
                break;
            case 'kits': // �������� � ������� ������� �� �������
                $request = new ListAndTermsOfKitsRequest();
                break;
            case 'cars': // ������� ������ �� ������������ ��������
                $request = new TermsOfRatesForCarsRequest();
                break;
            case 'loaders':
                $request = new TermsOfRatesForLoadersRequest();
                break;
            case 'rigging':
                $request = new TermsOfRiggingRequest();
                break;
            case 'carscategories':
                $request = new CarsCategoriesRequest();
                break;
            }

            $response = $api->sendRequest($request);
        } catch (ShmelAPIConfigException $e) {
            // ��������� ������ ������������
        } catch (ShmelAPISoapException $e) {
            // ��������� ������ ������ SOAP
        } catch (ShmelAPICacheException $e) {
            // ��������� ������ ������ �����������
        }

        $data = $response->getData();

        return $data;
    }
}
