<?php

function execPrint($command)
{
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}
// Print the exec output inside of a pre element
execPrint("git pull https://github.com/saiyedulbas/csv.git main 2>&1");
//execPrint('git pull 2>&1');
//execPrint("git status");
