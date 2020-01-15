<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Rice", "Meat", "Banana", "Fries"];
/*
Print every array element in a new line.
*/
echo "$food[0]<br>";
echo "$food[1]<br>";
echo "$food[2]<br>";
echo "$food[3]<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
        <li>$food[0]</li>
        <li>$food[1]</li>
        <li>$food[2]</li>
        <li>$food[3]</li>
    </ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = ["Rice" => "Main course",
              "Meat" => "Additional",
               "Banana" => "Fruit",
               "Fries" => "Side dish"
              ];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main course 
cheesesake | desert 
*/
echo "Rice | ".$food_assoc ["Rice"]."<br>"; 

echo "Meat | ".$food_assoc ["Meat"]."<br>";

echo "Banana | ".$food_assoc ["Banana"]."<br>";

echo "Fries | ".$food_assoc ["Fries"]."<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = ["Rice" => ["type" => "Main course",
                         "origin" => "India"],
              "Meat" => ["type" => "Additional",
                         "origin" => "Australia"],
               "Banana" => ["type" => "Fruit",
                            "origin" => "Somalia"],
               "Fries" => ["type" => "Side dish",
                           "origin" => "USA"]
              ];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo "Rice | ".$food_assoc["Rice"]["type"]." | ".$food_assoc["Rice"]["origin"]."<br>";
echo "Meat | ".$food_assoc["Meat"]["type"]." | ".$food_assoc["Meat"]["origin"]."<br>";
echo "Banana | ".$food_assoc["Banana"]["type"]." | ".$food_assoc["Banana"]["origin"]."<br>";
echo "Fries | ".$food_assoc["Fries"]["type"]." | ".$food_assoc["Fries"]["origin"]."<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";
/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo '
<table border=2px>
<thead>
<tr>
<th align="left">food</th>
<th align="left">type</th>
<th align="left">origin</th>
</tr>
</thead>
<tbody>
<tr>
<td align="left">Rice</td>
<td align="left">'.$food_assoc["Rice"]["type"].'</td>
<td align="left">'.$food_assoc["Rice"]["origin"].'</td>
</tr>
<tr>
<td align="left">Meat</td>
<td align="left">'.$food_assoc["Meat"]["type"].'</td>
<td align="left">'.$food_assoc["Meat"]["origin"].'</td>
</tr>
<tr>
<td align="left">Banana</td>
<td align="left">'.$food_assoc["Banana"]["type"].'</td>
<td align="left">'.$food_assoc["Banana"]["origin"].'</td>
</tr>
<tr>
<td align="left">Fries</td>
<td align="left">'.$food_assoc["Fries"]["type"].'</td>
<td align="left">'.$food_assoc["Fries"]["origin"].'</td>
</tr>
</tbody>
</table>';
?>








