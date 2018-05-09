<?php //phpinfo();
echo '<pre>';
$handle = @mysqli_connect('mysql', 'docker', 'docker', 'develdb', 3306);
echo mysqli_connect_error();
        var_export($handle);


$redis = new \Redis();
        $redis->connect('redis');
        var_export($redis->info());

