<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*
 * Copyright 2014 BoredWookie
 *
 * Special thanks to this guy: http://cheleguanaco.blogspot.de/2009/06/simple-sugarcrm-logic-hook-example.html
 *
 * License: MIT
 * Disclaimer: For educational purposes, be sure you know what you are doing!
 */

// This class deals with attaching a URL to the case so the agent can generate a work agreement
class UrlGenerataor {
    function generateUrl($bean, $event, $arguments){
        // get the description text
        $description = $bean->description;

        // get the case GUID
        $caseguid = $bean->id;

        // Generate the URL to the agreement generator
        $agreementGeneratorUrl = "https://domain.tld/specific/url/tree/action3.html?caseguid=".$caseguid;

        // Append the URL to the description text (Ensures we don't overwrite something important)
        $description = $description."\r\n\r\n".$agreementGeneratorUrl."\r\n\r\n";
        $bean->description = $description;
    }
}
