 <?php
  

function send_LINE($msg){
 $access_token = 'M3XbRV8M5YpZNX4K8OXQQeukfq5QwZF+uXoSnfhBw8//TI+DUpXD2bVJrBCMDKitZMCbE4VudKyj9OSN+mioWdgDLOJP+mrdyIUjp4rqkz/Uq/ScKwTV/lF5LJQ1RLvpPhavShJRtePSXRtJczFZZAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U62b0d2baf670990f7d92a34b07b42b85',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
