<h1 align="center" id="title">
13 - La méthode magique sleep
</h1>
<p id="description"> 
La méthode magique __sleep en PHP est une fonction spéciale qui est automatiquement appelée
lorsqu'une instance de classe est sérialisée avec serialize().
Cette méthode permet de contrôler quelles propriétés de l'objet doivent être incluses dans la
représentation sérialisée.
Elle est utilisée pour préparer l'objet avant la sérialisation, souvent pour des raisons de nettoyage ou
de sécurité, comme la fermeture de ressources ou l'exclusion de propriétés sensibles.
</p>