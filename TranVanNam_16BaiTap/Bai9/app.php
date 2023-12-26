<?php
// Khởi tạo một kết nối cURL
$ch = curl_init();

// Đặt URL của trang web bạn muốn lấy dữ liệu
$url = 'https://www.thegioididong.com/';

// Cấu hình cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Thực hiện yêu cầu và lấy dữ liệu HTML
$html_data = curl_exec($ch);

// Đóng kết nối cURL
curl_close($ch);

// Biểu thức chính quy để trích xuất tỷ giá (ví dụ)
$exchange_rate_pattern = '/<span class="rate">(\d+\.\d+)<\/span> USD/';

// Tìm và lấy tỷ giá từ dữ liệu HTML
if (preg_match($exchange_rate_pattern, $html_data, $matches)) {
    $rate = $matches[1];
    echo "Exchange Rate: " . $rate . " USD";
} else {
    echo "Không tìm thấy tỷ giá.";
}
?>
