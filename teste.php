<?php

class a
{

    public $url;
    public $texto;

}

//<a href="https://www.w3schools.com"> Visit W3Schools.com" </a>

$link1 = new a();
$link1->url = "http://";
$link1->texto = 'site';
var_dump($link1);
$link2 = new a();
$link2->url = "htt://";
$link2->texto = 'site';
var_dump(link2);
