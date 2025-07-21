from flask import Flask, render_template, send_from_directory
import os

app = Flask(__name__)
VIDEO_FOLDER = "videos"

@app.route("/")
def index():
    videos = [f for f in os.listdir(VIDEO_FOLDER) if f.endswith(".mp4")]
    return render_template("index.html", videos=videos)

@app.route("/videos/<filename>")
def video(filename):
    return send_from_directory(VIDEO_FOLDER, filename)

if __name__ == "__main__":
    app.run(debug=True)
