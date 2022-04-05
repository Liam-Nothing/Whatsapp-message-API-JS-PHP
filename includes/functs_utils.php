<?php

	function data_security($data_from_client, $arrays) {
		$array_return = array();
		foreach ($arrays as $array) {
			$variable_name = $array[0];
			$max_leght = $array[1];
			if(isset($array[2])){
				$min_leght = $array[2];
			}else{
				$min_leght = 3;
			}
			if (isset($data_from_client[$variable_name]) and strlen($data_from_client[$variable_name]) <= $max_leght and strlen($data_from_client[$variable_name]) >= $min_leght) {
				$array_return[$variable_name] = htmlspecialchars($data_from_client[$variable_name]);
			}else{
				$array_return["error"] = $variable_name;
			}
		}
		return $array_return;
	}