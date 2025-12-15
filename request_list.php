<?php
include("config.php");
$r = mysqli_query($conn,"SELECT * FROM requests ORDER BY id DESC");
?>

<div class="box">
<h3>Blood Requests</h3>
<table>
<tr>
<th>Patient</th><th>Phone</th><th>Blood</th><th>Hospital</th><th>Message</th>
</tr>

<?php while($rq = mysqli_fetch_assoc($r)){ ?>
<tr>
<td><?= htmlspecialchars($rq['patient_name']) ?></td>
<td><?= htmlspecialchars($rq['phone']) ?></td>
<td class="badge"><?= htmlspecialchars($rq['blood']) ?></td>
<td><?= htmlspecialchars($rq['hospital']) ?></td>
<td><?= htmlspecialchars($rq['message']) ?></td>
</tr>
<?php } ?>
</table>
</div>
