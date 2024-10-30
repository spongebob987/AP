<?php

require_once("data/index.yaml");
$data = yaml_parse_file(index.yaml)

echo "<p> Bienvenue sur le portfolio de ".$data["prenom"]. "</p>"

?>