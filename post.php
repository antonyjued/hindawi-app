<?php

$journalName=$_POST['journal_name'];
$articleID=$_POST['articleID'];
/*strval() */
$articleId='123456';
$journalCaps=strtoupper($journalName);
date_default_timezone_set('Asia/Kolkata');
$timeGet=date('d/m/Y h:i A');
/*$timeGet1=CURRENT_TIMESTAMP; */

  $status=$_POST['status'];
  $status1='gone';

//Database connection 
include('connection.php');
  if(isset($_POST['submit']) ){
  if($conn){
    $sql="INSERT INTO Journal_History(JournalName,ArticleID,Time,Status) VALUES('$journalName','$articleID',CURRENT_TIMESTAMP,'$status')";
    if(mysqli_query($conn,$sql)){
    echo('<script>alert("'.$journalName." ".$articleID.' Record Inserted Successfully! ...")</script>');
   header('Location: index.php'); 
    }
  }
  else{
    echo " Error".mysqli_error($conn);
  }
  }

mysqli_close($conn);
/*echo"<script src='hindawi.js'>";
echo "clear_val();";
echo "</script>"; */
?>