<?php
declare(strict_types=1);

function get_data(string $url): array
{
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

    
    $response = curl_exec($ch); 
    curl_close($ch); 

    return json_decode($response, true); 
}

function render_template(string $template, array $data = [])
{
    extract($data); 
    require "templates/$template.php"; 
}
?>
