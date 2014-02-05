<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd;



/**
    Veículos novos
**/


class VeicProd {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tpOp',
      1 => 'chassi',
      2 => 'cCor',
      3 => 'xCor',
      4 => 'pot',
      5 => 'cilin',
      6 => 'pesoL',
      7 => 'pesoB',
      8 => 'nSerie',
      9 => 'tpComb',
      10 => 'nMotor',
      11 => 'CMT',
      12 => 'dist',
      13 => 'anoMod',
      14 => 'anoFab',
      15 => 'tpPint',
      16 => 'tpVeic',
      17 => 'espVeic',
      18 => 'VIN',
      19 => 'condVeic',
      20 => 'cMod',
      21 => 'cCorDENATRAN',
      22 => 'lota',
      23 => 'tpRest',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpOp Tipo da Operação (1 - Venda concessionária; 2 - Faturamento direto; 3 - Venda direta; 0 - Outros)  */
            protected $tpOp;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Chassi Chassi do veículo - VIN (código-identificação-veículo)  */
            protected $chassi;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCor Cor do veículo (código de cada montadora)  */
            protected $cCor;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\XCor Descrição da cor  */
            protected $xCor;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Pot Potência máxima do motor do veículo em cavalo vapor (CV). (potência-veículo)  */
            protected $pot;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Cilin Capacidade voluntária do motor expressa em centímetros cúbicos (CC). (cilindradas)  */
            protected $cilin;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoL Peso líquido  */
            protected $pesoL;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoB Peso bruto  */
            protected $pesoB;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NSerie Serial (série)  */
            protected $nSerie;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpComb Tipo de combustível-Tabela RENAVAM: 01-Álcool; 02-Gasolina; 03-Diesel; 16-Álcool/Gas.; 17-Gas./Álcool/GNV; 18-Gasolina/Elétrico  */
            protected $tpComb;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NMotor Número do motor  */
            protected $nMotor;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMT CMT-Capacidade Máxima de Tração - em Toneladas 4 casas decimais  */
            protected $CMT;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Dist Distância entre eixos  */
            protected $dist;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod Ano Modelo de Fabricação  */
            protected $anoMod;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab Ano de Fabricação  */
            protected $anoFab;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpPint Tipo de pintura  */
            protected $tpPint;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic Tipo de veículo (utilizar tabela RENAVAM)  */
            protected $tpVeic;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic Espécie de veículo (utilizar tabela RENAVAM)  */
            protected $espVeic;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\VIN Informa-se o veículo tem VIN (chassi) remarcado.
R-Remarcado
N-NormalVIN   */
            protected $VIN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic Condição do veículo (1 - acabado; 2 - inacabado; 3 - semi-acabado)  */
            protected $condVeic;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMod Código Marca Modelo (utilizar tabela RENAVAM)  */
            protected $cMod;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN Código da Cor Segundo as regras de pré-cadastro do DENATRAN: 01-AMARELO;02-AZUL;03-BEGE;04-BRANCA;05-CINZA;06-DOURADA;07-GRENA 
08-LARANJA;09-MARROM;10-PRATA;11-PRETA;12-ROSA;13-ROXA;14-VERDE;15-VERMELHA;16-FANTASIA  */
            protected $cCorDENATRAN;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Lota Quantidade máxima de permitida de passageiros sentados, inclusive motorista.  */
            protected $lota;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpRest Restrição
0 - Não há;
1 - Alienação Fiduciária;
2 - Arrendamento Mercantil;
3 - Reserva de Domínio;
4 - Penhor de Veículos;
9 - outras.  */
            protected $tpRest;

    public function getTpOp() {
        return $this->tpOp;
    }
	public function setTpOp(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpOp $tpOp) {
        $this->tpOp = $tpOp;
    }
	public function getChassi() {
        return $this->chassi;
    }
	public function setChassi(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Chassi $chassi) {
        $this->chassi = $chassi;
    }
	public function getCCor() {
        return $this->cCor;
    }
	public function setCCor(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCor $cCor) {
        $this->cCor = $cCor;
    }
	public function getXCor() {
        return $this->xCor;
    }
	public function setXCor(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\XCor $xCor) {
        $this->xCor = $xCor;
    }
	public function getPot() {
        return $this->pot;
    }
	public function setPot(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Pot $pot) {
        $this->pot = $pot;
    }
	public function getCilin() {
        return $this->cilin;
    }
	public function setCilin(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Cilin $cilin) {
        $this->cilin = $cilin;
    }
	public function getPesoL() {
        return $this->pesoL;
    }
	public function setPesoL(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoL $pesoL) {
        $this->pesoL = $pesoL;
    }
	public function getPesoB() {
        return $this->pesoB;
    }
	public function setPesoB(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoB $pesoB) {
        $this->pesoB = $pesoB;
    }
	public function getNSerie() {
        return $this->nSerie;
    }
	public function setNSerie(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NSerie $nSerie) {
        $this->nSerie = $nSerie;
    }
	public function getTpComb() {
        return $this->tpComb;
    }
	public function setTpComb(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpComb $tpComb) {
        $this->tpComb = $tpComb;
    }
	public function getNMotor() {
        return $this->nMotor;
    }
	public function setNMotor(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NMotor $nMotor) {
        $this->nMotor = $nMotor;
    }
	public function getCMT() {
        return $this->CMT;
    }
	public function setCMT(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMT $CMT) {
        $this->CMT = $CMT;
    }
	public function getDist() {
        return $this->dist;
    }
	public function setDist(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Dist $dist) {
        $this->dist = $dist;
    }
	public function getAnoMod() {
        return $this->anoMod;
    }
	public function setAnoMod(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod $anoMod) {
        $this->anoMod = $anoMod;
    }
	public function getAnoFab() {
        return $this->anoFab;
    }
	public function setAnoFab(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab $anoFab) {
        $this->anoFab = $anoFab;
    }
	public function getTpPint() {
        return $this->tpPint;
    }
	public function setTpPint(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpPint $tpPint) {
        $this->tpPint = $tpPint;
    }
	public function getTpVeic() {
        return $this->tpVeic;
    }
	public function setTpVeic(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic $tpVeic) {
        $this->tpVeic = $tpVeic;
    }
	public function getEspVeic() {
        return $this->espVeic;
    }
	public function setEspVeic(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic $espVeic) {
        $this->espVeic = $espVeic;
    }
	public function getVIN() {
        return $this->VIN;
    }
	public function setVIN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\VIN $VIN) {
        $this->VIN = $VIN;
    }
	public function getCondVeic() {
        return $this->condVeic;
    }
	public function setCondVeic(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic $condVeic) {
        $this->condVeic = $condVeic;
    }
	public function getCMod() {
        return $this->cMod;
    }
	public function setCMod(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMod $cMod) {
        $this->cMod = $cMod;
    }
	public function getCCorDENATRAN() {
        return $this->cCorDENATRAN;
    }
	public function setCCorDENATRAN(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN $cCorDENATRAN) {
        $this->cCorDENATRAN = $cCorDENATRAN;
    }
	public function getLota() {
        return $this->lota;
    }
	public function setLota(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Lota $lota) {
        $this->lota = $lota;
    }
	public function getTpRest() {
        return $this->tpRest;
    }
	public function setTpRest(\LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpRest $tpRest) {
        $this->tpRest = $tpRest;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'tpOp',
      1 => 'chassi',
      2 => 'cCor',
      3 => 'xCor',
      4 => 'pot',
      5 => 'cilin',
      6 => 'pesoL',
      7 => 'pesoB',
      8 => 'nSerie',
      9 => 'tpComb',
      10 => 'nMotor',
      11 => 'CMT',
      12 => 'dist',
      13 => 'anoMod',
      14 => 'anoFab',
      15 => 'tpPint',
      16 => 'tpVeic',
      17 => 'espVeic',
      18 => 'VIN',
      19 => 'condVeic',
      20 => 'cMod',
      21 => 'cCorDENATRAN',
      22 => 'lota',
      23 => 'tpRest',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpOp $tpOp, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Chassi $chassi, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCor $cCor, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\XCor $xCor, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Pot $pot, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Cilin $cilin, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoL $pesoL, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\PesoB $pesoB, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NSerie $nSerie, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpComb $tpComb, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\NMotor $nMotor, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMT $CMT, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Dist $dist, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod $anoMod, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab $anoFab, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpPint $tpPint, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic $tpVeic, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic $espVeic, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\VIN $VIN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic $condVeic, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CMod $cMod, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN $cCorDENATRAN, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\Lota $lota, \LEIAUTENFEV310\TNFe\InfNFe\Det\Prod\VeicProd\TpRest $tpRest) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->tpOp = $tpOp;
$this->chassi = $chassi;
$this->cCor = $cCor;
$this->xCor = $xCor;
$this->pot = $pot;
$this->cilin = $cilin;
$this->pesoL = $pesoL;
$this->pesoB = $pesoB;
$this->nSerie = $nSerie;
$this->tpComb = $tpComb;
$this->nMotor = $nMotor;
$this->CMT = $CMT;
$this->dist = $dist;
$this->anoMod = $anoMod;
$this->anoFab = $anoFab;
$this->tpPint = $tpPint;
$this->tpVeic = $tpVeic;
$this->espVeic = $espVeic;
$this->VIN = $VIN;
$this->condVeic = $condVeic;
$this->cMod = $cMod;
$this->cCorDENATRAN = $cCorDENATRAN;
$this->lota = $lota;
$this->tpRest = $tpRest;

    }
}