<?php

if(!defined('sugerEntry') || !sugerEntry)
   die('Not a Valid entry point');

class HookDemo{
   function demo(&$bean,$event,$arguments){
      echo"hi";
      exit();
   }
}