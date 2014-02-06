<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS;



/**
    Este campo será preenchido quando o campo anterior estiver preenchido.
Informar o motivo da desoneração:
1 – Táxi;
3 – Produtor Agropecuário;
4 – Frotista/Locadora;
5 – Diplomático/Consular;
6 – Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações);
7 – SUFRAMA;
8 - Venda a órgão Público;
9 – Outros
10- Deficiente Condutor
11- Deficiente não condutor
**/


class MotDesICMS {
    
    
                /** @var string 
base = xs:string
enumeration - 1, 3, 4, 5, 6, 7, 8, 9, 10, 11
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}