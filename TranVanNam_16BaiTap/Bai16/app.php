<?php
  $to = '2115239@dlu.edu.vn'; //tên hộp thư nhận email
  $subject = 'test mail';
  $message = 'content of email';
  $header = 'from:anhmk864@gmail.com';

  if (mail($to, $subject, $message, $header)) {
    echo 'thanh cong';
  } else {
    echo 'that bai';
  }
?>