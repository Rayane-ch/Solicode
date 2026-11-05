# Data Modeling (MCD) — Relations and Cardinalities

## Relations & Cardinalities Table

| Entity A | Cardinality A | Verb | Cardinality B | Entity B | Business Rule |
| :--- | :---: | :---: | :---: | :--- | :--- |
| **VILLE** | 1,N | habite | 1,1 | **AUTEUR** | Une ville peut accueillir plusieurs auteurs. Un auteur habite dans une seule ville. |
| **AUTEUR** | 1,N | rédige | 1,1 | **ARTICLE** | Un auteur peut rédiger plusieurs articles. Un article est rédigé par un seul auteur. |
| **CATEGORIE** | 0,N | regroupe | 1,1 | **ARTICLE** | Une catégorie regroupe plusieurs articles. Un article appartient à une seule catégorie. |
| **ARTICLE** | 0,N | possède | 0,N | **TAG** | Un article peut avoir plusieurs tags. Un tag peut être associé à plusieurs articles. |
