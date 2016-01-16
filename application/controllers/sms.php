<?php
class CMSMS
{
  static public function buildMessageXml($recipient, $message) {
    $xml = new SimpleXMLElement('<MESSAGES/>');

    $authentication = $xml->addChild('AUTHENTICATION');
    $authentication->addChild('PRODUCTTOKEN', '3784af52-a3e6-47a7-bec1-fe9a3c1fdf2b');

    $msg = $xml->addChild('MSG');
    $msg->addChild('FROM', 'My company');
    $msg->addChild('TO', $recipient);
    $msg->addChild('BODY', $message);

    return $xml->asXML();
  }

  static public function sendMessage($recipient, $message) {
    $xml = self::buildMessageXml($recipient, $message);

    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL            => 'https://secure.cm.nl/smssgateway/cm/gateway.ashx',
        CURLOPT_HTTPHEADER     => array('Content-Type: application/xml'),
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $xml,
        CURLOPT_RETURNTRANSFER => true
      )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    return $response;
  }
}
?>
