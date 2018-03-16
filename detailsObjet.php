<?php 

function detailsObjet ($objet){ ?>
    <div class="produit-courant">
        <img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit" alt="image survie étudiante"/>
        <ul>
            <li><?php echo $objet->getTitreDeVente();?></li>
            <li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
            <li><a class="lienbouton" href="acheter.php?idObjet=<?php echo $objet->getIdObjet();?>" >Acheter Maintenant !</a></li>
        </ul>
    </div>
<?php } ?>