<?php
header("Access-Control-Allow-Origin: *");
#header("Access-Control-Allow-Headers: access");
#header("Access-Control-Allow-Methods: POST,GET,PUT");
#header("Access-Control-Allow-Credentials: true");
#header('Content-Type: application/json');
$ch = curl_init();
$url="https://davinta.atlassian.net/secure/Dashboard.jspa";
$url2="https://davinta.atlassian.net/rest/api/2/search?filter=10871&jql=project%20in%20(ATEL%2C%20SYN%2C%20IDBI)%20%20AND%20(%20issuetype%20in%20(Change%2C%20Incident%2C%20%22Service%20Request%22)%20AND%20status%20in%20(Open%2C%20Pending)%20AND%20assignee%20in%20(EMPTY%2C%20Ravi.Prasad%2C%20Sudhansu.Swain%2C%20bpatra%2C%20mabraham%2C%20vbiradar%2C%20krao)%20AND%20Resolution%20in%20(Unresolved)%20or%20status%20in%20(%22Team%20Review%20for%20Change%22%2COpen%2C%22Awaiting%20implementation%22%2C%22Awaiting%20implementation%22%2C%22Awaiting%20CAB%20approval%22%2C%22Waiting%20for%20support%22))%20ORDER%20BY%20lastViewed%20DESC";
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_USERPWD, "mabraham@davinta.com" . ":" . "a49f0OafWsTnNotnWEeiBFD0");

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else
{
echo $result;
}
curl_close ($ch);
?>
