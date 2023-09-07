<?php 
    // ################ EM_CONFIG FILE FOR GET DYNAMIC BASE_URL AND APP_URL ################
    // =====================================================================================
    function base_url($custom_path=''){
        // ------Get the ptotocol-------
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

        // Get the current URL path
        $currentPath = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        // ------ define the folder path ------------
        isset($currentPath[1])?$project_folder = $currentPath[1]:$project_folder =='your_project_folder_name';

        // -----Get the base URL-----
        return $protocol . $_SERVER['HTTP_HOST'].'/'.$project_folder.'/'.$custom_path;
    }

    function app_url($custom_path=''){
        isset(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1]) ? $project_folder = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1] : $project_folder = 'your_project_folder_name';
        
        // -----Get the base URL-----
        return $_SERVER['DOCUMENT_ROOT'] . '/'. $project_folder .'/'.$custom_path;
    }

    function project_root(){
         // Get the current URL path
         $currentPath = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

         // ------ define the folder path ------------
         return isset($currentPath[1])?$project_folder = $currentPath[1]:$project_folder =='your_project_folder_name';
    }
?>