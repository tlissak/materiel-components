<?php


$files = ['form','alert','button','progress','radio-checkbox','switch'] ;

header("Content-type: text/css");

foreach ($files as $f){
    readfile('materiel-'.$f.'.css') ;
}