# This is Riwash Khalti V2 Payment Integration Package For Laravel

## This package allow you to use Khalti v2 for payment gateway

**Note:Deffine this thing in env file**

-   KHALTI_ACCESS_TYPE = Live ** select one Live or Test **
-   KHALTI_MERCHANT_ID = your secret key
-   KHALTI_SUCCESS_URL = after payment success call back url
-   KHALTI_FAIL_URL = if payment is failed call back url
-   RETURN_URL = if payment cancle

**After That**

### Make Controller

use Riwash\Khalti\RiwashKhalti;

```

 public function khalti()
    {
        $payment = new RiwashKhalti;
        $data = [
            'amount' => '1000',
            'purchase_order_id' => 'Order01',
            'purchase_order_name' => 'test',
            'customer_info' => [
                'name' => 'Riwash',
                'email' => 'riwash@khalti.com',
                'phone' => '9800000001',
            ]
        ];
        return $payment->khaltiCheckout($data);


    }

    public function success(Request $request)
    {
        //write your after payment success  code here
        dd($request->all());
    }

    public function fail(Request $request)
    {
        // write if payment failed response here
        dd($request->all());

    }

```

This much
**If you get any issue or bug then create issue from here [https://github.com/riwash/Riwash-Khalti-V2-Payment-gateway-Laravel-Package/issues](https://github.com/riwash/Riwash-Khalti-V2-Payment-gateway-Laravel-Package/issues)**
