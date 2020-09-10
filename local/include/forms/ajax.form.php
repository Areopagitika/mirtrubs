<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
Bitrix\Main\Loader::includeModule('main');

$fields = $_POST;

if(key_exists('token', $fields) && !empty($fields['token'])) {
    $token = $fields['token'];
    unset($fields['token']);
    
    if(!\Local\FormHelper::validateReCaptcha($token)) return false; 
}

$sanitizeData = \Local\FormHelper::sanitize_fields($fields);
$validateData = \Local\FormHelper::validate_fields($sanitizeData, ["name", "phone"]);

if(empty($validateData)) {
    $arrSend = [];

    foreach($sanitizeData as $key => $value) {
        $key = strtoupper($key);
        $arrSend[$key] = $value;
    }

    $send = Bitrix\Main\Mail\Event::send(array(
        "EVENT_NAME" => "SUBMIT_REQUEST",
        "LID" => "s1",
        "C_FIELDS" => $arrSend,
    )); 

    if($send) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false, "errors" => $validateData]);
}

