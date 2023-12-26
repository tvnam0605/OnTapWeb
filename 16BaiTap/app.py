from flask import Flask, redirect, url_for

app = Flask(__name__)


@app.route('/')

def hello_world():
    return "<h1>Văn Nam </h1>"

@app.route('/user/<name>')

def hello_user(name):
    if name == 'admin':
        return redirect(url_for('hello_admin'))
    return f"<h1> hello {name}!</h1>"

@app.route('/blog/<int:blog_id>')
def blog(blog_id):
    return f"<h1> hello {blog_id}!</h1>"
if __name__=="__main__":
    app.run()