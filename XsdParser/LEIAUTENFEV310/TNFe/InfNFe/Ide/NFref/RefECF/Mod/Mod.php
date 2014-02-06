<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\Mod;



/**
    Código do modelo do Documento Fiscal 
Preencher com "2B", quando se tratar de Cupom Fiscal emitido por máquina registradora (não ECF), com "2C", quando se tratar de Cupom Fiscal PDV, ou "2D", quando se tratar de Cupom Fiscal (emitido por ECF)
**/


class Mod {
    
    
                /** @var string 
base = xs:string
enumeration - 2B, 2C, 2D
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}