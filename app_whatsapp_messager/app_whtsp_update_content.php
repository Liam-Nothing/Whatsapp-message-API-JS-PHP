<?php

    $data = array(["pass", 16, 16], ["message", 500, 0], ["receiver", 30, 0]);
    $data = data_security($data_from_client, $data);
    
    if(empty($data["error"])){
        $sqlr = $database->prepare("UPDATE app_whatsapp_messager SET message = :message, receiver = :receiver WHERE pass = :pass");
        $sqlr->bindParam(':message', $data["message"]);
        $sqlr->bindParam(':receiver', $data["receiver"]);
        $sqlr->bindParam(':pass', $data["pass"]);
        $sqlr->execute();

        if ($sqlr->rowCount()) {
			$return_data["id"] = 1;
			$return_data["type"] = "success";
			$return_data["message"] = "Updated";
        }else{
            $return_data["id"] = 2;
            $return_data["type"] = "error";
            $return_data["message"] = "Invalid code";
        }
    }else{
        $return_data["id"] = 2;
        $return_data["type"] = "error";
        $return_data["message"] = "Error";
    }