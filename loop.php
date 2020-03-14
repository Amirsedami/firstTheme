<?php
for ($i = 0; $i<8; $i++){
    echo "<h1>$i</h1>";
}
echo "********************************** <br>";

echo "<table style='border: 1px solid #ddd;'>";
echo "<tr style='border: 1px solid #ddd;>";
    for ($a = 1; $a <= 5; $a++){
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);

        echo "<td style='border: 1px solid #ddd;background: rgb($r,$g,$b);'>$a</td>";
    }
echo "</tr>";

echo "</table>";