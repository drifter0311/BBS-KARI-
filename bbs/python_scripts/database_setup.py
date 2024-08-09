import sqlite3

conn = sqlite3.connect('database/your_database.db')
cursor = conn.cursor()

# メッセージテーブルの作成
cursor.execute('''
CREATE TABLE IF NOT EXISTS messages (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    room_id INTEGER,
    message TEXT
)
''')

# 返信テーブルの作成
cursor.execute('''
CREATE TABLE IF NOT EXISTS replies (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    parent_message_id INTEGER,
    reply_message TEXT,
    FOREIGN KEY (parent_message_id) REFERENCES messages(id)
)
''')

conn.commit()
conn.close()
