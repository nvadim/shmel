<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponent $this */

class CShmelNavigatorComponent extends CBitrixComponent
{
    public $arPages = [
        'route' => 'Маршрут',
        'depart' => 'Пункт отправления',
        'dest' => 'Пункт назначения',
        'transport' => 'Транспорт',
        'loaders' => 'Грузчики',
        'packaging' => 'Упаковка',
        'rigging' => 'Такелажные работы',
    ];

    public $isBreak = false;
    public $sess_data = false;

    public function __construct(CBitrixComponent $component = null)
    {
        parent::__construct($component);

        $this->arResult['PRICE_RECOM'] = $this->arResult['PRICE_RESULT'] = 0;
    }

    function preparePages($pages = false)
    {
        $sess_data = $_SESSION[$this->arParams['SESSION_FORM_CODE']];
        $pageUrlTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";

        $items = $this->arPages;
        if($pages) {
            $pageParams = ['url' => 'intrm-#index#', 'text' => 'Промежуточный адрес #index#'];
            $items = $pages;
        }

        foreach ($items as $iPage => $arData) {
            if($this->isBreak)
                break;

            if(!$pages)
            {
                $page = $iPage;
                $text = $arData;
            }
            else {
                if($iPage == 0)
                    continue;

                $page = str_replace('#index#', $iPage, $pageParams['url']);
                $text = str_replace('#index#', $iPage, $pageParams['text']);;
            }

            $dataPage = [
                'URL' => str_replace('#PAGE#', $page, $pageUrlTemplate),
                'TEXT' => $text,
                'PRICE' => 0,
                'IS_CURRENT' => (strpos($this->arParams['STEP'], $page)!==false) ? true : false
            ];
            $this->arResult['pages'][$page] = $dataPage;

            if (!in_array($page, $sess_data['PAGES_SAVED'])) {
                $this->isBreak = true;
                break;
            }

            if (!$pages && $iPage == 'depart') {
                $this->preparePages($sess_data['route']['FROM']);
            }
        }

        if(!$pages)
            $this->setPrice();
    }

    public function setPrice()
    {
        $sess_data = $_SESSION[$this->arParams['SESSION_FORM_CODE']];
        $services = ShmelAPI\ApiWrapper::getInstance()->getData('services');

        foreach($this->arResult['pages'] as $kPage => &$pageData) {
            if($kPage=='route')
                continue;

            switch ($kPage) {
                case 'loaders':
                    $pageData['PRICE'] = $sess_data['loaders']['RESULT_PRICE'];
                    break;
                case 'transport':
                    $pageData['PRICE'] = $sess_data['transport']['PRICE'];
                    break;
                case 'rigging':

                    break;
                case 'packaging':

                    break;
                default:
                    //расчёт услуг
                    if(!$sess_data[$kPage]['SERVICES']) {
                        continue;
                    }

                    for ($i = 0; $i < count($services); $i++) {
                        $sid = $services[$i]->ID;
                        if (in_array($sid, $sess_data[$kPage]['SERVICES'])) {
                            $pageData['PRICE'] += $services[$i]->Price;
                        }
                    }

                    break;
            }

            $this->arResult['PRICE_RECOM'] += $pageData['PRICE'];
            $this->arResult['PRICE_RESULT'] += $pageData['PRICE'];
        }

    }
}