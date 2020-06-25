<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SendTelegram
 *
 * @author user76
 */
class SendTelegram {
    static public function sendToBot()
    {

        if(isset($_POST['submit']))
        {

define ('url',"https://api.telegram.org/bot1060359743:AAFdXgKq8i-ueAtrLAo4f8xzK0LQ-hAaTbY/");
define ('ur',"https://api.telegram.org/bot1132344237:AAGoQWoWrTLmqirhydZuucdF4YsvUraQAXo/");

$name = 'Hi!!! Call me please
as soon as possible i am your money!!!';
 $mes = $_POST['phone'];
$chat_id = '455825469';
$chat_i = '771086876';

$message = urlencode("Count:".$name."\n Phone: ".$mes);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
file_get_contents(ur."sendmessage?text=".$message."&chat_id=".$chat_i."&parse_mode=HTML");
        }
    }
}

