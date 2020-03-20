<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult['ITEMS'] as $key => &$arItem){
    if($arItem['IBLOCK_SECTION_ID'])
        $arItem['SECTION'] = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID'])->GetNext();
}

