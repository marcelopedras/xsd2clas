<?php






class Classeteste1 {
    
    
                /** @var SoapClient  */
            protected $client;

    public function __construct($location, $uri) {
        $this->client = new SoapClient(null, array('location' => $location, 'uri' => $uri));
    }
	public function f3uncaoteste($parametroteste, gnreDadosMsg $processarSoapIn) {
        return $this->client->F3uncaoteste($parametroteste, $processarSoapIn);
    }
	public function processar2(gnreDadosMsg $processarSoapIn) {
        return $this->client->processar2($processarSoapIn);
    }
	public function hello($frase) {
        return $this->client->hello($frase);
    }
}