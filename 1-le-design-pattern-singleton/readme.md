<h1 align="center" id="title">
1 - Le design pattern Singleton
</h1>
<h2 align="center" id="second-title">
Un design pattern c’est quoi ?
</h2>
<p id="description"> Un design pattern ou patron de conception est une solution éprouvée et réutilisable à un problème 
couramment rencontré dans la conception logicielle. Les design patterns représentent des 
meilleures pratiques basées sur l'expérience collective des développeurs fournissant 
un cadre ou un modèle standard pour résoudre des problèmes spécifiques. 
Ils ne sont pas des bouts de code finis mais plutôt des guides ou des modèles pour 
structurer et organiser le code de manière efficace lisible et maintenable.</p> 
<h2 align="center" id="title">
Le Singleton
</h2>
<p id="description-2">Le design pattern Singleton est une technique de conception qui garantit qu'une classe
a une seule instance dans tout le programme et fournit un point d'accès unique à cette 
instance. Ce modèle est utilisé pour contrôler l'accès à des ressources partagées comme 
une connexion de base de données ou un fichier de configuration assurant ainsi qu'une 
seule instance de la classe est créée et utilisée partout dans l'application. 
Toutefois son utilisation doit être considérée avec prudence car il introduit un 
état global dans une application ce qui peut rendre le code moins transparent et 
plus difficile à tester.
</p>