# Discovering Entities from Identifiers and Repetitions

## Summary Table

| Donnée observée | Valeur répétée | Réalité représentée | Identifiant proposé | Dépendance |
| :--- | :--- | :--- | :--- | :--- |
| **nom_auteur** | Madani Ali / sara@mail.com | Author (Auteur) | `email_auteur` | `email_auteur -> nom_auteur, prenom_auteur` |
| **nom_ville** | Tanger, Rabat | City (Ville) | `id_ville` | `id_ville -> nom_ville` |
| **nom_categorie** | Développement, Actualité | Category (Catégorie) | `id_categorie` | `id_categorie -> nom_categorie` |
