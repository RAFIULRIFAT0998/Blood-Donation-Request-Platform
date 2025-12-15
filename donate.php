<?php
include("../config.php");

if(isset($_POST['donate'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $blood = $_POST['blood'];
    $msg = $_POST['message'];

    mysqli_query($conn,
     "INSERT INTO donors(name,phone,blood,message)
      VALUES('$name','$phone','$blood','$msg')");
}
?>

<div class="box">
<h3>Become a Blood Donor</h3>
<form method="POST">
<input name="name" placeholder="Your Name" required>
<input name="phone" placeholder="Phone Number" required>

<select name="blood" required>
<option value="">Select Blood Group</option>
<option>A+</option><option>A-</option>
<option>B+</option><option>B-</option>
<option>O+</option><option>O-</option>
<option>AB+</option><option>AB-</option>
</select>

<textarea name="message" placeholder="Optional message"></textarea>
<button name="donate">Donate Blood</button>
</form>
</div>
