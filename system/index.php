<?php function sendMessage($messaggio) {
  $chatID = '552256609';$token = '5046614125:AAFsFuWHZb5u6KEwvNaC82seKFOKG4TAbnk';
  $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
  $url = $url . "&text=" . urlencode($messaggio);
  $ch = curl_init();
  $optArray = array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true
  );
  curl_setopt_array($ch, $optArray);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
  }
  sendMessage($yagmail);
