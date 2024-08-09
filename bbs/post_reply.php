<?php
$parent_message_id = $_POST['parent_message_id'];
$reply_message = $_POST['reply_message'];

shell_exec("python3 python_scripts/post_reply.py " . escapeshellarg($parent_message_id) . " " . escapeshellarg($reply_message));

header("Location: room.php?room_id=" . urlencode($_POST['room_id']));
exit;
?>
