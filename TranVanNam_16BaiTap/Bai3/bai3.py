from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    day = ''
    month = ''
    image = ''
    name = ''
    time = ''
    flagShow = True
    result = ''

    if request.method == 'POST':
        if request.form['typeSubmit'] != 'Xóa':
            day = request.form['day']
            month = request.form['month']

            if day.isdigit() and month.isdigit():
                flagShow = True
                month = int(month)

                if month == 1:
                    if 1 <= int(day) <= 19:
                        image = 'capricorn.jpg'
                        name = 'Ma kết'
                        time = '23/12 - 19/01'
                    elif int(day) >= 20:
                        image = 'aquarius.jpg'
                        name = 'Bảo bình'
                        time = '20/01 - 19/02'
                elif month == 2:
                    if 1 <= int(day) <= 29:
                        if 1 <= int(day) <= 19:
                            image = 'aquarius.jpg'
                            name = 'Bảo bình'
                            time = '20/01 - 19/02'
                        elif int(day) >= 20:
                            image = 'pisces.jpg'
                            name = 'Song ngư'
                            time = '20/02 - 21/03'
                else:
                    flagShow = False
            else:
                flagShow = False

            if flagShow:
                result = {
                    'image': image,
                    'name': name,
                    'time': time,
                }
            else:
                result = 'Dữ liệu không hợp lệ'


    return render_template('index.html', day=day, month=month, result=result)

if __name__ == '__main__':
    app.run(debug=True)
