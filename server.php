<?php
 // CREATE CONNECTION
$conn = mysqli_connect('localhost', 'root', '', 'registration');

// FETCH DATA
$sql = mysqli_query($conn, "SELECT * FROM details");
$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));
