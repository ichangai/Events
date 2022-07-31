<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{

    public function payment(Request $request){
        $data = $request->all();
        $data['name'] = $request->input('name');
        $data['phone'] = $request->input('phone');
        $data['email'] = $request->input('email');

        $pay_phone = substr_replace($data['phone'], "254", 0, 1);
        
        
        $fields = array(
            "live"=> "1",
            "oid"=> "112",
            "inv"=> "112020102292999",
            "ttl"=> "900",
            "tel"=> $pay_phone,
            "eml"=> $data['email'],
            "vid"=> "tasl",
            "curr"=> "KES",
            "p1"=> "airtel",
            "p2"=> "020102292999",
            "p3"=> "",
            "p4"=> "900",
            "cbk"=> $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"],
            "cst"=> "1",
            "crl"=> "2"
        );

        $datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['p1'].$fields['p2'].$fields['p3'].$fields['p4'].$fields['cbk'].$fields['cst'].$fields['crl'];
        // return $datastring;
        $hashkey ='W3g8EaV8cxc$hfv%z7Vqu$Cz%2*jFJTQ';

        $generated_hash = hash_hmac('sha1', $datastring, $hashkey);

        // return $generated_hash;

        $response = Http::post('https://payments.ipayafrica.com/v3/ke', [
            "hsh" => $generated_hash,
        ]);

        return $response;

    }
}
