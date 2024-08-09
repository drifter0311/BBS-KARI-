<?php
$room_id = $_POST['room_id'];
$message = $_POST['message'];

shell_exec("python3 python_scripts/post_message.py " . escapeshellarg($room_id) . " " . escapeshellarg($message));

header("Location: room.php?room_id=" . urlencode($room_id));
exit;
?>
