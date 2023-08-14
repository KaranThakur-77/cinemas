    `<?php
$servername='localhost';
$username='root';
$password='';
$database='cinemas';
$conn=new mysqli($servername,$username,$password,$database);
if (!$conn) {
    # code...
    die("Connection failed.");
} else {
    # code...
    // echo("Success.");
    $id=$_GET['id'];
    $title=$_GET['title'];
    $rating=$_GET['rating'];
    $gener=$_GET['description'];
    $sql="UPDATE movies SET title='$title',rating='$rating',description='$gener' WHERE id=$id";
    $res=$conn->query($sql);
    if ($res===TRUE) {
        header('location:index.php');
    } 
    $conn->close();
}
?>