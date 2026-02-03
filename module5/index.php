<?php
$dogs = array(
    array("Husky", "Siberia", 15),
    array("Chihuahua", "Mexico", 10),
    array("Bulldog", "England", 8)
);

echo $dogs[0][0]. " Origin: ".$dogs[0][1]. " Age: ". $dogs[0][2]."<hr>";
echo $dogs[1][0]. " Origin: ".$dogs[1][1]. " Age: ". $dogs[1][2]."<hr>";
echo $dogs[2][0]. " Origin: ".$dogs[2][1]. " Age: ". $dogs[2][2]."<hr>";

for($x = 0; $x<3; $x++){
    echo "<ul>";
    for ($y = 0; $y<3; $y++){
        echo "<li>".$dogs[$x][$y]. "</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>

<table border="1">
    <tr>
        <th>Phone</th>
        <th>In stock</th>
        <th>Sold</th>
    </tr>


<style>
    table{
        width: 500px;
    }

    th, td{
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }

    th{
        background-color: aquamarine;
        font-weight: bold;
    }
</style>


<?php
$phones = array(
    array("Iphone17", 20, 5),
    array("Iphone16", 15, 15),
    array("Iphone15", 10, 8),
    array("Iphone13", 5, 5)
);


for($row = 0; $row<4; $row++){
    echo "<tr>";
    for($col =0; $col<3; $col++){
        echo "<td>" .$phones[$row][$col] ."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</html>

<?php

$arianita = [
    "Math"=>"3",
    "Art"=>"5",
    "History"=>"4",
    "Music"=>"2"
];

echo "Arianitas math grade is ".$arianita['Math'];

?>

