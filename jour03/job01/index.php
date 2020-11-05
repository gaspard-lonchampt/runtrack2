<?php 

$tab = [
    200,
    204,
    173,
    98,
    171,
    404,
    459
];

$paire = 2;

foreach ($tab as $value) {
    // le 0 correspond à une division euclidienne où le reste est 0)
    if ($value % $paire == 0) { 
        echo "$value" . " ". "est paire <br />";
    }
    else {
        echo "$value" . " ". "est impaire <br />";
    }
}

?> 
