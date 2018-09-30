<?php include('dbconfig.php');

$key = $_GET['pwd'];
$table = "";
$myArray = array();

switch ($key) {
    case "bite":
        $table = "justbidit";
        break;
    case "corona":
        $table = "corona";
        break;
    case "touchstone":
        $table = "touchstone";
        break;
    case "delfinus":
        $table = "delfinus";
        break;
    case "supernova":
        $table = "supernova";
        break;
    case "speakerazzi":
        $table = "speakerazzi";
        break;
    case "coupdegrace":
        $table = "coupdegrace";
        break;
    case "enthral":
        $table = "enthral";
        break;
    case "shrinkhala":
        $table = "shrinkhala";
        break;
}

$result = mysqli_query($conn,"SELECT * from ".$table.";");

 while ($row = mysqli_fetch_row($result))
 {
    $myArray[] = $row;
 }
 $data = array("data"=>$myArray);
 echo json_encode($data);


?>