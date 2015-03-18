<?php

return array(

    // Service (only maxmind so far)
    'service' => 'maxmind',

    'maxmind' => array(
        'type'          => 'database', // database or web_service
        'user_id'       => '',
        'license_key'   => '',
        'database'      => array(
            'path'              => ''   // Full path to database, excluding name. If omitted, defaults to 'app_path()."/database/maxmind/"'.
            'name'              => '',  // Defaults to "GeoLite2-City.mmdb".
        }
    )
);