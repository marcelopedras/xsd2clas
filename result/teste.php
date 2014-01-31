<?php

$idLote = new \XML\LeiauteNFe\TIdLote("25263913");
$indSinc = new \XML\LeiauteNFe\IndSinc(\XML\LeiauteNFe\IndSinc::ASSINCRONA);

$enviNFe = new \XML\LeiauteNFe\TEnviNFe($idLote, "3.10", $indSinc);

foreach(nfeEntitiesVemDeAlgumLugar() as $nfeEntity) {
    $nfe = new \XML\LeiauteNFe\TNFe();
    populaNFE($nfe, $nfeEntity);
    $enviNFe->addNFe($nfe);
}

$document = new \XML\LeiauteNFe\Documento($enviNFe);

$webService = new WebService($url, $protocolo);
$webService->post($document);
$webService->getResultAsXMLDocument();