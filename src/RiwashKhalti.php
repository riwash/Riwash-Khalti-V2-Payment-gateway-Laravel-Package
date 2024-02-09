<?php
namespace Riwash\Khalti;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class RiwashKhalti
{
    private $merchant_id;
    private $accessType;

    public function __construct()
    {
        $this->merchant_id = config('riwashkhalti.secret_key');
        $this->accessType = config('riwashkhalti.access_type');
    }

    public function khaltiCheckout($data)
    {
        if ($this->accessType == "Test") {
            $Khalti_url = config('riwashkhalti.test_khalti_url');
        } elseif ($this->accessType == "Live") {
            $Khalti_url = config('riwashkhalti.live_khalti_url');
        } else {
            throw new \Exception("Please write access type (Test or Live)");
        }

        if (!$this->merchant_id) {

            throw new \Exception("Please Enter Merchant Id");
        }

        $newData = [
            'return_url' => config('riwashkhalti.return_url'),
            'website_url' => config('riwashkhalti.success_url'),
        ];

        $sevData = array_merge($newData, $data);

        try {

            $response = Http::withHeaders([
                'Authorization' => config('riwashkhalti.secret_key'),
                'Content-Type' => 'application/json',
            ])->post($Khalti_url, $sevData);

            $data = $response->json();
            $paymentUrl = $data['payment_url'];

            response()->json(['payment_url' => $paymentUrl]);

            return redirect()->away($paymentUrl);

        } catch (\Exception $e) {

            return $e;
        }

    }
}
