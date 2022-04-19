<?php
return [
    "secret_id" => env("SMS_SECRET_ID", ""),
    'secret_key' => env("SMS_SECRET_KEY", ""),
    "app_id"    => env("SMS_APP_ID", ""),
    "sign_name"   => env("SMS_SIGN_NAME", ""),
    "temp_goods_id"    => env("SMS_TEMP_GOODS_ID", ""),
    "temp_id"    => env("SMS_TEMP_ID", "")
];
