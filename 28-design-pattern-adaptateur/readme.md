<h1 align="center" id="title">
28 - Le design pattern Adaptateur
</h1>
<p id="description"> 
Le design pattern Adaptateur, en programmation, est une solution de conception utilisée pour
permettre à des interfaces incompatibles de travailler ensemble.
Ce modèle sert de pont entre deux classes ou systèmes dont les interfaces ne sont pas directement
compatibles. En encapsulant l'interface existante, l'adaptateur crée une nouvelle interface qui
satisfait les exigences d'une autre classe ou d'un autre système.
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
Pourquoi Utiliser l'Adaptateur ?
</h2>
<p id="when-content">
Le design pattern Adaptateur permet de créer une compatibilité entre des interfaces incompatibles.
Il agit comme un pont entre deux classes différentes, permettant à des objets d'utiliser les
fonctionnalités de chacun sans changer leur interface.
</p>