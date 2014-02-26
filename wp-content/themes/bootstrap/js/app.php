<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
		
		//$userid = "User-ID-Goes-Here";
		//$accessToken = "Token-Goes-Here";

		$clientID = "f2d10c6afbb445019e81be0092a41e44";
		$tag ="cfcnor";
	
		function fetchData($url){
		     $ch = curl_init();
		     curl_setopt($ch, CURLOPT_URL, $url);
		     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		     $result = curl_exec($ch);
		     curl_close($ch); 
		     return $result;
		}

		if(!empty($_POST['nextURL'])){
				$result = fetchData($_POST['nextURL']);	
		}

		else{
			$result = fetchData("https://api.instagram.com/v1/tags/" . $tag . "/media/recent?client_id=" . $clientID . "&callback=?&count=-1");

		}

		$approvedArray = array();

		$bannedImages = array(
			'636998081142698044_288196899',
			'621679148610742017_421438448',
			'617507003376815917_265531490',
			'576029901707532609_218009597'
		);

		

		$result = json_decode($result);
		
		if(isset($result->data)){
			foreach ($result->data as $data) {
				if (!in_array($data->id, $bannedImages)){
					$approvedArray[$data->id] = $data;
				}
			}
		}


		if(isset($result->pagination->next_url)){
			 $nextURL = $result->pagination->next_url;
		}
		else{
			$nextURL = false;
		}
		$response = array(
			'next_url' => $nextURL,
			'data' => $approvedArray,
		);

		echo json_encode($response);


?>


