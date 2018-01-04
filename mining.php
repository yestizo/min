<?php 
$address = "143avS6uWijuq48xggKwcEgqBwzogJcwYo";
$ch = curl_init();
curl_setopt_array($ch, array(
	CURLOPT_URL => 'https://www.thebestbitcoinfaucet.com/',
	CURLOPT_POST => 1,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_POSTFIELDS => "address=$address",
	CURLOPT_COOKIEFILE => "-",
	CURLOPT_COOKIEJAR => "-"
));
$res = curl_exec($ch);
if(strpos($res, "Invalid") > -1){
	echo "Invalid Address";
} else {
	curl_setopt_array($ch, array(
	CURLOPT_URL => 'https://www.thebestbitcoinfaucet.com/',
	CURLOPT_POST => 1,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_POSTFIELDS => "faucetclaim=$address",
	CURLOPT_COOKIEFILE => "-",
	CURLOPT_COOKIEJAR => "-"
));
curl_exec($ch);
echo "Success";
}

?>