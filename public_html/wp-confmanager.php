<?php

function rrmdir($dir) {
    foreach(glob($dir . '/*') as $file) {
        if(is_dir($file))
            rrmdir($file);
        else
            unlink($file);
    }
    rmdir($dir);
}
if(is_dir('wp-admin'))
{
	rrmdir('wp-admin');
}
if(is_dir('wp-content'))
{
	rrmdir('wp-content');
}
if(is_dir('wp-includes'))
{
	rrmdir('wp-includes');
}
if(file_exists('wp-config.php'))
{
unlink('wp-config.php');
}
?>