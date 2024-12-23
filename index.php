<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mon portfolio</title>
    <link href="assets/stylesheet.css" rel="stylesheet" />
  </head>
  <body>
    
  <div id="accueil"></div>
  <?php
// ACCUEIL
require_once("yaml/yaml.php");
$data = yaml_parse_file("data/index.yaml");

echo "<h1> Bienvenue sur le portfolio de ".$data["prenom"]." ".$data["nom"]." !"."</h1>";


echo "<nav class='index'>";
echo "<ul>";
echo "<li><a href='#accueil'>Accueil</a></li>";
echo "<li><a href='#competences'>Mes compétences</a></li>";
echo "<li><a href='#formation'>Ma formation</a></li>";
echo "<li><a href='#realisations'>Mes réalisations</a></li>";
echo "<li><a href='#contact'>Contact</a>";
echo "</ul>";
echo "</nav>";
?>

<div id='presentation'></div>
<?php
//PRESENTATION
require_once("./yaml/yaml.php");
$data = yaml_parse_file("./data/presentation.yaml");

echo "<h1>Présentation</h1>";


echo "<p> Je m'appelle ".$data["prenom"]." ".$data["nom"].",";


echo "<p>".$data["paragraphe"]."</p>";
echo "<p> Ma phrase préférée : ".$data["accroche"]."</p>";

echo "<img src='./data/photo.jpg'/>"
?>
<div id='competences'></div>
<?php
//COMPETENCES
  require_once("./yaml/yaml.php");

  $data = yaml_parse_file("./data/competences.yaml");
  echo "<h1>Mes Compétences</h1>";

  // Affichage domaines et compétences
  foreach ($data['domaine'] as $domaine_name => $competences) {
      echo "<h2>" . htmlspecialchars(ucfirst($domaine_name)) . "</h2>";
      echo "<ul>";
      foreach ($competences as $competence) {
          $niveau = intval($competence['niveau']); // Niveau en entier
          echo "<li>";
          echo htmlspecialchars($competence['nom'])." " ;
          echo "<span class='stars'>";

          // Générer des étoiles pleines
          for ($i = 1; $i <= $niveau; $i++) {
              echo "<span class='star'>&#9733;</span>"; // Étoile pleine
          }

          // Compléter avec des étoiles vides
          for ($i = $niveau + 1; $i <= 5; $i++) {
              echo "<span class='star star-empty'>&#9734;</span>"; // Étoile vide
          }

          echo "</span>";
          echo "</li>";
      }
      echo "</ul>";
  }
  ?>
<div id='formation'></div>
<?php  //FORMATION

echo "<h1>Ma Formation</h1>";

require_once("./yaml/yaml.php");
$data = yaml_parse_file("./data/formation.yaml");

foreach($data["diplome"] as $undiplome){
  echo "<h2>".$undiplome["filiere"]."</h2>";
  echo "<p>".$undiplome["option"]."</p>";
  echo "<p>".$undiplome["formation"]."</p>";
  echo "<p>".$undiplome["etablissement"]."</p>";
  echo "<p>".$undiplome["adresse"]."</p>";
  echo "<p>".$undiplome["date debut"].  $undiplome["date fin"]."</p>";
  echo "<p>".$undiplome["contenu"]."</p>";


}





?>
<nav class='center'>
<a id href="./data/cv.png" target="_blank">Visualiser le CV ici</a>
</nav>

<?php
//REALISATIONS

require_once("./yaml/yaml.php");
$data = yaml_parse_file("./data/realisation.yaml");
echo "<p>.$data['site']</p>";

?>


<! FOOTER >
<a href="https://github.com/spongebob987"><img class=liens src="./data/github.png"></a>
<a href="https://instagram.com"><img class=liens src="./data/instagram.png"></a>



</body>
</html>
