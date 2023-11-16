<?php 
$errorMsg = "";


if(isset($_POST['email']) || isset($_POST['senha'])) {

  if(strlen($_POST['email']) == 0) {
    $errorMsg = "<p class='text-danger'> Your email must not be empty.</p>";
  } else if (strlen($_POST['senha']) == 0) {
    $errorMsg = "<p class='text-danger'> Your password must not be empty.</p>";
  } else {
    
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Execution error: " . $mysqli->error);

    $qnt = $sql_query->$num_rows;

    if($qnt == 1) {
      $user = $sql_query->fetch_assoc();

      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['user'] = $user['id'];
      $_SESSION['name'] = $user['nome'];

      header("Location: index.php");

    } else {
      $errorMsg = "Login error! Incorrect email or password.";
    }
  }
  
}

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign-in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      <?=$errorMsg?>
      <div class="mb-3 row">
        <label for="email" name="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password">
        </div>
        </div>
        <div class="mb-3 row">
        <span>Don't have an account? <a href="#">Register now</a></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Login">
        </div>
        </form>
    </div>
  </div>
</div>
