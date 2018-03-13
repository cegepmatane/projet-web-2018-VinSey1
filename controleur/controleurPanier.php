<?php session_start();
class Panier {
    
    protected $contenu_panier = array();

    //Construction du panier en fonction de la session
    public function construction(){
        //Récupère le contenu du panier de la session
        $this->contenu_panier = !empty($_SESSION['contenu_panier'])?$_SESSION['contenu_panier']:NULL;
        if($this->contenu_panier == NULL){
            //Si il n'a pas de panier, définit les valeurs pas défaut
            $this->contenu_panier = array('prix_total' => 0, 'items_total' => 0);
        }
    }
}