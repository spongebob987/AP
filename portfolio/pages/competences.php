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

  //données YAML
  $data = yaml_parse_file("../data/competences.yaml");



  echo "<nav>";
  echo "<a href='../index.php'>Accueil</a>";
  echo "</nav>";

  //faire afficher les domaines et leurs compétences
  foreach ($data['domaine'] as $domaine_name => $competences) {
      echo "<h1>" . htmlspecialchars(ucfirst($domaine_name)) . "</h1>";
      echo "<ul>";
      foreach ($competences as $competence) {
          echo "<p>";
          echo htmlspecialchars($competence['nom']) . " - Niveau : " . htmlspecialchars($competence['niveau']);
          echo "</p>";
      }
      echo "</ul>";
  }
  ?>

  </body>
</html>
