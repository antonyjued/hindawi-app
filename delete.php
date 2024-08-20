
<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
 $id=$_GET['deleteid'];
echo('<script>confirm("Are Sure to Delete")</script>');
 $deleteQuery="delete from Journal_History where ArticleID='$id'";
   $ExecuteQuery=mysqli_query($conn,$deleteQuery);
   
 if($ExecuteQuery) {
   echo('<script>alert("'.$id.' Deleted Successfully...")</script>');
   //header('Location: customDB.php');
 }
 else{
   echo('<script>alert("Failed!!!...")</script>');
 }
 
}
#header("Location: customDB.php",true, 301);
#exit();
echo "<script> location.href='customDB.php'; </script>";
       exit;
?>