<?php
    function construit_url_paypal()
    {
        $api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?';
        $version = 56.0;
        
        $user = 'vseyller-facilitator_api1.free.fr';
        $pass = 'YDQNLGSQ7QA6LCU2';
        $signature = 'A.goQSt0j5GwaeC9B2UVbOPS0qcmAw2Lprh99fU5tgtd5PFWZI.F3T1l';

        $api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature;

        return 	$api_paypal;
    }
?>