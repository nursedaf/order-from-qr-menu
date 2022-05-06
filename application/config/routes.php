<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin';
$route['garson'] = 'garson';
$route['masa'] = 'garson/bekleyen';
$route['masalar'] = 'garson/masalar';
$route['menu'] = 'menu';

$route['masano'] = 'masano/masano';
$route['masalogin'] = 'home/masalogin';


$route['siparis'] = 'menu/siparis';
$route['sepet'] = 'menu/sepet';
$route['hesap'] = 'menu/hesap';