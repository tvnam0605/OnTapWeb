from flask import Flask, redirect, render_template, url_for

app = Flask(__name__)


@app.route('/')

def hello_world():
    return render_template('index.html', content ="Trần Văn Nam!", 
                           cars=["Merc","Vin","BMW"])


if __name__=="__main__":
    app.run(debug=True)