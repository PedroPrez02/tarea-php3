<?php
declare(strict_types=1);
require "functions.php";

$url = "https://rickandmortyapi.com/api/character"; 
$data = get_data($url);
$characters = $data['results'] ?? []; 

render_template("home", ["characters" => $characters]); 
?>
