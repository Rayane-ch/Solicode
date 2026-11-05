# Data Modeling (MCD) — Relations and Cardinalities

## Relations & Cardinalities Table

| Entity A | Cardinality A | Verb | Cardinality B | Entity B | Business Rule |
| :--- | :---: | :---: | :---: | :--- | :--- |
| **VILLE** | 1,N | habite | 1,1 | **AUTEUR** | A city hosts one or more authors An author lives in a single city. |
| **AUTEUR** | 1,N | rédige | 1,1 | **ARTICLE** | An author writes one or more articles An article is written by exactly one author. |
| **CATEGORIE** | 0,N | regroupe | 1,1 | **ARTICLE** | A category contains zero or more articles An article belongs to exactly one category. |
| **ARTICLE** | 0,N | possède | 0,N | **TAG** | An article can have zero or more tags A tag can be attached to zero or more articles. |
