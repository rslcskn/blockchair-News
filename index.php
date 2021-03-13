function sayfayaBaglan($_URL){ 
	$useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; tr-TR; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13';
	$referer = 'http://www.google.com/'; 
	$ch = curl_init(); 
	$zaman = 0; 
		curl_setopt ($ch, CURLOPT_URL, $_URL); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $zaman); 
		curl_setopt ($ch, CURLOPT_REFERER, $referer); 
		curl_setopt ($ch, CURLOPT_USERAGENT, $useragent); 
	$rmx = curl_exec($ch); 
		curl_close($ch); 
		return $rmx; 
} 
