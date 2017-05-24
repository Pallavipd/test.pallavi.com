<!DOCTYPE html>
<html>
<style>
body {
    background-image: url("avatar.jpeg");
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

</style>
<body>

<h2>Signup Form</h2>
  <div class="container">
<form action="/main" method="POST" style="border:1px solid #ccc">

    <label><b>email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label><b>repeat</b></label>
    <input type="password" placeholder="repeate" name="repeate" required>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

</form>
 
<table class="table table-bordered table-striped">
     <thead>
       <tr>
         <th>id</th>
         <th>email</th>
         <th>password</th>
         <th>repeate</th>
         </tr>
     </thead>

     <tbody>
      <?php
      foreach ($rows as $row) {
        echo '
        <tr>
         <td>'.$row->id .'</td>
         <td>'.$row->email .'</td>
         <td>'.$row->password .'</td>
         <td>'.$row->repeate.'</td>
        </tr>
       ';
     }
     ?>
   </tbody>
   </table>
    </div>

</body>
</html>
