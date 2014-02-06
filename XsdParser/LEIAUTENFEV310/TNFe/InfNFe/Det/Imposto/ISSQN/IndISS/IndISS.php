<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndISS;



/**
    Exibilidade do ISS:1-Exigível;2-Não incidente;3-Isenção;4-Exportação;5-Imunidade;6-Exig.Susp. Judicial;7-Exig.Susp. ADM
**/


class IndISS {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 2, 3, 4, 5, 6, 7
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}