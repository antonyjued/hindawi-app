

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="customDB.cssx" type="TEXT/CSS">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script>
    function open(){
      window.open("file:///check.php");
    }
  </script>
  <style>
  body{
   /* background-image: linear-gradiant(to bottom,rgb(81,195,113),rgb(99,251,73); */
   background-color: #252839;
  }
    
#add{
  width:100px;
  height:40px;
  border:none;
  background-color:#019ac0;
  font-size:14px;
  color:#eaeded;
  border-radius:10px;
  position:absolute;
  float:left;
  transition:transform .3s ease; 
}
#add:hover{
  transform:scale(1.1);
}
table{
  margin-top:20px;
    border-collapse: collapse;
    overflow: hidden;
    text-align:left;
    position:relative;
    margin:0 auto; 
    border-radius:10px 10px 0 0;
    box-shadow: 0 0 10px rgba(1,1,1,0.2), 0 0 15px rgba(1,1,1,0.2);
  }
  table thead tr{
    background-color: #30aa90;
    text-align: center;
    color:#baf937;
    border-radius:10px;
  }
    table tbody tr{
      padding-bottom:10px;
      border-bottom: 2px solid green;
      text-align:center;
      background-color: rgba(0,0,0,.4);
      
    }
    table th,td{
      padding:15px 15px; 
    }
    table tbody tr{
      border-bottom: 2px solid #15ae98;
    }
    td{
      color:#2d8c78;
      background-color:;
    }
    #updatebtn{
      background-color:#03b7b2;
      transition: transform .3s ease;
    }
    #deletebtn{
      background-color: rgb(215,5,104);
      transition: transform .3s ease;
    }
    #updatebtn:hover{
      transform: scale(1.1);
    }
    #deletebtn:hover{
      transform: scale(1.1);
    }
    .opbtn{
      padding:10px;
      border:none;
      border-radius:10px;
      cursor:pointer;
    }
    a{
      text-decoration: none;
      color:#f1f1f1;
      font-size: 15px;
    }
   .fa-plus {
      padding:10px;
      margin-left: -7px;
      font-size: 15px;
      
    }
  </style>
  
  
</head>
<body>
  <button id="add" name="add">
    <i class="fa fa-plus" aria-hidden="true"></i><a href="indexxx.php">Add</a> </button>
    <br/><br/>
  <table>
    <thead>
    <tr>
      <th><lable>Journal Name</lable></th>
      <th><lable>Article ID</lable></th>
      <th><lable>Time</lable></th>
      <th><lable>Status</lable></th>
      
      <th colspan="2"><lable>Operation</lable></th>
    </tr>
    </thead>
    <tbody>
  <?php
   include 'connection.php';
    $query=mysqli_query($conn,"SELECT * FROM Journal_History");   
    while($row=mysqli_fetch_assoc($query)){
      $id=$row['ArticleID'];
    echo '<tr><td>'.$row['JournalName'].'</td>
    <td>'.$row['ArticleID'].'</td>
    <td>'.$row['Time'].'</td>
    <td>'.$row['Remarks'].'</td>
    <td> <button class="opbtn" id="updatebtn" ><a href="update.php?updateid='.$id.'">Update</a></button></td>
    <td> <a href="delete.php?deleteid='.$id.'"><button class="opbtn" id="deletebtn" onclick="open();">Delete</button></a></td>
    </tr>';
  }
  ?>
    
    </tbody>
  </table>
</body>
</html>