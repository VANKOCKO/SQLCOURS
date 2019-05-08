Concevez une base de données qui sera utilisée par un site PHP pour générer puis enregistrer des devis.

On utilisera les entités `estimates` ("devis") et `products`.
On pourra ainsi créer plusieurs devis, qui auront chacun un ou plusieurs produits détaillés

On aura une association de type
`Produit * ----- * Devis`

Devis :

On enregistrera : 
- la date de création
- la date de validation
- le numéro de devis
- l'état en cours (qui sera soit "Brouillon", soit "En attente", soit "Validé", soit "Annulé", soit "Payé").
=> Pour cette colonne, utilisez le type "ENUM", demandez conseil si besoin

On spécifiera également un client, dont les informations seront contenues dans la table `customers`, à savoir son adresse, son nom et son prénom.


Produit :

On conservera en base de données le nom du produit, le prix unitaire, la quantité, un taux de réduction éventuel.

Ajoutez un devis comprenant les informations suivantes :

    (Date de création : aujourd'hui)
    Jay Malauné
    5 Impasse Dufrock
    57015 ALTVILLER
    
        paire de gants de boxe 		35 EUR
        sacs d'entrainement			70 EUR
        bouteille de champagne 		35 EUR
    
        (En attente de réponse)


/**
   SOLUTION
**/

