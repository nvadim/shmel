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

    function preparePages($pages = false)
    {
        /*$pageUrlTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";

        $items = $this->arPages;
        if($pages) {
            $pageParams = ['url' => 'intrm-#index#', 'text' => 'Промежуточный адрес #index#'];
            $items = $pages;
        }
//d($items);
//d($this->arResult['PAGES_SAVED']);

        foreach ($items as $iPage => $arData) {
            if (!$pages && $iPage == 'dest') {
//                die();
                $this->preparePages($this->arResult['FROM']);
            }

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
                'IS_CURRENT' => ($page == $this->arParams['STEP']) ? true : false
            ];
            $this->arResult['pages'][$page] = $dataPage;

            if (!in_array($page, $this->arResult['PAGES_SAVED'])) {
                break;
            }
        }*/

        $pageUrlTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";

        foreach ($this->arPages as $page => $arData) {
            if ($page == 'dest') {
                foreach ($this->arResult['FROM'] as $i => $item) {
                    if ($i == 0) {
                        continue;
                    }

                    $keyPage = 'intrm-' . $i;
                    $dataPage = [
                        'URL' => str_replace('#PAGE#', $keyPage, $pageUrlTemplate),
                        'TEXT' => "Промежуточный адрес {$i}",
                        'IS_CURRENT' => ($keyPage == $this->arParams['STEP']) ? true
                            : false
                    ];
                    $this->arResult['pages'][$keyPage] = $dataPage;

                    if (!in_array($keyPage, $this->arResult['PAGES_SAVED'])) {
                        break 2;
                    }
                }
            }

            $dataPage = [
                'URL' => str_replace('#PAGE#', $page, $pageUrlTemplate),
                'TEXT' => $arData,
                'IS_CURRENT' => ($page == $this->arParams['STEP']) ? true : false
            ];
            $this->arResult['pages'][$page] = $dataPage;


            if (!in_array($page, $this->arResult['PAGES_SAVED'])) {
                break;
            }
        }
    }
}