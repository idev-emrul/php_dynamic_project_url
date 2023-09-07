<?php
    // ################ COMMON CODE FOR EACH PAGE, FOR DYNAMIC DIRECTORY ACCESS ############
    // =====================================================================================
    isset(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1]) ? $project_folder = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1] : $project_folder = 'your_project_folder_name';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/' . $project_folder . '/em_config.php');
        
    // --------- INCLUDE HEADER ---------
    include(app_url('inc/header.php'));
    // ========= END COMMON CODE ============================================================
?>

<!-- Your specific page content goes here -->

<h4 class="about">This is about page</h4>
