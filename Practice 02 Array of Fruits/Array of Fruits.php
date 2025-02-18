<?php
$prutas = array('saging', 'apol','mansanas','bayabas','guava');

echo "<ol>";

for ($i = 0; $i < count($prutas); $i++) {
    echo "<li>" . $prutas[$i] . "</li>" ;
}

echo "</ol>";
?>