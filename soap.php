<?php
$soap = new SoapClient('http://s112.gdeya.co/SmsWhoisService/SmsWhoisWcf.svc?wsdl',[]);

try {
    $status = $soap->GetCountryByIp(['ip' => '116.203.18.87']);
    $result = $soap->GetCountryByIpResponse;
    return $result;
} catch (SoapFault $e) {
    return false;
}