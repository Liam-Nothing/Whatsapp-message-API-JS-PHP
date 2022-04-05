<?php

    $data = array(["pass", 16, 16]);
    $data = data_security($data_from_client, $data);
    
    if(empty($data["error"])){
        $sqlr = $database->prepare("SELECT message, last_wirte_date, reciver FROM app_whatsapp_messager WHERE pass = :pass");
        $sqlr->bindParam(':pass', $data["pass"]);
        $sqlr->execute();
        $sqlr_rows = $sqlr->fetchAll();

        if (!empty($sqlr_rows)) {
            $return_data["id"] = 1;
            $return_data["type"] = "success";
            $return_data["message"] = "Valid code";
            $return_data["content"] = $sqlr_rows;
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