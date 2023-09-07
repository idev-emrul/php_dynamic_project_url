<?php
    // ################ COMMON CODE FOR EACH PAGE, FOR DYNAMIC DIRECTORY ACCESS ############
    // =====================================================================================
    isset(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1]) ? $project_folder = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1] : $project_folder = 'your_project_folder_name';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/' . $project_folder . '/em_config.php');
    // ========= END COMMON CODE ============================================================
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="<?=base_url('assets/main.css')?>"> <!-- Adjust the path as needed -->
    <script src="<?=base_url('assets/main.js')?>"></script> <!-- Adjust the path as needed -->
</head>
<body>