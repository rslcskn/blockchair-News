
<?php 
################  CRUL fonksiyonu ################
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

function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}

$siteAdresi = sayfayaBaglan("https://blockchair.com/tr/news");

$baslik = ara('class="news__block__item_title">', "</a>", $siteAdresi);
$newslink = ara('</a> <a href="', '" target="_blank"', $siteAdresi);
echo "Haber Adı: ".$baslik[0]."<br>";
echo "Haber Adı: ".$newslink[0]."<br>";

?>