<?php
require(dirname(__FILE__).'/../vendor/autoload.php');

  $pusher = new Pusher(
    '40bc9567f9209184ec96',
    '0415888f037fdac2950a',
    '250323'
  );

  $data['nama'] = $_POST['nama'];
  $data['message'] = $_POST['notif'];
  $pusher->trigger('asdan_test', 'my_event', $data);

  header('location:http://localhost:8000/push_pusher.php');
?>
