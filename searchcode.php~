<?php
include('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

//exit;
$sql="select * from a WHERE id = '".$q."'";
$result = mysql_query($sql);

echo "<table>
<tr>
<th>Name</th>
<th>User Name</th>

</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "</tr>";
}
echo "</table>";
//mysqli_close($con);
?>
</body>
</html>

