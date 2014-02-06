<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref\RefECF\NECF;



/**
    Informar o número de ordem seqüencial do ECF que emitiu o Cupom Fiscal vinculado à NF-e
**/


class NECF {
    
    
                /** @var string 
base = xs:string
pattern - /[0-9]{1,3}/
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}