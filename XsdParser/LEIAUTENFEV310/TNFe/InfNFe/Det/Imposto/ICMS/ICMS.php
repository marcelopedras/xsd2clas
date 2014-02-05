<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS;



/**
    Dados do ICMS Normal e ST
**/


class ICMS {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'ICMS00',
      1 => 'ICMS10',
      2 => 'ICMS20',
      3 => 'ICMS30',
      4 => 'ICMS40',
      5 => 'ICMS51',
      6 => 'ICMS60',
      7 => 'ICMS70',
      8 => 'ICMS90',
      9 => 'ICMSPart',
      10 => 'ICMSST',
      11 => 'ICMSSN101',
      12 => 'ICMSSN102',
      13 => 'ICMSSN201',
      14 => 'ICMSSN202',
      15 => 'ICMSSN500',
      16 => 'ICMSSN900',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 Tributação pelo ICMS
00 - Tributada integralmente  */
            protected $ICMS00;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 Tributação pelo ICMS
10 - Tributada e com cobrança do ICMS por substituição tributária   */
            protected $ICMS10;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 Tributção pelo ICMS
20 - Com redução de base de cálculo   */
            protected $ICMS20;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 Tributação pelo ICMS
30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária  */
            protected $ICMS30;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 Tributação pelo ICMS
40 - Isenta 
41 - Não tributada 
50 - Suspensão    */
            protected $ICMS40;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 Tributção pelo ICMS
51 - Diferimento
A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.  */
            protected $ICMS51;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 Tributação pelo ICMS
60 - ICMS cobrado anteriormente por substituição tributária   */
            protected $ICMS60;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 Tributação pelo ICMS 
70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária   */
            protected $ICMS70;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 Tributação pelo ICMS
90 - Outras  */
            protected $ICMS90;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na legislação
Operação interestadual para consumidor final com partilha do ICMS  devido na operação entre a UF de origem e a UF do destinatário ou ou a UF definida na legislação. (Ex. UF da concessionária de entrega do  veículos)  */
            protected $ICMSPart;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST Grupo de informação do ICMSST devido para a UF de destino, nas operações interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na UF do remetente. Repasse via Substituto Tributário.  */
            protected $ICMSST;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)  */
            protected $ICMSSN101;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))  */
            protected $ICMSSN102;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)  */
            protected $ICMSSN201;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)  */
            protected $ICMSSN202;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e CSOSN=500 (v.2.0)  */
            protected $ICMSSN500;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e CSOSN=900 (v2.0)  */
            protected $ICMSSN900;

    public function getICMS00() {
        return $this->ICMS00;
    }
	public function setICMS00(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 $ICMS00) {
        $this->ICMS00 = $ICMS00;
    }
	public function getICMS10() {
        return $this->ICMS10;
    }
	public function setICMS10(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 $ICMS10) {
        $this->ICMS10 = $ICMS10;
    }
	public function getICMS20() {
        return $this->ICMS20;
    }
	public function setICMS20(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 $ICMS20) {
        $this->ICMS20 = $ICMS20;
    }
	public function getICMS30() {
        return $this->ICMS30;
    }
	public function setICMS30(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 $ICMS30) {
        $this->ICMS30 = $ICMS30;
    }
	public function getICMS40() {
        return $this->ICMS40;
    }
	public function setICMS40(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 $ICMS40) {
        $this->ICMS40 = $ICMS40;
    }
	public function getICMS51() {
        return $this->ICMS51;
    }
	public function setICMS51(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 $ICMS51) {
        $this->ICMS51 = $ICMS51;
    }
	public function getICMS60() {
        return $this->ICMS60;
    }
	public function setICMS60(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 $ICMS60) {
        $this->ICMS60 = $ICMS60;
    }
	public function getICMS70() {
        return $this->ICMS70;
    }
	public function setICMS70(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 $ICMS70) {
        $this->ICMS70 = $ICMS70;
    }
	public function getICMS90() {
        return $this->ICMS90;
    }
	public function setICMS90(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 $ICMS90) {
        $this->ICMS90 = $ICMS90;
    }
	public function getICMSPart() {
        return $this->ICMSPart;
    }
	public function setICMSPart(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart $ICMSPart) {
        $this->ICMSPart = $ICMSPart;
    }
	public function getICMSST() {
        return $this->ICMSST;
    }
	public function setICMSST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST $ICMSST) {
        $this->ICMSST = $ICMSST;
    }
	public function getICMSSN101() {
        return $this->ICMSSN101;
    }
	public function setICMSSN101(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 $ICMSSN101) {
        $this->ICMSSN101 = $ICMSSN101;
    }
	public function getICMSSN102() {
        return $this->ICMSSN102;
    }
	public function setICMSSN102(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 $ICMSSN102) {
        $this->ICMSSN102 = $ICMSSN102;
    }
	public function getICMSSN201() {
        return $this->ICMSSN201;
    }
	public function setICMSSN201(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 $ICMSSN201) {
        $this->ICMSSN201 = $ICMSSN201;
    }
	public function getICMSSN202() {
        return $this->ICMSSN202;
    }
	public function setICMSSN202(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 $ICMSSN202) {
        $this->ICMSSN202 = $ICMSSN202;
    }
	public function getICMSSN500() {
        return $this->ICMSSN500;
    }
	public function setICMSSN500(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 $ICMSSN500) {
        $this->ICMSSN500 = $ICMSSN500;
    }
	public function getICMSSN900() {
        return $this->ICMSSN900;
    }
	public function setICMSSN900(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 $ICMSSN900) {
        $this->ICMSSN900 = $ICMSSN900;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'ICMS00',
      1 => 'ICMS10',
      2 => 'ICMS20',
      3 => 'ICMS30',
      4 => 'ICMS40',
      5 => 'ICMS51',
      6 => 'ICMS60',
      7 => 'ICMS70',
      8 => 'ICMS90',
      9 => 'ICMSPart',
      10 => 'ICMSST',
      11 => 'ICMSSN101',
      12 => 'ICMSSN102',
      13 => 'ICMSSN201',
      14 => 'ICMSSN202',
      15 => 'ICMSSN500',
      16 => 'ICMSSN900',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 $ICMS00, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 $ICMS10, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 $ICMS20, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 $ICMS30, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 $ICMS40, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 $ICMS51, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 $ICMS60, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 $ICMS70, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 $ICMS90, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart $ICMSPart, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST $ICMSST, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 $ICMSSN101, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 $ICMSSN102, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 $ICMSSN201, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 $ICMSSN202, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 $ICMSSN500, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 $ICMSSN900) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->ICMS00 = $ICMS00;
$this->ICMS10 = $ICMS10;
$this->ICMS20 = $ICMS20;
$this->ICMS30 = $ICMS30;
$this->ICMS40 = $ICMS40;
$this->ICMS51 = $ICMS51;
$this->ICMS60 = $ICMS60;
$this->ICMS70 = $ICMS70;
$this->ICMS90 = $ICMS90;
$this->ICMSPart = $ICMSPart;
$this->ICMSST = $ICMSST;
$this->ICMSSN101 = $ICMSSN101;
$this->ICMSSN102 = $ICMSSN102;
$this->ICMSSN201 = $ICMSSN201;
$this->ICMSSN202 = $ICMSSN202;
$this->ICMSSN500 = $ICMSSN500;
$this->ICMSSN900 = $ICMSSN900;

    }
}