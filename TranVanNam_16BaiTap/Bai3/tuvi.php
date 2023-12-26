<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>PHP</title>
 <style>
 * {
  margin: 0;
  padding: 0;
}
.content {
  width: 600px;
  height: 350px;
  margin: 20px auto;
  border: 1px solid green;
}
h1 {
  text-align: center;
  padding: 10px 0;
  color: red;
}
label {
  display: inline-block;
  width: 100px;
  text-align: right;
}
label,
input {
  padding: 5px;
  margin: 10px 0;
  font-size: 16px;
  font-weight: bold;
}
.result {
  width: 400px;
  height: 100px;
  margin: 0 auto;
}
.image {
  margin-left: 20px;
  margin-top: 20px;
  border-radius: 100%;
  width: 50px;
  height: 50px;
  overflow: hidden;
  display: inline-block;
  float: left;
}
.text {
  padding-top: 40px;
  margin-left: 80px;
  width: 300px;
  height: 100%;
  font-size: 20px;
  font-weight: bold;
  color: red;
  font-style: italic;
  display: block;
  height: 100px;
  box-sizing: border-box;
}
</style>
</head>
<body>
<?php
  $day = '';
  $month = '';
  $image = '';
  $name = '';
  $time = '';
  $flagShow = true;
  $result = '';
  // nếu submit không là nút Xóa
  if (isset($_POST['typeSubmit']) && $_POST['typeSubmit'] != 'Xóa') {
    // nếu các ô nhập có dữ liệu
    if (isset($_POST['day']) && isset($_POST['month'])) {
      $day = $_POST['day'];
      $month = $_POST['month'];
    // hai ô ngày tháng là hai số
      if (is_numeric($day) && is_numeric($month)) {
        $flagShow = true;
        switch($month) {
            case '1':
                $image = '';
                $sign = 'Ma kết';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 19) { $image = 'capricorn'; $name = 'Ma kết'; $time = '23/12 - 19/01'; }
                if ($day >= 20) { $image = 'aquarius'; $name = 'Bảo bình'; $time = '20/01 - 19/02'; }
                break;
            case '2':
                $image = 'D:\TranVanNam_16BaiTap\Bai3\capricorn.jpg';
                $sign = 'Bảo bình';
                if ($day < 1 || $day > 29) { $flagShow = false; break; }
                if ($day <= 19) { $image = 'aquarius'; $name = 'Bảo bình'; $time = '20/01 - 19/02'; }
                if ($day >= 20) { $image = 'pisces'; $name = 'Song ngư'; $time = '20/02 - 21/03'; }
                break;
            case '3':
                $image = 'songngu.png';
                $sign = 'Song ngư';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 20) { $image = 'pisces'; $name = 'Song ngư'; $time = '20/02 - 21/03'; }
                if ($day >= 21) { $image = 'aries'; $name = 'Bạch Dương'; $time = '21/03 - 19/04'; }
                break;
            case '4':
                $image = 'bachduong.png';
                $sign = 'Bạch Dương';
                if ($day < 1 || $day > 30) { $flagShow = false; break; }
                if ($day <= 19) { $image = 'aries'; $name = 'Bạch Dương'; $time = '21/03 - 19/04'; }
                if ($day >= 20) { $image = 'taurus'; $name = 'Kim Ngưu'; $time = '20/04 - 20/05'; }
                break;
            case '5':
                $image = 'kimnguu.png';
                $sign = 'Kim Ngưu ';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 20) { $image = 'taurus'; $name = 'Kim Ngưu'; $time = '20/04 - 20/05'; }
                if ($day >= 21) { $image = 'gemini'; $name = 'Song Tử'; $time = '21/05 - 20/06'; }
                break;
            case '6':
                $image = 'gemini.png';
                $sign = 'Song Tử';
                if ($day < 1 || $day > 30) { $flagShow = false; break; }
                if ($day <= 20) { $image = 'gemini'; $name = 'Song Tử'; $time = '21/05 - 20/06'; }
                if ($day >= 21) { $image = 'cancer'; $name = 'Cự Giải'; $time = '21/06 - 22/07'; }
                break;
            case '7':
                $image = 'cugiai.png';
                $sign = 'Cự giải';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 22) { $image = 'cancer'; $name = 'Cự Giải'; $time = '21/06 - 22/07'; }
                if ($day >= 23) { $image = 'leo'; $name = 'Sư Tử'; $time = '23/07 - 22/08'; }
                break;
            case '8':
                $image = 'leo.png';
                $sign = 'Sư Tử';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 22) { $image = 'leo'; $name = 'Sư Tử'; $time = '23/07 - 22/08'; }
                if ($day >= 23) { $image = 'virgo'; $name = 'Xử Nữ'; $time = '23/08 - 22/09'; }
                break;
            case '9':
                $image = 'xunu.png';
                $sign = 'Xử nữ';
                if ($day < 1 || $day > 30) { $flagShow = false; break; }
                if ($day <= 22) { $image = 'virgo'; $name = 'Xử Nữ'; $time = '23/08 - 22/09'; }
                if ($day >= 23) { $image = 'libra'; $name = 'Thiên Bình'; $time = '23/09 - 22/10'; }
                break;
            case '10':
                $image = 'thienbinh.png';
                $sign = 'Thiên bình';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 22) { $image = 'libra'; $name = 'Thiên Bình'; $time = '23/09 - 22/10'; }
                if ($day >= 23) { $image = 'scorpio'; $name = 'Bò Cạp'; $time = '23/10 - 21/11'; }
                break;
            case '11':
                $image = 'thietyet.png';
                $sign = 'Thiên yết';
                if ($day < 1 || $day > 30) { $flagShow = false; break; }
                if ($day <= 21) { $image = 'scorpio'; $name = 'Bò Cạp'; $time = '23/10 - 21/11'; }
                if ($day >= 22) { $image = 'sagittarius'; $name = 'Nhân Mã'; $time = '22/11 - 21/12'; }
                break;
            case '12':
                $image = 'nhanma.png';
                $sign = 'Nhân mã';
                if ($day < 1 || $day > 31) { $flagShow = false; break; }
                if ($day <= 21) { $image = 'sagittarius'; $name = 'Nhân Mã'; $time = '22/11 - 21/12'; }
                if ($day >= 22) { $image = 'capricorn'; $name = 'Ma kết'; $time = '23/12 - 19/01'; }
                break;
            default:
                $flagShow = false;
                break;
        }
      }
        
      } else {
        $flagShow = false;
      }
    }

?>
  <div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="#" method="post">
      <label>Ngày sinh</label>
      <input type="text" name="day" value="<?php echo $day; ?>"><br>
      <label>Tháng sinh</label>
      <input type="text" name="month" value="<?php echo $month; ?>"><br>
      <label></label>
      <input type="submit" name="typeSubmit" value="Lấy chòm sao">
      <input type="submit" name="typeSubmit" value="Xóa">
    </form>
    <p>Tháng <?php echo $month; ?> tương ứng với chòm sao: <?php echo $sign; ?></p>

<img src="<?php echo $image; ?>" alt="<?php echo $sign; ?>">

  </div>
</body>

</html>