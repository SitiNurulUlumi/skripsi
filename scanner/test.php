<?php
$command = escapeshellcmd('python copymain.py');
$output = shell_exec($command);
header("Location: http://localhost/big/history/");
