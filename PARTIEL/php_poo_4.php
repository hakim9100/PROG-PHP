<?php
class action
{
//Constante
const PARIS="Palais Brognard"; 
//variables propres de la classe
private $nom; 
private $cours; 	
private $bourse="bourse de Paris "; 

//fonction propre de la classe
public function info()
{
echo "Informations en date du ",date("d/m/Y H:i:s"),"<br>";

$now=getdate();
$heure= $now["hours"];
$jour= $now["wday"];

echo "<h3>Horaires des cotations</h3>";
if(($heure>=9 && $heure <=17)&& ($jour!=0 && $jour!=6))
{ echo "La Bourse de Paris est ouverte <br>"; }
else
{ echo "La Bourse de Paris est fermée <br>"; }
if(($heure>=16 && $heure <=23)&& ($jour!=0 && $jour!=6) )
{ echo "La Bourse de New York est ouverte <hr>"; }
else
{ echo "La Bourse de New York est fermée <hr>"; }
}
}

<?php
require("objet2.php"); ←
echo "Constante PARIS =",PARIS,"<br />"; ←
echo "Nom = ",$nom,"<br />"; ←	
echo "Cours= ",$cours,"<br />"; ←
echo "Bourse= ",$bourse,"<br />"; ←
//info(); //L'appel de info()Provoque une erreur si vous décommentez la ligne ←
action::info();//fonctionne ←
echo "Constante PARIS =",action::PARIS,"<br />"; ←
?>



<?php
class action
{
//Définition d'une constante
const PARIS="Palais Brognard"; ←
const NEWYORK="Wall Street"; ←
//Variables propres de la classe
public $nom ;
public $cours;
public $bourse=array("Paris ","9h00","18h00"); ←	
//fonctions propres de la classe
function info()
{
global $client; ←
La programmation objet
CHAPITRE 9 249
//Utilisation de variables globales et d'un tableau superglobal
echo "<h2> Bonjour $client, vous êtes sur le serveur: ",
➥$_SERVER["HTTP_HOST"],"</h2>"; ←
echo "<h3>Informations en date du ",date("d/m/Y H:i:s"),"</h3>";
echo "<h3>Bourse de {$this–>bourse[0]} Cotations de {$this–>bourse[1]}
➥à {$this–>bourse[2]} </h3>"; ←
//Informations sur les horaires d'ouverture
$now=getdate();
$heure= $now["hours"];
$jour= $now["wday"];
echo "<hr />";
echo "<h3>Heures des cotations</h3>";
if(($heure>=9 && $heure <=17)&& ($jour!=0 && $jour!=6))
{ echo "La Bourse de Paris ( ", self:: PARIS," ) est ouverte
➥<br>"; } ←
else
{ echo "La Bourse de Paris ( ", self:: PARIS," ) est fermée <br>"; }
if(($heure>=16 && $heure <=23)&& ($jour!=0 && $jour!=6) )
{ echo "La Bourse de New York ( ", self:: NEWYORK," ) est ouverte
➥<hr>"; } ←
else
{echo "La Bourse de New York ( ", self:: NEWYORK," ) est fermée <hr>"; }
//Affichage du cours
if(isset($this–>nom) && isset($this–>cours))
{
echo "<b>L'action $this–>nom cotée à la bourse de {$this–>bourse[0]}
➥vaut $this–>cours &euro;</b><br />"; ←

}
}
}
?>


Exemple 9-7. Accessibilité des méthodes
<?php
class accesmeth
{
//Variables propres de la classe
private $code="Mon code privé"; ←
//Méthodes
//Méthode privée
private function lirepriv() ←
{
echo "Lire privée ",$this–>code,"<br />";
}
//Méthode protégée
protected function lirepro() ←	
{
echo "Lire protégée ",$this–>code,"<br />";
}
//Méthode publique
public function lirepub() ←
{
echo "Lire publique : ",$this–>code,"<br />";
$this–>lirepro(); ←
$this–>lirepriv(); ←
}
}
//**********************************
//Appels des méthodes
$objet=new accesmeth(); ←
$objet–>lirepub(); ←
//$objet–>lirepro();//Erreur fatale ←

//$objet–>lirepriv();//Erreur fatale ←
?>

<?php
class action
{
private $propnom;
private $propcours;
protected $propbourse;
function __construct($nom,$cours,$bourse="Paris") 
{
Destructeur et PHP 4
Dans PHP 4, la notion même de destructeur n’existait pas. Il fallait coder spécialement les conséquences
de la destruction d’un objet.
La programmation objet
CHAPITRE 9 257
$this–>propnom=$nom; 
$this–>propcours=$cours; 
$this–>propbourse=$bourse; 
}
function __destruct()
{
echo "L'action $this–>propnom n'existe plus!<br />"; 
}
}
//Création d'objets
$alcotel = new action("Alcotel",10.21); 
$bouch = new action("Bouch",9.11,"New York"); 
$bim = new action("BIM",34.50,"New York"); 
$ref=&$bim; ←

var_dump($alcotel); 
echo "<hr />";
unset($alcotel); 
unset($bim); 

echo "<hr /><h4> FIN du script </h4><hr />"; 
?>