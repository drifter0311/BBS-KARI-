import sys
import sqlite3

room_id = sys.argv[1]
message = sys.argv[2]

conn = sqlite3.connect('database/your_database.db')
cursor = conn.cursor()

cursor.execute("INSERT INTO messages (room_id, message) VALUES (?, ?)", (room_id, message))
conn.commit()

conn.close()
