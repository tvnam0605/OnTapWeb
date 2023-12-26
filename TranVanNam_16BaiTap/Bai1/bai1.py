from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    page = request.args.get('page', default=1, type=int)
    return render_template('index.html', page=page)

if __name__ == '__main__':
    app.run(debug=True)
