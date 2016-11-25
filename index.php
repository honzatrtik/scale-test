<?php

$redis = new Redis();
$redis->connect('redis');

$hostname = getenv('HOSTNAME');

$hits = $redis->incr('hits');
$hitsByHostname = $redis->incr("hits:{$hostname}");

?>
<h1>Served by container: <?=$hostname ?></h1>
<h3>Total hits: <?=$hits ?></h3>
<h3>Hits on this container: <?=$hitsByHostname ?></h3>
