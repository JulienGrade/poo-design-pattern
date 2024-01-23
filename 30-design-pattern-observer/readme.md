<h1 align="center" id="title">
30 - Le design pattern Observer
</h1>
<p id="description"> 
Le design pattern Observer en programmation est une méthode de conception utilisée pour
créer une relation de type un-à-plusieurs entre des objets.
Dans cette relation, si l'état d'un objet (souvent appelé le "sujet") change, tous ses dépendants (les
"observateurs") sont automatiquement notifiés et mis à jour.
Ce modèle est particulièrement utile pour mettre en place une communication efficace et un
couplage faible entre des objets interdépendants.
</p>
<h2 align="center" id="problematique">
Problématique
</h2>
<p id="prob-content">
Dans un système où plusieurs composants doivent réagir aux changements d'état d'un autre
composant, comment les maintenir synchronisés sans les coupler étroitement ?
</p>
<h2 align="center" id="when">
Pourquoi Utiliser un Observer ?
</h2>
<p id="when-content">
Le design pattern Observer permet à un objet (le sujet) de notifier automatiquement et de mettre à
jour tous ses observateurs en cas de changement d'état. Il est utile pour la communication
interobjets dans les systèmes où un changement dans un objet doit influencer le comportement
d'autres objets, tout en maintenant un faible couplage entre eux.
</p>