<?php include 'templates/header.php'; ?>

<?php
$room_id = $_GET['room_id'];

// メッセージの取得
$messages = shell_exec("python3 python_scripts/get_messages.py " . escapeshellarg($room_id));
$messages = json_decode($messages, true);
?>

<h2>ルーム <?php echo htmlspecialchars($room_id); ?></h2>

<div>
    <?php foreach ($messages as $message): ?>
        <p><?php echo htmlspecialchars($message['message']); ?></p>
        <form action="post_reply.php" method="post">
            <input type="hidden" name="parent_message_id" value="<?php echo htmlspecialchars($message['id']); ?>">
            <textarea name="reply_message" placeholder="返信を入力"></textarea>
            <button type="submit">返信</button>
        </form>
    <?php endforeach; ?>
</div>

<form action="post_message.php" method="post">
    <input type="hidden" name="room_id" value="<?php echo htmlspecialchars($room_id); ?>">
    <textarea name="message" placeholder="メッセージを入力"></textarea>
    <button type="submit">送信</button>
</form>

<?php include 'templates/footer.php'; ?>
