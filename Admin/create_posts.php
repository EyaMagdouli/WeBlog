<!--- appel a la base -->
<?php require_once("../includes/connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
 body {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        background-image: url("img/1.jpg");
        background-attachment:fixed;
        background-repeat: no-repeat;
        background-size: cover;
}
form {border: 3px solid #f1f1f1;
    display: inline-block;}
input[type=text], input[type=date] ,input[type=submit]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  display: block;
  text-align:center;
}
.container {
  padding: 20px;
  align-items:center;
}
 </style>  
</head>
<body>
<!--- creation du formulaire d'article -->
<section id="ajout">
<div class="container">
      <div class="row">
          <div class="col-md-6">
            <form class="khalil" method="POST" action="">
                <h1> Add post :</h1>
                <p>Title:</p>
                <input type="text" name="title" placeholder="Post's title">
                <p>content: </p>
                <textarea name="body" rows="5" cols="40" placeholder="saisir votre article"></textarea><br>

                <input type="submit" value="ajouter" name="submit">
          <div class="col-md-6">
  
         <!--- insertion des informations in the data base-->
         <?php
        
  if(isset($_POST['submit'])){
      $title=$_POST['title'];
      $body=$_POST['body'];
      $query="INSERT INTO  posts (title, body) VALUES ('$title','$body')";
      $result=mysqli_query($connect,$query);
      if($result){
          echo "insertion valider";
    }else{
        echo "insertion non valider";
    }

} 


  ?>
  
      <div>

 
 
  
          </div>   
      </div>
  </div>
</form>



</body>
</html>