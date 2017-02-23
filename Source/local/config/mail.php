<?php
return [
'driver' => env('MAIL_DRIVER','smtp'),
'host'=> env('MAIL_HOST',''),
'port' => env('MAIL_PORT',''),
"from"=>array(
"address" =>"",
"name" =>"Soulmate"
 ),
'encryption' => env('MAIL_ENCRYPTION','tls'),
"username"=>"",
"password"=>"",
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,
];