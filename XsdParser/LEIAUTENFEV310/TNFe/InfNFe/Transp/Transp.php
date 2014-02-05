<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Transp;



/**
    Dados dos transportes da NF-e
**/


class Transp {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'modFrete',
      1 => 'transporta',
      2 => 'retTransp',
      3 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'veicTransp',
              1 => 'reboque',
            ),
          ),
          1 => 'vagao',
          2 => 'balsa',
        ),
      ),
      4 => 'vol',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\ModFrete Modalidade do frete
0- Por conta do emitente;
1- Por conta do destinatário/remetente;
2- Por conta de terceiros;
9- Sem frete (v2.0)  */
            protected $modFrete;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta Dados do transportador  */
            protected $transporta;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\RetTransp Dados da retenção  ICMS do Transporte  */
            protected $retTransp;
	            /** @var \LEIAUTENFEV310\TVeiculo Dados do veículo  */
            protected $veicTransp;
	            /** @var \LEIAUTENFEV310\TVeiculo[] Dados do reboque/Dolly (v2.0)  */
            protected $reboque;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vagao Identificação do vagão (v2.0)  */
            protected $vagao;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Balsa Identificação da balsa (v2.0)  */
            protected $balsa;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol[] Dados dos volumes  */
            protected $vol;

    public function getModFrete() {
        return $this->modFrete;
    }
	public function setModFrete(\LEIAUTENFEV310\TNFe\InfNFe\Transp\ModFrete $modFrete) {
        $this->modFrete = $modFrete;
    }
	public function getTransporta() {
        return $this->transporta;
    }
	public function setTransporta(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta $transporta) {
        $this->transporta = $transporta;
    }
	public function getRetTransp() {
        return $this->retTransp;
    }
	public function setRetTransp(\LEIAUTENFEV310\TNFe\InfNFe\Transp\RetTransp $retTransp) {
        $this->retTransp = $retTransp;
    }
	public function getVeicTransp() {
        return $this->veicTransp;
    }
	public function setVeicTransp(\LEIAUTENFEV310\TVeiculo $veicTransp) {
        $this->veicTransp = $veicTransp;
    }
	public function getReboque($index) {
        return $this->reboque[$index];
    }
	public function setReboque($index, \LEIAUTENFEV310\TVeiculo $reboque) {
        $this->reboque[$index] = $reboque;
    }
	public function addReboque(\LEIAUTENFEV310\TVeiculo $reboque) {
        $this->reboque[] = $reboque;
if(count($this->reboque) > 5){throw new \Exception("Property value out of bounds of max 5");}

    }
	public function reboqueLength() {
        return count($this->reboque);
    }
	public function getVagao() {
        return $this->vagao;
    }
	public function setVagao(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vagao $vagao) {
        $this->vagao = $vagao;
    }
	public function getBalsa() {
        return $this->balsa;
    }
	public function setBalsa(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Balsa $balsa) {
        $this->balsa = $balsa;
    }
	public function getVol($index) {
        return $this->vol[$index];
    }
	public function setVol($index, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol $vol) {
        $this->vol[$index] = $vol;
    }
	public function addVol(\LEIAUTENFEV310\TNFe\InfNFe\Transp\Vol $vol) {
        $this->vol[] = $vol;
if(count($this->vol) > 5000){throw new \Exception("Property value out of bounds of max 5000");}

    }
	public function volLength() {
        return count($this->vol);
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'modFrete',
      1 => 'transporta',
      2 => 'retTransp',
      3 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'veicTransp',
              1 => 'reboque',
            ),
          ),
          1 => 'vagao',
          2 => 'balsa',
        ),
      ),
      4 => 'vol',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Transp\ModFrete $modFrete, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Transporta $transporta, \LEIAUTENFEV310\TNFe\InfNFe\Transp\RetTransp $retTransp, \LEIAUTENFEV310\TVeiculo $veicTransp, array $reboque, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Vagao $vagao, \LEIAUTENFEV310\TNFe\InfNFe\Transp\Balsa $balsa, array $vol) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->modFrete = $modFrete;
$this->transporta = $transporta;
$this->retTransp = $retTransp;
$this->veicTransp = $veicTransp;
$this->reboque = $reboque;
$this->vagao = $vagao;
$this->balsa = $balsa;
$this->vol = $vol;

    }
}