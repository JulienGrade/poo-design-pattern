<h1 align="center" id="title">
14 - La méthode magique wakeup
</h1>
<p id="description"> 
La méthode magique __wakeup en PHP est automatiquement appelée lorsqu'un objet est
désérialisé avec unserialize().
Cette méthode est utilisée pour reconstruire toutes les ressources qui ne peuvent pas être
sérialisées (comme des connexions de base de données) ou pour effectuer toute initialisation
nécessaire après qu'un objet a été désérialisé.
Elle permet de restaurer l'état de l'objet à quelque chose d'utile, étant donné que la sérialisation ne
concerne que les propriétés et non les ressources ou les états externes.
</p>