<?php
include 'bradapi.php';
$q = intval($_GET['q']);
echo $q;
// 搜尋 ajax table = option 的資料
$sql="SELECT * FROM ajax WHERE id = $q ";
$result = mysqli_query($link,$sql);

echo "<table border='1'>
    <tr>
    <th>Name</th>    
    <th>Age</th>    
    </tr>";

while($row = mysqli_fetch_array($result))
{
    // 顯示資料
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "</tr>";
 
}
echo "</table>";


?>