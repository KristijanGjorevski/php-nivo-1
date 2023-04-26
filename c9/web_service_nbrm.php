<?php 

$request = "https://www.nbrm.mk/klservice/kurs.asmx?wsdl";


$data_to_go = [
    'StartDate' => '12.02.2010',
    'EndDate' => '15.02.2010'
];

$web_service = new SoapClient($request);

$data = $web_service->GetExchangeRate($data_to_go)->GetExchangeRateResult;

$parsed_string = simplexml_load_string($data);
