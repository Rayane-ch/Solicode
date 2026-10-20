# Observing Occurrences and Identifying Repetitions

## 1. Inventory of Observed Values

* **nom_auteur**: Madani, Sara, Youssef, Amine, Nadia
* **prenom_auteur**: Ali, Amrani, Karim, Idrissi, Alaoui
* **email_auteur**: madani@mail.com, sara@mail.com, youssef@mail.com, amine@mail.com, nadia@mail.com
* **nom_ville**: Tanger, Rabat
* **nom_categorie**: Développement, Actualité


## 2. Repeated Values per Data Attribute

* **nom_ville**:
  * "Tanger" is repeated 3 times.
  * "Rabat" is repeated 2 times.
* **nom_categorie**:
  * "Développement" is repeated 3 times.
  * "Actualité" is repeated 2 times.


## 3. Impact of Data Repetition on Future Updates

If we need to update the category name "Développement" to "Web Development" we would have to manually edit multiple rows (occurrences). If a single row is missed during this update the database will contain inconsistent data.
