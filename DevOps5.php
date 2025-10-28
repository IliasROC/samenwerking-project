<?php
function begroet($naam) {
    return "Hallo, " . htmlspecialchars($naam) . "!";
}

echo begroet("wereld");
?> 