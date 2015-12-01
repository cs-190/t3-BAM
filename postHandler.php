<?php
putData();

function putData(){
  $dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=bmp17;';
  $username = 'bmp17';
  $password = 'UtQQUq7qx7SA';
  $name = $_POST["title"];
  $description = $_POST["desc"];
  $price= $_POST["price"];
  $gender= $_POST["sex"];
  $email=$_POST["email"];

  try {
      $conn = new PDO($dsn, $username, $password);
      $img = imageGetter();

      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO Items (name, description, price, gender,email, image_name)
      VALUES ('$name', '$description','$price','$gender','$email', '$img')";
      $conn->exec($sql);
      echo "New record created successfully";
      }
  catch(PDOException $e){
      echo $sql . "<br>" . $e->getMessage();
  }

}


function imageGetter(){
  if(!isset($_FILES['image'])){
    echo "fuck";
  }
  echo $_FILES['image'];
   if(isset($_FILES['image'])){
     $errors= array();
     $file_name = $_FILES['image']['name'];
     $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
     $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
     }

     if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
 	}

     if(empty($errors)==true){
        $val = move_uploaded_file($file_tmp,$file_name);
        echo $val;
        return $file_name;
     }
     else{
        print_r($errors);
     }
  }
}
