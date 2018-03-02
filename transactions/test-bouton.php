<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="https://js.braintreegateway.com/web/3.25.0/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.25.0/js/paypal-checkout.min.js"></script>
</head>

<body>
    <div id="paypal-button"></div>
        <?php 
            $gateway = new Braintree_Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'vseyller-facilitator_api1.free.fr',
                'publicKey' => 'use_your_public_key',
                'privateKey' => 'use_your_private_key'
            ]);
            $token = gateway.client_token.generate 
        ?>

        <script>
            paypal.Button.render({
                braintree: braintree,
                client: {
                    production: $token,
                    sandbox: $token,
                },
                env: 'production',
                commit: true,

                style: {
                    color: 'gold',
                    size: 'small'
                },

                payment: function(data, actions) {
                    return actions.braintree.create({
                    flow: 'checkout',
                    amount: 10.00,
                    currency: 'USD',
                    enableShippingAddress: true,
                    shippingAddressEditable: false,
                    shippingAddressOverride: {
                        recipientName: 'Scruff McGruff',
                        line1: '1234 Main St.',
                        line2: 'Unit 1',
                        city: 'Chicago',
                        countryCode: 'US',
                        postalCode: '60652',
                        state: 'IL',
                        phone: '123.456.7890'
                    }
    });
                },

                onAuthorize: function(data, actions) {
                    /* 
                    * Exécuter le payement ici
                    */
                },

                onCancel: function(data, actions) {
                    /* 
                    * Achat arrêté
                    */
                },

                onError: function(err) {
                    /* 
                    * Une erreur pendant l'achat
                    */
                }
            }, '#paypal-button');
        </script>
    </div>
</body>