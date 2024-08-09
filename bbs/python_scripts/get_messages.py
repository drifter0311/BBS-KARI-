import sys
import sqlite3
import json

room_id = sys.argv[1]

conn = sqlite3.connect('database/your_database.db')
cursor = conn.cursor()

cursor.execute("SELECT id, message FROM messages WHERE room_id = ?", (room_id,))
messages = cursor.fetchall()

result = [{"id": row[0], "message": row[1]} for row in messages]

print(json.dumps(result))

conn.close()
