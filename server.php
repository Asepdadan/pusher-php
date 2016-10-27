<?php
  require('Pusher.php');

  $options = array(
    'encrypted' => true
  );
  $pusher = new Pusher(
    '40bc9567f9209184ec96',
    '0415888f037fdac2950a',
    '250323',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('asdan_test', 'my_event', $data);
?>
