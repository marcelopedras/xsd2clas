<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST;



/**
    Modalidade de determinação da BC do ICMS ST:
0 – Preço tabelado ou máximo  sugerido;
1 - Lista Negativa (valor);
2 - Lista Positiva (valor);
3 - Lista Neutra (valor);
4 - Margem Valor Agregado (%);
5 - Pauta (valor).
**/


class ModBCST {
    
    
                /** @var string 
base = xs:string
enumeration - 0, 1, 2, 3, 4, 5
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}