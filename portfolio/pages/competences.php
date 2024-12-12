<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mes compétences</title>
    <link href="../assets/stylesheet.css" rel="stylesheet" />
  </head>
  <body>
   
  <?php
require_once("../yaml/yaml.php");
$data = yaml_parse_file("..\data\competences.yaml");




echo "<nav>";
echo "<a href='../index.php'>Accueil</a>";
echo "</nav>";

foreach ($domaine as $domaine_name => $competences): 
  <h2> echo htmlspecialchars(ucfirst($domaine_name))</h2>; 
  <ul>
       foreach ($competences as $competence): 
          <li>
               echo htmlspecialchars($competence['nom']);
               echo htmlspecialchars($competence['niveau']);
          </li>
       endforeach; ?>
  </ul>


</body>
</html>
