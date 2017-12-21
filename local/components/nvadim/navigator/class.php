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

    function preparePages($pages = false)
    {
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
                'IS_CURRENT' => ($page == $this->arParams['STEP']) ? true : false
            ];
            $this->arResult['pages'][$page] = $dataPage;

            if (!in_array($page, $this->arResult['PAGES_SAVED'])) {
                $this->isBreak = true;
                break;
            }

            if (!$pages && $iPage == 'depart') {
                $this->preparePages($this->arResult['route']['FROM']);
            }
        }

    }
}