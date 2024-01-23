<h1 align="center" id="title">
27 - Le design pattern Décorateur
</h1>
<p id="description"> 
Le design pattern Décorateur est un principe de conception orientée objet qui permet d'ajouter
dynamiquement de nouvelles fonctionnalités à un objet sans modifier sa structure.
Ce pattern crée une alternative souple à l'héritage pour étendre les fonctionnalités d'une classe, en
enveloppant l'objet original dans un objet "décorateur" qui possède des comportements
supplémentaires.
</p>
<h2 align="center" id="problematique">
Problématique
</h2>
<p id="prob-content">
Dans de nombreuses situations, il est nécessaire d'avoir une seule instance d'une classe dans toute
une application. Par exemple, la gestion d'une seule connexion à une base de données ou un fichier
de configuration unique. La création de multiples instances d'une telle classe pourrait entraîner des
comportements imprévus, une utilisation excessive des ressources, ou des conflits de données.
</p>
<h2 align="center" id="when">
Pourquoi Utiliser le Décorateur ?
</h2>
<p id="when-content">
Le design pattern Singleton résout ce problème en s'assurant qu'une seule instance d'une classe est
créée et en fournissant un point d'accès global à cette instance. Il contrôle l'accès à la ressource
partagée, garantit la cohérence des données et centralise la gestion des ressources.
</p>