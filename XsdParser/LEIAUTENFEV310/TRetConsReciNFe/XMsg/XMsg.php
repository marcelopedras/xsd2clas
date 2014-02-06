<?php
namespace LEIAUTENFEV310\TRetConsReciNFe\XMsg;



/**
    Mensagem da SEFAZ para o emissor. (v2.0)
**/


class XMsg {
    
    
                /** @var string 
base = TString
maxLength - 200
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}