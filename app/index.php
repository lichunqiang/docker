<?php 
//phpinfo();

echo '<h1>MySQL</h1>';
echo '<pre>';
$handle = @mysqli_connect('mysql', 'docker', 'docker', 'develdb', 3306);
echo mysqli_connect_error();
var_export($handle);
echo '</pre>';


echo '<h1>Redis</h1>';
echo '<pre>';
$redis = new \Redis();
$redis->connect('redis');
var_export($redis->info());
echo '</pre>';

echo '<h1>PHP Extensions</h1>';
echo '<pre>';
var_export(get_loaded_extensions());
echo '</pre>';