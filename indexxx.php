<!DOCTYPE html>
<html lang="en">
<head>
  <?php
echo('<script></script>');
$journalName=$_POST['journal_name'];
$articleID=$_POST['articleID'];
/*strval() */
$articleId='123456';
$journalCaps=strtoupper($journalName);
date_default_timezone_set('Asia/Kolkata');
$timeGet=date('d/m/Y h:i A');
/*$timeGet1=CURRENT_TIMESTAMP; */

  $remarks=$_POST['remarks'];
  $status1='gone';

//Database connection 
include('connection.php');
$query=mysqli_query($conn,"Select * from Journal_History");
while($row=mysqli_fetch_assoc($query)){
  $journalName_dup=$row['JournalName'];
  $articleid_dup=$row['ArticleID'];
  if($articleID===$articleid_dup){
    echo('<script>alert("Duplicate records can not Insert")</script>');
    return 0;
}
}


  if(isset($_POST['submit']) ){
  if($conn){
    $sql="INSERT INTO Journal_History(JournalName,ArticleID,Time,Remarks) VALUES('$journalName','$articleID',CURRENT_TIMESTAMP,'$remarks')";
    if(mysqli_query($conn,$sql)){
    echo('<script>alert("'.$journalName." ".$articleID.' Record inserted Successfully! ...")</script>');
  // header('Location: index.php'); 
    }
  }

  else{
    echo " It occurs error".mysqli_error($conn);
  }
  }
mysqli_close($conn);
/*echo"<script src='hindawi.js'>";
echo "clear_val();";
echo "</script>"; */
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <script src="js/index.js"></script>
  <title>Hindawi_Beta</title>
  
</head> 
<body>
	<h1>Hindawi Beta</h1>
	<div id="form_wrapper">
	  <h3 id="article_info">Article Information</h3> <br/>
 <form action ="" method="POST">
 <select name ="journal_name" id="journal_name">
   <option value="AORTH">AORTH</option>
   <option value="ARE">ARE</option>
   <option value="AV">AV</option>
   <option value="BCA">BCA</option>
   <option value="CIN">CIN</option>
   <option value="CMMI">CMMI</option>
   <option value="COMPLEXITY">COMPLEXITY</option>
   <option value="DDNS">DDNS</option>
   <option value="ECAM">ECAM</option>
   <option value="IJN">IJN</option>
   <option value="IJA">IJA</option>
   <option value="IJAC">IJAC</option>
   <option value="JTM">JTM</option>
   <option value="JMATH">JMATH</option>
   <option value="JFQ">JFQ</option>
   <option value="MIS">MIS</option>
   <option value="MISY">MISY</option>
   <option value="MPE">MPE</option>
   <option value="ITEES">ITEES</option>
   <option value="SCN">SCN</option>
   <option value="SV">SV</option>
</select>
<input type="text" name="articleID" id="articleID" placeholder="Article ID" required>
<br/><br/>
<div id="status_wrapper">
<!--<input type="radio" name="status" id="status1" value="WIP" required="">WIP
<input type="radio" name="status" id="status2" value="Done" required="">Done
<input type="radio" name="status" id="status3" value="Held" required="">Held


-->
<div class="remark_wrap"><textarea rows="8"  cols="50" name="remarks" id="remarks"></textarea></div>
</div>
<div id="dbLink"><a href="customDB.php">Login to Maintanance</a>
</div>
<br/>
<input type="submit" name="submit" id="submit" value="Submit" onclick="getTime(); " />
	</form>
	
</div>
	 
	
	<style>
	#remarks{
	  	width:200px;
	    height:60px;
	    padding:30px 0 30px 0;
	    background-color:;
	    align-items: center;
	    justify-content: center;
	    border:none;
	    outline:none;
	    border-radius: 5px;
	    position:relative;
	    display:float;
	    margin:0 auto; 
	}
	  body{
	    background-image: linear-gradient(to left bottom, #08865d,#046478);
	    background-attachment: fixed;
	    background-repeat: no-repeat;
	   /* background-color: #334d4c; */
	  }
	  h1{
	    color:#a9ff50;
	    text-align:center;
	    text-shadow: 1px 1px 2px rgba(0,0,0,.5);
	  }
	  #article_info{
	    color:#e9f1f4;
	    text-align:center;
	    align-items:center;
	    padding:10px;
	    margin:0 auto; 
	  }
	  #article_info::before{
	    content: '';
	    position:absolute;
	    border-radius:10px;
	    width:190px;
	    height:3px;
	    margin: 18px 0 0 -2px;
	    background-image:linear-gradient(to right bottom,#76ff00,#edfd3b);
	    align-items: center;
	    justify-items: center;
	    
	    transition: transform 0.5s ease;
	    animation: anim 5s linear 1;
	  }
	  @keyframes anim{
	  0%{
	    transform-origin: 0%;
	    transform: scale(0,1);
	    border-radius: 0px;
	  }
	  100%{
	    transform-origin: 100%;
	    transform: scale(1,1);
	    border-radius: 10px;
	  }
	  }
	  #form_wrapper{
	    width:82%;
	    height:380px;
	    margin:0 auto; 
	    background-color: #0d0d0d8a;
	    display:block;
	    flex-wrap: wrap;
	    justify-content: center;
	    border-radius:10px;
	    padding:10px;
	    border:1px solid #dbff47;
	  }
	  #journal_name{
	    padding:10px;
	    width:150px;
	    height:40px;
	    border:;
	    color:#f1f1f1;
	    background-color: transparent;
	    border-radius: 10px;
	    display:flex;
	    position:absolute;
	  }
	  #articleID{
	    padding:10px;
	    width:100px;
	    height:20px;
	    border:none;
	    border-radius:5px;
	    display:flex;
	    position:absolute;
	    left:55%;
	  }
	  #status_wrapper{
	    width:200px;
	    height:20px;
	    padding:30px 0 30px 0;
	    background-color:;
	    align-items: center;
	    justify-content: center;
	    position:relative;
	    display:float;
	    margin:0 auto; 
	    color:#e8f1f3;
	  }
	  #dbLink{
	    width:200px;
	    height:40px;
	    margin-top:90px;
	    
	    position:relative;
	    background-color:;
	    align-items: center;
	    align-content: center;
	    justify-content: center;
	    margin:0 auto;
	    transform:translateY(90px);
	  }
	  a{
	    color:#1bd8d7;
	    justify-content: center;
	    align-content: center;
	    margin:0 auto; 
	    display:flex;
	  }
	  
	  #submit{
	    padding:10px;
	    width:120px;
	    align-items: center;
	    margin:0 auto; 
	    display:flex;
	    position:relative;
	    justify-content: center;
	    border-radius:5px;
	    background-color:#c70d5d;
	    font-size: 14px;
	    color:#fff; 
	    border:none;
	    outline: none;
	    transform:translateY(60px);
	    transition:transform .3s ease; 
	  }
	  #submit:hover{
	    transform:scale(1.1);
	  }
	</style>
</body>
</html>