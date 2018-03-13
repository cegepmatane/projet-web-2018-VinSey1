<?php session_start();
class Panier {
    
    protected $contenuPanier = array();

    //Construction du panier en fonction de la session
    public function construction(){
        //Récupère le contenu du panier de la session
        $this->contenuPanier = !empty($_SESSION['contenuPanier'])?$_SESSION['contenuPanier']:NULL;
        if($this->contenuPanier == NULL){
            //Si il n'a pas de panier, définit les valeurs pas défaut
            $this->contenuPanier = array('prixTotal' => 0, 'itemsTotal' => 0);
        }
    }

    //Fonction qui retourne l'ensemble du contenu du panier
    public function contenu(){
        //Effectue un tri avec l'ajout le plus récent en premier
        $panier = array_reverse($this->contenuPanier);

        //Enlève le nombre total d'items et le prix total pour ne pas créer d'erreurs
        unset($panier['prixTotal']);
        unset($panier['itemsTotal']);

        return $panier;
    }

    //Fonction qui retourne les détails d'un item spécifique du panier
    public function getItem($rowId){
        return (in_array($rowId, array('prixTotal', 'itemsTotal'), TRUE) OR !isset($this->contenuPanier[$rowId]))?FALSE:$this->contenuPanier[$rowId];
    }

    //Fonction qui récupère le nombre total d'items
    public function getItemsTotal(){
        return $this->contenuPanier['itemsTotal'];
    }
}