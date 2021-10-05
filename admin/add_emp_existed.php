<!DOCTYPE html>
<?php
include('../include/dbconn.php');
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: ../login');
}
$sqlUSER = "SELECT * from employee";
$queryUSER = mysqli_query($dbconn, $sqlUSER) or die("Error: " . mysqli_error($dbconn));
$rowUSER = mysqli_num_rows($queryUSER);
$rUSER = mysqli_fetch_assoc($queryUSER);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <title>Spidey Post | Employee Sign UP</title>
</head>
<body>
  <header id="header">
        <a href="#" class="logo">
            <img src="../Sources/Logo.png" alt="Logo">
            <h2><div>Spidey</div> Post</h2>
        </a>
        <ul class="navigation">
            <li><a href="../login/logout.php">Logout</a></li>
        </ul>
    </header>
    <div class="container">
      <div class="bar">
            <h1> Admin Dashboard</h1>
        </div>
        <div class="main">
            <div class="greetinguser">
                <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
                <b>Employee</b>
                <a href="../admin/add_emp.php">Add</a>
                <br><br>
                <b>User</b>
                <a href="view_user.php">View</a>
                <a href="update_view_user.php">Update</a>
                <a href="search_user.php">Search</a>
                <div class="track">
                    <b>Tracking</b>
                    <a href="view_tracking.php">View</a>
                    <a href="add_tracking.php">Add</a>
                    <a href="update_view_tracking.php">Update</a>
                </div>
                
            </div>
      </div>

        <h3>Employee Sign Up</h3>
        <div class="error">
          <h4>*Username Exist.</h4>
          <h4>*Please refill this form with different username</h4>
        </div>
        
        
        <fieldset>
        
        <form name="edit_user" method="post" action="db_add_emp.php" enctype="multipart/form-data">
        <table class="tableContent" width="80%" border="0" align="center">
              <tr>
                <td width="16%">Name</td>
                <td width="84%"><input type="text" name="name" size="50" value=""/></td>  
              </tr>  
              <tr> 
                <td width="16%">Gender</td>
                <td>
                <input name="gender" type="radio" value="1" />Men
                <input name="gender" type="radio" value="2" />Women
                </td>
              </tr>
              <tr>
                <td width="16%">Email</td>
                <td><input type="text" name="email" size="50" value=""/></td>
              </tr>
              <tr>
                <td width="16%">Phone No</td>
                <td><input type="text" name="phone" size="50" value=""/></td>
              </tr>
              <tr>
                <td width="16%">Address</td>
                <td><textarea name="address" cols="52" rows="3"></textarea></td>
              </tr>
              <tr>
                <td width="16%">Username</td>
                <td><input type="text" name="username" size="50" value="" /></td> 
              </tr>
              <tr>
                <td width="16%">Password</td>
                <td><input type="password" name="password" size="50" value="" /></td> 
              </tr>
              <tr>
              <tr> 
                <td colspan="2"><input type="hidden" name="level" value="2" />
              </tr>	  
              
              <tr> 
                <td align="right" colspan="2"><input type="submit" name="submit" value=" Save " />
                <input type="button" name="cancel" value=" Cancel " onclick="location.href='view_user.php'" /></td>
              </tr>
              
            </table>
        </form>
        
        </fieldset>
         
        </div>
</body>
</html>