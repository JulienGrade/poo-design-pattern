<h1 align="center" id="title">
31 - Le design pattern NullObject
</h1>
<p id="description"> 
Le design pattern Objet Null est une technique de conception utilisée pour réduire les vérifications
de nullité dans le code.
Au lieu d'utiliser null pour représenter l'absence d'un objet, ce pattern implique l'utilisation d'un
objet avec un comportement par défaut ou neutre.
L'objet Null est un exemple de cet objet avec des implémentations standard qui ne font rien, évitant
ainsi les erreurs courantes liées à l'objet null.
</p>
<h2 align="center" id="problematique">
Problématique
</h2>
<p id="prob-content">
Dans la programmation orientée objet, la gestion des instances null peut être problématique. Les
vérifications fréquentes pour null peuvent rendre le code encombré et moins lisible. Comment
peuton simplifier la gestion des cas où une référence d'objet peut être null ?
</p>
<h2 align="center" id="when">
Pourquoi Utiliser le NullObject ?
</h2>
<p id="when-content">
Le design pattern Null Object propose de remplacer les vérifications de null par l'utilisation d'un
objet spécial qui représente l'absence d'un objet valide. Ce "null object" implémente la même
interface que les objets réels mais ne fait rien, ce qui simplifie le code en éliminant le besoin de
vérifier null.
</p>