<?php
include("config.php");

if(isset($_POST['request'])){
    $pname = $_POST['pname'];
    $phone = $_POST['phone'];
    $blood = $_POST['blood'];
    $hospital = $_POST['hospital'];
    $msg = $_POST['message'] ?? '';

    mysqli_query($conn,
        "INSERT INTO requests(patient_name,phone,blood,hospital,message)
         VALUES('$pname','$phone','$blood','$hospital','$msg')");
}
?>

<div class="box">
<h3>Request for Blood</h3>

<form method="POST">
<input name="pname" placeholder="Patient Name" required>
<input name="phone" placeholder="Contact Phone" required>

<select name="blood" required>
<option value="">Required Blood</option>
<option>A+</option><option>A-</option>
<option>B+</option><option>B-</option>
<option>O+</option><option>O-</option>
<option>AB+</option><option>AB-</option>
</select>

<input name="hospital" placeholder="Hospital Name" required>
<textarea name="message" placeholder="Emergency message"></textarea>

<button name="request">Request Blood</button>
</form>
</div>
