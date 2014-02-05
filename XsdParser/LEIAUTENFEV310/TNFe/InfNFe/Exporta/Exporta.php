<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Exporta;



/**
    Informações de exportação
**/


class Exporta {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'UFSaidaPais',
      1 => 'xLocExporta',
      2 => 'xLocDespacho',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TUfEmi\TUfEmi Sigla da UF de Embarque ou de transposição de fronteira  */
            protected $UFSaidaPais;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocExporta Local de Embarque ou de transposição de fronteira  */
            protected $xLocExporta;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocDespacho Descrição do local de despacho  */
            protected $xLocDespacho;

    public function getUFSaidaPais() {
        return $this->UFSaidaPais;
    }
	public function setUFSaidaPais(\TIPOSBASICOV310\TUfEmi\TUfEmi $UFSaidaPais) {
        $this->UFSaidaPais = $UFSaidaPais;
    }
	public function getXLocExporta() {
        return $this->xLocExporta;
    }
	public function setXLocExporta(\LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocExporta $xLocExporta) {
        $this->xLocExporta = $xLocExporta;
    }
	public function getXLocDespacho() {
        return $this->xLocDespacho;
    }
	public function setXLocDespacho(\LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocDespacho $xLocDespacho) {
        $this->xLocDespacho = $xLocDespacho;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'UFSaidaPais',
      1 => 'xLocExporta',
      2 => 'xLocDespacho',
    ),
  ),
), \TIPOSBASICOV310\TUfEmi\TUfEmi $UFSaidaPais, \LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocExporta $xLocExporta, \LEIAUTENFEV310\TNFe\InfNFe\Exporta\XLocDespacho $xLocDespacho) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->UFSaidaPais = $UFSaidaPais;
$this->xLocExporta = $xLocExporta;
$this->xLocDespacho = $xLocDespacho;

    }
}