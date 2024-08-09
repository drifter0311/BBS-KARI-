<div class="room">
    <h2><?php echo htmlspecialchars($room_name); ?></h2>
    <div class="messages">
        <?php foreach ($messages as $message): ?>
            <div class="message">
                <p><?php echo htmlspecialchars($message['message']); ?></p>
                <div class="replies">
                    <!-- 返信を表示する部分 -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <form action="post_message.php" method="post">
        <textarea name="message" placeholder="メッセージを入力"></textarea>
        <button type="submit">送信</button>
    </form>
</div>
