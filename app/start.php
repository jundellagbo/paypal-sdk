<?php 

require 'vendor/autoload.php';

use \PayPal\Rest\ApiContext;
use \PayPal\Auth\OAuthTokenCredential;

$paypal = new ApiContext(
    new OAuthTokenCredential(
        // client ID
        'AUDPFhCuq_xIpeXxp-lwIMxyqd3cMDTlkKkcb48x81wOw7wfTd_WHPcf4pi1a2rIDkZWBYPn5JgaMqeV',
        // secret ID
        'EAJnOiEy7JNi9nv7dKyn7x9rzfqKkZ5VesAOGyE9Ub7zqYNGEiGqAx3WnxQwRDD7CgU4eFtYSF0S398g'
    )
);