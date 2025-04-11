<?php
// Requests Type = 0 for GET
// Requests Type = 1 for POST
function requests($url, $ua, $type=0, $params="") {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	if($type == 1) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	}
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	$res = curl_exec($ch);
	curl_close($ch);
	return $res;
}
$ua = "Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36";
system("clear");
$red = "\033[1;31m";
$yellow = "\033[1;33m";
$white = "\033[1;37m";
$normal = "\033[0m";
echo "\n$yellow
$yellow ====================================================== $normal
$yellow 1:Pemerintah yang kejam, dengan kekuasaan yang besar $normal
$yellow 2:Menggunakan kekuasaan, untuk menindas dan menganiaya $normal
$yellow 3:Mereka tidak peduli, dengan penderitaan rakyat $normal
$yellow 4:Mereka hanya ingin, mempertahankan kekuasaan dan kekayaan $normal
$yellow 5:nomor WhatsApp saya:+6283850540570 $normal
$yellow 6:akun Instagram saya:Rizky.0_o $normal
$yellow ====================================================== $normal";
echo "\n     $yellow:::$white 1:dibuat pada tanggal:2025 Sab.12.Apr $normal";
echo "\n     $yellow:::$white 1:pembuat script Rizky😁 $normal";
echo "\n     $yellow:::$white script ini jangan disalahgunakan $normal";
echo $yellow."\n     [#]$white masukkan link website target$red(".$white."ex: https://):$normal ";
$webURL = trim(fgets(STDIN));
if ( $webURL != NULL ) {
	// Whois Lookup
	echo "\n\n$yellow:::$white Whois Lookup$yellow:$normal\n";
	$whoisURL = "http://api.hackertarget.com/whois/?q=".$webURL;
	$whoisDATA = file_get_contents($whoisURL);
	echo $whoisDATA;
	// DNS Lookup
	echo "\n\n$yellow:::$white DNS Lookup$yellow:$normal\n";
	$dnsURL = "http://api.hackertarget.com/dnslookup/?q=".$webURL;
	$dnsDATA = file_get_contents($dnsURL);
	echo $dnsDATA;
	// Zone Transfer
	echo "\n\n$yellow:::$white Zone Transfer$yellow:$normal\n";
	$zonetransURL = "http://api.hackertarget.com/zonetransfer/?q=".$webURL;
	$zonetransDATA = file_get_contents($zonetransURL);
	echo $zonetransDATA;
	// Traceroute
	echo "\n\n$yellow:::$white Traceroute$yellow:$normal\n";
	$traceURL = "https://api.hackertarget.com/mtr/?q=".$webURL;
	$traceDATA = file_get_contents($traceURL);
	echo $traceDATA;
	// Port Scan
	echo "\n\n$yellow:::$white PORT Scan$yellow:$normal\n";
	$pscanURL = "http://api.hackertarget.com/nmap/?q=".$webURL;
	$pscanDATA = file_get_contents($pscanURL);
	echo $pscanDATA;
	// Link Grabber
	echo "\n\n$yellow:::$white Link Grabber$yellow:$normal\n";
	$linkgrabURL = "https://api.hackertarget.com/pagelinks/?q=http://".$webURL;
	$linkgrabDATA = file_get_contents($linkgrabURL);
	echo $linkgrabDATA;
	// IPGeolocation
	echo "\n\n$yellow:::$white IPGeolocation$yellow:$normal\n";
	$geoipDATA = requests("https://tools.keycdn.com/geo.json?host=".$webURL, "keycdn-tools:https://".$webURL);
	echo $geoipDATA;
	// HTTP Header Grabber
	echo "\n\n$yellow:::$white HTTP Header Grabber$yellow:$normal\n";
	$httphgrabURL = "http://api.hackertarget.com/httpheaders/?q=".$webURL;
	$httphgrabDATA = file_get_contents($httphgrabURL);
	echo $httphgrabDATA;
	// Certificate Search
	echo "\n\n$yellow:::$white Certificate Search$yellow:$normal\n";
	$crtshData = requests("https://crt.sh/?q=".$webURL."&output=json", $ua);
	echo $crtshData;
	// Reverse IP Domain Check
	echo "\n\n$yellow:::$white Reverse IP Domain Check$yellow:$normal\n";
	$ygsrevIPData = requests("https://domains.yougetsignal.com/domains.php", $ua, 1, "remoteAddress=".$webURL."&key=");
	echo $ygsrevIPData;
	// BrowserSpy Report
	echo "\n\n$yellow:::$white BrowserSpy$yellow:$normal\n";
	$browserspyData = requests("http://browserspy.dk/webserver.php", $ua, 1, "server=".$webURL);
	echo $browserspyData;
	echo "\n$yellow:::$white Thanks for Using our Program\n$yellow:::$white Have a Nice Day, Bye Bye$normal\n";
}
else {
	echo "\n$red:::$white Please, Enter the Website to Scan$normal\n";
}
?>
