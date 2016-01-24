<?php
require_once("chat.class.php");
$chat = new Chat();
$id = 0;

if(isset($_POST['json_sendMessage']))
{
  	$json_decode = json_decode($_POST['json_sendMessage']);
	$name = $json_decode->name;
	$message = $json_decode->message;
	$id = $json_decode->id;
  
  if ($name != '' && $message != '') 
  {  
    $chat->postMessage($name, $message); 
  }
}
else if(isset($_POST['json_requestNewMessages']))
{
	$chat->CreateTable();
 	$json_decode = json_decode($_POST['json_requestNewMessages']);
	$id = $json_decode->id;  
}
if(ob_get_length())
ob_clean();
header('Cache-Control: no-cache, must-revalidate'); 
header('Pragma: no-cache');
header('Content-Type: text/xml');
echo $chat->retrieveNewMessages($id);
?>
