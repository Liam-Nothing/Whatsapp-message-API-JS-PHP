<?php

    $data = array(["api", 60, 1]);
    $data = data_security($data_from_client, $data);

    if(empty($data["error"])){

        switch ($data["api"]) {

            //API Python script progress
			case "app_whtsp_get":
                require_once(dirname(__FILE__)."/../app_whatsapp_messager/app_whtsp_get.php");
				break;
			case "app_whtsp_update_content":
                require_once(dirname(__FILE__)."/../app_whatsapp_messager/app_whtsp_update_content.php");
				break;

            default:
                $return_data["id"] = 2;
                $return_data["type"] = "error";
                $return_data["message"] = "API doesnt exist";
        }
    }else{
		$return_data["id"] = 2;
		$return_data["type"] = "error";
		$return_data["message"] = "Client data error";
    }	