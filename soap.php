<?php
$soap = new SoapClient('http://s112.gdeya.co/SmsWhoisService/SmsWhoisWcf.svc?wsdl',[]);

try {
    $status = $soap->GetCountryByIp(['ip' => '116.203.18.87']);
    $result = $soap->GetCountryByIpResponse;
    return $result;
} catch (SoapFault $e) {
    return false;
}

if ($curl = curl_init()){
    curl_setopt_array($curl, array(
        CURLOPT_URL            => 'http://s112.gdeya.co/SmsWhoisService/SmsWebService.asmx',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => '',
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_TIMEOUT        => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST  => 'POST',
        CURLOPT_POSTFIELDS     =>
            '<?xml version="1.0" encoding="UTF-8"?>
            <Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
                <Body>
                    <GetCountryByIp xmlns="http://hforms.instaforex.com/smsservice/">
                        <ip>116.203.18.87</ip>
                    </GetCountryByIp>
                </Body>
            </Envelope>',
        CURLOPT_HTTPHEADER     => array(
            'SOAPAction: "http://hforms.instaforex.com/smsservice/GetCountryByIp"',
            'Content-Type: text/xml; charset="UTF-8"'
        ),
    ));
    $response = curl_exec($curl);
    $response = strip_tags($response);
    curl_close($curl);
    echo $response;
}