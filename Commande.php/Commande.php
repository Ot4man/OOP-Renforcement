<?php

require_once 'Produit.php';

class Commande
{
    private array $produits = [];

    public const TVA = 0.2;

    public function ajouterProduit(Produit $produit)
    {
        $this->produits[] = $produit;
    }

    public function calculerTotal()
    {
        $total = 0;

        foreach ($this->produits as $produit) {
            $total += $produit->getPrix();
        }

        return $total;
    }

    public function calculerTotalTTC()
    {
        return $this->calculerTotal() * (self::TVA);
    }
}