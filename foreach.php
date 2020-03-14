<?php
$users = array("امیر" => "عبادی" , "صدیقه" => "واعظی", "مهران" => "راد", "علی" => "دارابی");
foreach ($users as $name => $user){
    echo $name.' '.$user.' || ';
}

/******************************/
echo "<br>*********************** <br>";

echo "<table>";
echo "<tr><th>نام</th> || <th>نام خانوادگی </th></tr>";
$users1 = array("امیر" => "عبادی" , "صدیقه" => "واعظی", "مهران" => "راد", "علی" => "دارابی");
foreach ($users1 as $name1 => $user1){
    echo "<tr><td>$name1</td><td>$user1</td></tr>";
}

echo"</table>";
