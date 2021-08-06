<?php

    $hook_version = 1; 
    $hook_array = Array(); 

    $hook_array['before_save'][] = Array();
    $hook_array['before_save'][] = Array(
        78, 
        'Queue Job Example', 
        'custom/modules/Accounts/Accounts_Save.php', 
        'Accounts_Save', 
        'QueueJob'
    );

?>