<?php

// http://phpspot.org/blog/archives/2007/03/phphttppearhttp.html

function http_req_test ($url)
{
	$option = array( "timeout" => "10",  "allowRedirects" => true, "maxRedirects" => 3);
	$http = new HTTP_Request($url, $option);
	$http->addHeader("User-Agent", "SelfAliveTester/0.0.1");
	$response = $http->sendRequest();
	if (!PEAR::isError($response)) {
		$ret1 = $http->getResponseCode();// ResponseCode(200等)を取得 
		$ret2 = $http->getResponseHeader();// ResponseHeader(レスポンスヘッダ)を取得 
		$ret3 = $http->getResponseBody();// ResponseBody(レスポンステキスト)を取得 
		$ret4 = $http->getResponseCookies();// クッキーを取得 
		
		if ($ret1 == 200)
			return True;
	}
	return False;
}

$url = "http://127.0.0.1/";
if (http_req_test($url))
{
	// ok
}
else
{
	foreach(array('root@localhost') in $to)
	{
		mb_send_mail($to, "down report", "host ${url} is down. check.");
	}
}


