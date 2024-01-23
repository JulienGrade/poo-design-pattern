<h1 align="center" id="title">
31 - Le design pattern Factory
</h1>
<p id="description"> 
Le design pattern Factory, également connu sous le nom de "Fabrique" en programmation, est un
modèle de conception créatif utilisé pour encapsuler la logique de création d'objets.
Au lieu de créer des instances d'objets directement avec le constructeur (à l'aide de l'opérateur
new), ce pattern utilise une méthode ou une classe spéciale appelée "factory" (usine) pour créer et
retourner des instances.
Ce modèle permet de séparer la création des objets de leur utilisation et facilite la création
d'instances d'objets sans spécifier la classe exacte de l'objet qui sera créé.
</p>
<h2 align="center" id="problematique">
Problématique
</h2>
<p id="prob-content">
Dans la programmation orientée objet, il est souvent nécessaire de créer des objets dont le type
exact peut ne pas être connu jusqu'au moment de l'exécution. Par exemple, en fonction de l'entrée
utilisateur ou d'une configuration, vous pourriez avoir besoin de créer des instances de différentes
sous-classes.
</p>
<h2 align="center" id="when">
Pourquoi Utiliser la Factory ?
</h2>
<p id="when-content">
Le Factory Pattern offre une solution à ce problème en déléguant la responsabilité de l'instanciation
des objets à une classe ou une méthode spéciale (la "factory"). Cela permet de centraliser la création
d'objets, ce qui rend le code plus modulable, plus facile à maintenir et à étendre.
</p>