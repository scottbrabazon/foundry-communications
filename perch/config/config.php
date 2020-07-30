<?php
    define('PERCH_LICENSE_KEY', 'P21608-EDQ964-UTF155-YNR647-LAZ018');

    define("PERCH_DB_USERNAME", 'foundry2016');
    define("PERCH_DB_PASSWORD", 'kebabtheatrepistol');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "foundry2016");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'info@foundrycomms.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'The Foundry');

    define('PERCH_EMAIL_METHOD', 'smtp');
    define('PERCH_EMAIL_HOST', 'smtp.sparkpostmail.com');
    define('PERCH_EMAIL_AUTH', TRUE);
    define('PERCH_EMAIL_SECURE', 'TLS');
    define('PERCH_EMAIL_PORT', 587);
    define('PERCH_EMAIL_USERNAME', 'SMTP_Injection');
    define('PERCH_EMAIL_PASSWORD', '34fff2bfb7a7a308bb6f604cbafb6d3e1f1473d7');


    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    
    define('PERCH_RWD', true); 

    define('PERCH_GMAPS_API_KEY', 'AIzaSyAd9AbybcLwk5Oo61zLP_6GHkwMP0ahBfY');
