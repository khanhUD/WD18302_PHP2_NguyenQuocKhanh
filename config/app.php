<?php

if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') 
{
    $web_root = 'https://' . $_SERVER['HTTP_HOST'] . '/';
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}

return [
    'ROOT_URL' => $web_root
];

?>