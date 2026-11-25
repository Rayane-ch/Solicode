# Modélisation des données — Restaurant (MCD & MLD)

## 1. Regroupement des propriétés en entités (MCD)

* **CLIENT** : <u>code_client</u>, nom_client, prenom_client, telephone_client, email_client
* **COMMANDE** : <u>code_commande</u>, date_commande, heure_commande, statut_commande
* **CATEGORIE** : <u>id_categorie</u>, categorie_repas
* **REPAS** : <u>code_repas</u>, nom_repas, description_repas, prix_repas

## 2. Relations et Cardinalités (MCD)

* **CLIENT** `(1,N)` ─── *passer* ─── `(1,1)` **COMMANDE**
* **CATEGORIE** `(0,N)` ─── *appartenir* ─── `(1,1)` **REPAS**
* **COMMANDE** `(1,N)` ─── *contenir* (`quantite_commandee`, `prix_unitaire_commande`) ─── `(0,N)` **REPAS**

## 3. Validation et passage au MLD

```text
Table : CLIENT
--------------
code_client (PK)
nom_client
prenom_client
telephone_client
email_client

Table : COMMANDE
----------------
code_commande (PK)
date_commande
heure_commande
statut_commande
code_client (FK)

Table : CATEGORIE
-----------------
id_categorie (PK)
categorie_repas

Table : REPAS
-------------
code_repas (PK)
nom_repas
description_repas
prix_repas
id_categorie (FK)

Table : LIGNE_COMMANDE
----------------------
code_commande (PK, FK)
code_repas (PK, FK)
quantite_commandee
prix_unitaire_commande
