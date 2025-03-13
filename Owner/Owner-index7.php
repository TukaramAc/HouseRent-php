<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","house_rent");
if($conn)
{
    echo "connected";
}
else{
    echo "not connected";
}
$sql="delete from add_property where id='$id'";
if(mysqli_query($conn,$sql))
{
    header ('location:Owner-index5.php');
}
else{
    echo "Image not deleted";
}
?>