<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\DI\NDI;



/**
    Numero do Documento de Importação DI/DSI/DA/DRI-E (DI/DSI/DA/DRI-E) (NT2011/004)
**/


class NDI {
    
    
                /** @var string 
base = TString
maxLength - 12
minLength - 1
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}