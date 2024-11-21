<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mes compétences</title>
    <link href="../assets/competences.css" rel="stylesheet" />
  </head>
  <body>
   
  <?php
require_once("../yaml/yaml.php");
$data = yaml_parse_file("../data/competences.yaml");




echo "<a href='../index.php'>Accueil</a>";

echo "<h1>Mes compétences</h1>";


echo "<p>".$data["Gestion de parc"]."</p>";

foreach($data["domaine"] AS $domaine){
	echo "<p>".ucfirst($domaine["Reseaux"])." : ".$domaine["Gestion de parc"]."</p>\n";
}


?>

</body>
</html>
