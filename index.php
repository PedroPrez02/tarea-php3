<?php
declare(strict_types=1);
require "functions.php";

$url = "https://rickandmortyapi.com/api/character"; // URL de la API
$data = get_data($url);
$characters = $data['results'] ?? []; // Extrae los personajes de la respuesta

render_template("home", ["characters" => $characters]); // Renderiza la plantilla
?>
