<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="/CSS/registration.css">
  </head>
  <body>

    <div class="mainframe" align="center">
      <h2>Student Registration Form</h2>
<form class="" action="datainput.php" method="post"   >
<!--
  <label for="FName">First Name</label><br>
  <input type="text" name="FName" placeholder="First Name" class="inputfield" required><br>
  <label for="LName">Last Name</label><br>
  <input type="text" name="LName" placeholder="Last Name" class="inputfield" required><br>
  <label for="Email">Email</label><br>
  <input type="email" name="email" placeholder="Email" class="inputfield" required><br>
  <label for="Password">Password</label><br>
  <input type="password" name="Password" placeholder="Password" class="inputfield" required><br>
<label for="conformpassword">Conform Password</label><br>
<input type="password" name="Conform" placeholder="Conform Password" class="inputfield" required><br>
<label for="Mobile No:">Mobile No</label><br>
<input type="number" name="Mobile No" placeholder="Mobile" class="inputfield" required><br>

-->
  <!--  Form using Table -->
<table>
  <tr>
    <td>First Name:</td>
      <td><input type="text" name="FName" placeholder="First Name" class="inputfield"></td>
    </tr>
    <tr>
    </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="LName" placeholder="Last Name" class="inputfield"></td>
        <br>
      </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" placeholder="Email" class="inputfield"></td>
  </tr>
  <tr>
    <td>Mobile No:</td>
    <td><input type="number" name="mob" placeholder="Mobile" class="inputfield"></td>
  </tr>
  <tr>
  <td>Password:</td>
  <td><input type="password" name="pass" placeholder="Password" class="inputfield"></td>
  </tr>
  <tr>
    <td>Conform Password:</td>
    <td><input type="password" name="Conform" placeholder="Conform_Password" class="inputfield"></td>
  </tr>
</table>

  <input type="submit" name="submit" value="Submit" style="align:center" >
</form>

</div>
  </body>
</html>
