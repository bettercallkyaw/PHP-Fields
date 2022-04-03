<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP GET method</title>
</head>
<body>
<?php
  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      echo '<h1>'.$name.'</h1>'.'<br>';
      echo '<h2>'.$email.'</h2>';
  }
?>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <br><br>
    <label for="inputEmail">Email:</label>
    <input type="email" name="email" id="inputEmail">
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>