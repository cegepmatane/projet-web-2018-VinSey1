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

    //Fonction qui récupère le prix total
    public function getPrixTotal(){
        return $this->contenuPanier['prixTotal'];
    }

    //Fonction qui met un item dans le panier et qui sauvegarde le panier dans la session
    public function ajouter($item = array()) {
        if(!is_array($item) or count($item) == 0){
            return FALSE;
        } else {
            if(!isset($item['id'], $item['nom'], $item['prix'], $item['qty'])){
                return FALSE;
            } else {
                //Met l'item dans le panier
                //Prépare la quantité
                $item['qty'] = (float) $item['qty'];
                if($item['qty'] == 0){
                    return FALSE;
                }
                //Prépare le prix
                $item['prix'] = (float) $item['prix'];
                //Crée un identifiant unique pour l'item qui va être inséré dans le panier
                $rowid = md5($item['id']);
                //Récupère la quantité si il y en a déjà une et l'ajoute à celle actuelle
                $ancienneQty = isset($this->contenuPanier[$rowid]['qty']) ? (int) $this->cart_contents[$rowid]['qty'] : 0;
                //Recrée l'entrée avec un identifiant unique et met à jour la quantité
                $item['rowid'] = $rowId;
                $item['qty'] += $ancienneQty;
                $this->contenuPanier[$rowId] = $item;
                //Sauvegarde l'item dans le panier
                if($this->sauvegarderPanier()){
                    return issert($rowId) ? $rowId : TRUE;
                } else {
                    return FALSE;
                }
            }
        }
    }

    //Fonction qui met à jour le panier
    public function update($item = array()){
        if (!is_array($item) OR count($item) == 0){
            return FALSE;
        } else {
            if (!isset($item['rowId'], $this->contenuProduit[$item['rowId']])){
                return FALSE;
            } else {
                //Prépare la quantité
                if(isset($item['qty'])){
                    $item['qty'] = (float) $item['qty'];
                    //Enlève l'item du panier si la quantité est nulle
                    if($item['qty'] == 0){
                        unset($this->contenuPanier[$item['rowId']]);
                        return TRUE;
                    }
                }
                //Trouve les clés qui peuvent être mises à jour
                $clés = array_intersect(array_keys($this->contenuPanier[$item['rowId']]), array_keys($item));
                //Prépare le prix
                if(isset($item['prix'])){
                    $item['prix'] = (float) $item['prix'];
                }
                foreach(array_diff($clés, array('id', 'nom')) as $clé){
                    $this->contenuPanier[$item['rowId']][$clé] = $item[$clé];
                }
                //Sauvegarde le panier
                $this->sauvegarderPanier();
                return TRUE;
            }
        }
    }

    //Fonction qui sauvegarde le panier à la session
    protected function sauvegarderPanier(){
        $this->contenuPanier['itemsTotal'] = $this->contenuPanier['prixTotal'] = 0;
        foreach($this->contenuPanier as $clé => $val){
            //On s'assure que le tableau contient les bons indexs
            if(!is_array($val) OR !isset($val['prix'], $val['qty'])){
                continue;
            }
            $this->contenuPanier['prixTotal'] += ($val['prix'] * $val['qty']);
            $this->contenuPanier['itemsTotal'] += $val['qty'];
            $this->contenuPanier[$clé]['sousTotal'] = ($this->contenuPänier[$clé]['prix'] * $this->contenuPanier[$clé]['qty']);
        }
        //Si le panier est vide, le supprime de la session
        if(count($this->contenuPanier) <= 2){
            unset($_SESSION['contenuPanier']);
            return FALSE;
        } else {
            $_SESSION['contenuPanier'] = $this->contenuPanier;
            return TRUE;
        }
    }

    //Fonction qui supprime un item du panier
    public function supprimer($rowId){
        unset($this->contenuPanier[$rowId]);
        $this->sauvegarderPanier();
        return TRUE;
    }

    //Fonction qui permet de reset le panier et d'enlever celui de la session
    public function destroy(){
        $this->contenuPanier = array('prixTotal' => 0, 'itemsTotal' => 0);
        unset($_SESSION['contenuPanier']);
    }
}