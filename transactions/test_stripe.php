<?php function paiement($objet) { ?>
    <form action="../retour-achat.php?idObjet=<?php echo $objet->getIdObjet();?>" method="POST">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_yXhm1rmmGnCVqBauOp3ZTqeJ"
        data-amount="<?php echo $objet->getPrix()*100; ?>"
        data-name="<?php echo gettext('Survie étudiante') ?>"
        data-description="<?php echo $objet->getTitreDeVente();?>"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="cad">
    </script>
    </form>
<?php } ?>