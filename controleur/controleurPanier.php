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

    //Fonction qui retourne l'ensemble du contenu du panier
    public function contenu(){
        //Effectue un tri avec l'ajout le plus récent en premier
        $panier = array_reverse($this->contenu_panier);

        //Enlève le nombre total d'items et le prix total pour ne pas créer d'erreurs
        unset($panier['prix_total']);
        unset($panier['items_total']);

        return $panier;
    }
}