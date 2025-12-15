<?php
include("config.php");
$d = mysqli_query($conn,"SELECT * FROM donors ORDER BY id DESC");
?>

<div class="box">
<h3>Available Blood Donors</h3>
<table>
<tr>
<th>Name</th><th>Phone</th><th>Blood</th><th>Message</th>
</tr>

<?php while($row = mysqli_fetch_assoc($d)){ ?>
<tr>
<td><?= htmlspecialchars($row['name']) ?></td>
<td><?= htmlspecialchars($row['phone']) ?></td>
<td class="badge"><?= htmlspecialchars($row['blood']) ?></td>
<td><?= htmlspecialchars($row['message']) ?></td>
</tr>
<?php } ?>

</table>
</div>

