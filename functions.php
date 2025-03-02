<?php
declare(strict_types=1);

function get_data(string $url): array
{
    $ch = curl_init(); // Inicializa cURL
    curl_setopt($ch, CURLOPT_URL, $url); // Define la URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retorna la respuesta en lugar de imprimirla

    
    $response = curl_exec($ch); // Ejecuta la solicitud
    curl_close($ch); // Cierra la conexión

    return json_decode($response, true); // Decodifica el JSON y lo retorna como array
}

function render_template(string $template, array $data = [])
{
    extract($data); // Extrae las variables del array
    require "templates/$template.php"; // Carga la plantilla
}
?>
