<?php
//writen by Riwash

return [
    'access_type' => env('KHALTI_ACCESS_TYPE', 'Test'),
    'return_url' => env('RETURN_URL'),
    'secret_key' => env('KHALTI_MERCHANT_ID', 'key live_secret_key_68791341fdd94846a146f0457ff7b455'),
    'test_khalti_url' => 'https://a.khalti.com/api/v2/epayment/initiate/',
    'live_khalti_url' => 'https://khalti.com/api/v2/epayment/initiate/',
    'success_url' => env('KHALTI_SUCCESS_URL', 'http://localhost/khalti-success'),
];