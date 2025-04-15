<?php

$subjects = ["Algo","DS"];
$marks = [
    [85, 75],
    [78, 68]
    
];

echo "<table border='1'>";
echo "<tr>
<th>SRNO</th>
<th>Subject</th>
<th>Student1</th>
<th>Student2</th>

</tr>";

$total = [0, 0, 0];

for ($i = 0; $i < count($subjects); $i++) {
    echo "<tr>
<td>" . ($i + 1) . "</td>
<td>{$subjects[$i]}</td>";
    for ($j = 0; $j < 2; $j++) {
        echo "<td>{$marks[$i][$j]}</td>";
        $total[$j] += $marks[$i][$j];
    }
    echo "</tr>";
}

echo "<tr>
<th colspan='2'>Total</th>
<td>{$total[0]}</td>
<td>{$total[1]}</td>
<td>{$total[2]}</td>
</tr>";

echo "<tr>
<th colspan='2'>Percentage</th>
<td>" . ($total[0] / 2) . "%</td>
<td>" . ($total[1] / 2) . "%</td>
<td>" . ($total[2] / 2) . "%</td>
</tr>";

echo "</table>";
echo "This code is executed by Prathu Garg 0221BCA093";

?>