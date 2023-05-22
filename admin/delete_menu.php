<?php
include("../dbconnection.php");
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM menu WHERE meal_id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        echo "<script type = \"text/javascript\">
        alert(\" Menu deleted Successfully \");
        window.location = (\"view_menu.php\")
        </script>";
    } else {
    echo "<script type = \"text/javascript\">
        alert(\"Fail To Delete. Try Again\");
        window.location = (\"view_menu.php\")
        </script>";
}
}
?>
