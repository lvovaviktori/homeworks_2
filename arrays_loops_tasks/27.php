<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');

$rows = 5;
$cols = 5;
?>
<table border="1" cellpadding="5">
    <?php
    for ($i = 0; $i < $rows; $i++)
    {
        echo "<tr>";
            for ($i2 = 0; $i2 < $cols; $i2++)
            {
                $color = $colors[array_rand($colors)];

                echo "<td style=\"background-color: " . $color . ";\">";
                echo rand(100, 99999);
                echo "</td>";
            }
        echo "</tr>";
    }
    ?>
</table>
