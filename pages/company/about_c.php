<?php
    // ################ COMMON CODE FOR EACH PAGE, FOR DYNAMIC DIRECTORY ACCESS ############
    // =====================================================================================
    isset(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1]) ? $project_folder = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1] : $project_folder = 'your_project_folder_name';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/' . $project_folder . '/em_config.php');
    // ========= END COMMON CODE ============================================================
?>

<?php
    // --------- INCLUDE REQUIRED FILE LIKE HEADER ---------
    include(app_url('inc/header.php'));
?>


<h1>This is company about</h1>