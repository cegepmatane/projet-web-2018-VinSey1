<?php
    function construit_url_paypal()
    {
        $api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?';
        $version = 95.0;
        
        $user = 'vseyller-facilitator_api1.laposte.net';
        $pass = 'TJ2UDR4ZM7PZLF3R';
        $signature = 'AYvApQjPaEK2tFXuE1zKCJB4vLEIA.uqa8luYuOJZERQR3zTWmEpJpWz';

        $api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature;

        return 	$api_paypal;
    }
?>