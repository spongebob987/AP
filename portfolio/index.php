<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mon portfolio</title>
    <link href="assets/stylesheet.css" rel="stylesheet" />
  </head>
  <body>
   
  <?php

require_once("yaml/yaml.php");
$data = yaml_parse_file("data/index.yaml");

echo "<h1> Bienvenue sur le portfolio de ".$data["prenom"]." ".$data["nom"]." !"."</h1>";


echo "<nav>";
echo "<a href='pages/competences.php'>Mes compétences</a>";
echo "<a href='pages/formation.php'>Formation</a>";
echo "<a href='pages/realisation.php'>Mes réalisations</a>";
echo "<a href='pages/contact.php'>Contact</a>";
echo "</nav>";


echo "<p>".$data["paragraphe"]."</p>";
echo "<p>J'ai comme objectif à l'issue de cette formation de me former davantage sur les réseaux</p>";
echo "<p> Ma phrase préférée : ".$data["accroche"]."</p>";





?>

</body>
</html>
