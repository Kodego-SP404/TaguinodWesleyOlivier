<?php
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Ryan&age=40">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
</div>
<br>
<div>
  <label for="age">Age:</label>
  <input type="number" id="age" name="age">
</div>
<br><br>
  <input type="submit" name="submit" value="Submit">
</form>


<?php

if(isset($_GET['submit'])){
    echo $_GET['name'];
    echo $_GET['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Ryan&age=40">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<div>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
</div>
<br>
<div>
  <label for="age">Age:</label>
  <input type="number" id="age" name="age">
</div>
<br><br>
  <input type="submit" name="submit" value="Submit">
</form>