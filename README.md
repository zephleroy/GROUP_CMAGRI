# GROUP_CMAGRI
La Microfinance multifonctionnelle de coopératives de planteurs.
GROUP_CMAGRI est une solution logicielle performante destinée aux petites institutions de microfinance rurale. Elle utilise des technologies web comme PHP, MySQL, JavaScript (avec jQuery) et CSS.

 En règle générale, les clients de la HH-Microfinance doivent acheter des parts pour devenir membres. Ils détiennent alors un compte d'épargne et un compte de crédit auprès de l'institution financière.

HH-Microfinance a été développé par Franckor Services (Côte d'ivoire) .

Caractéristiques

* Gestion de la clientèle

* Gestion des comptes d'actions

* Gestion de compte d'épargne

* Gestion des prêts

* Gestion des employés

* Rapports

* Comptabilité

Installation

HH-Microfinance étant entièrement basé sur la technologie web, il nécessite un serveur web compatible PHP et une base de données MySQL. Pour les tests, l'utilisation de XAMPP est recommandée.

Pour se connecter à la base de données de test incluse dans ce dépôt (hhmicrofinance.sql), la configuration requise est la suivante : 
Serveur : 127.0.0.1 / 
Utilisateur de la base de données : root / 
Mot de passe de la base de données : '' (mot de passe vide). 
Il s'agit des paramètres par défaut actuels inclus dans ./config/config.php. 
Ils ne doivent être utilisés que pour les installations de test. Veillez à modifier l'utilisateur et le mot de passe de la base de données pour tout environnement de production ! Il est également fortement recommandé de modifier le mot de passe zephleroy à chaque nouvelle installation en modifiant ./config/zephleroy.php.

Le login par défaut pour l'interface graphique du programme est : Nom d'utilisateur : admin Mot de passe : password

Licence
Ce logiciel est sous licence GNU General Public License 3.0, dont une copie se trouve dans le fichier LICENSE.
