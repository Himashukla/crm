<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array();

//
// This logic hook comes 'out of the box' and serves as a great reference for how to make this work
// When you create an array, the parameters should be like this:
//  position, description, file, className, functionName
$hook_array['before_save'][] = Array(1, 'Cases push feed', 'modules/Cases/SugarFeeds/CaseFeed.php','CaseFeed', 'pushFeed');

//
// This is my custom logic hook to add a URL to the Case Description
// It is set to fire in the second position, after the built-in activity happens
$hook_array['before_save'][] = Array(2, 'Add URL to Case Description', 'custom/modules/Cases/addUrl.php','UrlGenerataor', 'generateUrl');


?>