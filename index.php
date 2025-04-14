<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try{
            $userName = $_POST['user-name'];
            $phoneNumber = $_POST['phone-number'];
            $messageSubject = $_POST['message-subject'];
            $text = $_POST['text'];
            $wish = $_POST['wish'];


        } catch (\Throwable $th){
            $userName = "ERROR IN MESSAGE";
            $phoneNumber = "ERROR IN MESSAGE";
            $messageSubject = "ERROR IN MESSAGE";
            $text = "ERROR IN MESSAGE";
            $wish = "ERROR IN MESSAGE";
        }

        $token = "7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k"; //token from bot father
        $chat_id = 5502242989; // number of active chat from api.telegram.org/bot7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k/getUpdates


        $userName = urlencode("$userName");
        $phoneNumber = urlencode("$phoneNumber");
        $messageSubject = urlencode("$messageSubject");
        $text = urlencode("$text");
        $wish = urlencode("$wish");
        //echo($textMessage)
        $urlQuerly = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&user-name= " . $userName . "   &phone-number= " . $phoneNumber . "   &message-subject= " . $messageSubject . "   &text= " . $text . "  &wish= " . $wish;
        $result = file_get_contents($urlQuerly);
    ?>
</body>
</html>