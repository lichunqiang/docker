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

echo '<h1>Beanstalkd</h1>';
echo '<pre>';
$handle = @fsockopen('beanstalkd', 11300, $errno, $errstr);
stream_set_timeout($handle, 2, 0);
if ($handle) {

	fwrite($handle, 'stats' . "\r\n");

	while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);

} else {
	echo $errno, ': ', $errstr;
}
echo '</pre>';