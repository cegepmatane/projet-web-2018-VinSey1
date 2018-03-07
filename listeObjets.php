<?php 
include "/transactions/test_stripe.php";
function listeObjets ($objet){ ?>
    <div class="produit-courant">
        <img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit" alt="image survie étudiante"/>
        <ul>
            <li><?php echo $objet->getTitreDeVente();?></li>
            <li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
            <!--
                <li>
                    <form action="achat.php" method="post">
                        <input type="hidden" name="idObjet" value="<?php echo $objet->getIdObjet(); ?>"/>
                        <input type="submit" value="Acheter"/>
                    </form>
                </li>
            -->
            <li><?php paiement($objet); ?></li>
        </ul>
    </div>
<?php } ?>