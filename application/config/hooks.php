<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$hook['post_controller_constructor'][] = array(
'class'    => 'SpecialChar', 
'function' => 'remove_specials',
'filename' => 'removespecial.php', 
'filepath' => 'hooks'  
);
