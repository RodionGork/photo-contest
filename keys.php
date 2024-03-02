<?php

$id = trim(fgets(STDIN));

echo "$id." . crypt($id, "MagicWordXyzzy") . "\n";