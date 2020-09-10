<?php

namespace Local;

class FormHelper
{
    private static $secret_key = '6Le2DcoZAAAAAKr2qc8lbFDEY_D2S-hjdiCKu0Rf';
    private static function validate_empty($field)
    {
        if(!empty($field)) {
            return true;
        } else {
            return false;
        }
    }

    private static function validate_email($field)
    {
        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function validate_fields($fields, $fields_required = [])
    {
        $output = [];
        foreach($fields as $key => $field) {
            if(!in_array($key, $fields_required)) continue;
            if(!self::validate_empty($field)) $output[$key][] = "Поле обязательно для заполнения";
            if($key == "email") {
                if(!self::validate_email($field)) $output[$key][] = "Введите E-mail в правильном формате";
            }
        }
        return $output;
    }

    public static function sanitize_fields($fields)
    {
        $output = [];
        foreach($fields as $key => $field) {
            $field = strip_tags($field);
            $field = htmlspecialchars($field);
            $output[$key] = $field;
        }
        return $output;
    }

    public static function validateReCaptcha($token)
    {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . self::$secret_key . '&response=' . $token);
        $recaptcha = json_decode($recaptcha);

        if ($recaptcha->score >= 0.5) {
            return $recaptcha;
        } else {
            return false;
        }
    }
}