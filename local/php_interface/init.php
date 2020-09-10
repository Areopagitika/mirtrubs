<?php

function logger( $data ){
    echo '<script>';
    echo 'console.log("'. gettype($data) .'", '.json_encode( $data ) .')';
    echo '</script>';
}

Bitrix\Main\Loader::registerAutoLoadClasses(null, array(
    '\Local\City' => '/local/include/classes/City.php',
    '\Local\FormHelper' => '/local/include/classes/FormHelper.php',
));

function getIblockID($type, $code) {
    \Bitrix\Main\Loader::includeModule('iblock');

    $res = \CIBlock::GetList(
        Array(), 
        Array(
            'TYPE' => $type, 
            'ACTIVE' => 'Y', 
            "CNT_ACTIVE" => "Y", 
            "CODE" => $code
        ), true
    );
    $ar_res = $res->Fetch();
    $output = $ar_res["ID"];
    return $output;
}