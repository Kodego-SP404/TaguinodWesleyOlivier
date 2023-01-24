<?php
session_start();

if(isset($_POST['submit'])){
    
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];

    
    // $name = filter_var($_POST['name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $age = filter_var($_POST['age'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($username == 'ryan' && $password == 'password') {
        $_SESSION['username'] = $username;

        header('Location: /kodego/extras/dashboard.php');
    } else {
        echo '<p>Username or password is incorrect.</p>';
    }

}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
  <label for="name">Username:</label>
  <input type="text" id="name" name="username">
</div>
<br>
<div>
  <label for="password">Password:</label>
  <input type="text" id="password" name="password">
</div>
<br><br>
  <input type="submit" name="submit" value="Submit">
</form>


