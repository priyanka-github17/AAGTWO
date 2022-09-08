<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'ap2',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '04931eab1b71cbeed8e8',
    '4f8aaf8da4a2c760a99c',
    '1102032',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);
