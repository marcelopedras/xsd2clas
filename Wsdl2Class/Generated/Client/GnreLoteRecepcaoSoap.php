<?php






class GnreLoteRecepcaoSoap {
    
    
                /** @var SoapClient  */
            protected $client;

    public function __construct($location, $uri) {
        $this->client = new SoapClient(null, array('location' => $location, 'uri' => $uri));
    }
	public function processar(gnreDadosMsg $processarSoapIn) {
        return $this->client->processar($processarSoapIn);
    }
}