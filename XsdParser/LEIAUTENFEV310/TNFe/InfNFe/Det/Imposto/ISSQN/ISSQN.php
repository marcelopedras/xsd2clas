<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN;



/**
    ISSQN
**/


class ISSQN {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vBC',
      1 => 'vAliq',
      2 => 'vISSQN',
      3 => 'cMunFG',
      4 => 'cListServ',
      5 => 'vDeducao',
      6 => 'vOutro',
      7 => 'vDescIncond',
      8 => 'vDescCond',
      9 => 'vISSRet',
      10 => 'indISS',
      11 => 'cServico',
      12 => 'cMun',
      13 => 'cPais',
      14 => 'nProcesso',
      15 => 'indIncentivo',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do ISSQN  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do ISSQN  */
            protected $vAliq;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da do ISSQN  */
            protected $vISSQN;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Informar o município de ocorrência do fato gerador do ISSQN. Utilizar a Tabela do IBGE (Anexo VII - Tabela de UF, Município e País). “Atenção, não vincular com os campos B12, C10 ou E10” v2.0  */
            protected $cMunFG;
	            /** @var \LEIAUTENFEV310\TCListServ Informar o Item da lista de serviços da LC 116/03 em que se classifica o serviço.  */
            protected $cListServ;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor dedução para redução da base de cálculo  */
            protected $vDeducao;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor outras retenções  */
            protected $vOutro;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor desconto incondicionado  */
            protected $vDescIncond;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor desconto condicionado  */
            protected $vDescCond;
	            /** @var \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc Valor Retenção ISS  */
            protected $vISSRet;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndISS Exibilidade do ISS:1-Exigível;2-Não incidente;3-Isenção;4-Exportação;5-Imunidade;6-Exig.Susp. Judicial;7-Exig.Susp. ADM  */
            protected $indISS;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\CServico Código do serviço prestado dentro do município  */
            protected $cServico;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Código do Município de Incidência do Imposto  */
            protected $cMun;
	            /** @var \TIPOSBASICOV310\Tpais\Tpais Código do país onde o serviço foi prestado  */
            protected $cPais;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\NProcesso Número do Processo administrativo ou judicial de suspenção do processo  */
            protected $nProcesso;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndIncentivo Indicador de Incentivo Fiscal. 1=Sim; 2=Não  */
            protected $indIncentivo;

    public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getVAliq() {
        return $this->vAliq;
    }
	public function setVAliq(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $vAliq) {
        $this->vAliq = $vAliq;
    }
	public function getVISSQN() {
        return $this->vISSQN;
    }
	public function setVISSQN(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vISSQN) {
        $this->vISSQN = $vISSQN;
    }
	public function getCMunFG() {
        return $this->cMunFG;
    }
	public function setCMunFG(\TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMunFG) {
        $this->cMunFG = $cMunFG;
    }
	public function getCListServ() {
        return $this->cListServ;
    }
	public function setCListServ(\LEIAUTENFEV310\TCListServ $cListServ) {
        $this->cListServ = $cListServ;
    }
	public function getVDeducao() {
        return $this->vDeducao;
    }
	public function setVDeducao(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDeducao) {
        $this->vDeducao = $vDeducao;
    }
	public function getVOutro() {
        return $this->vOutro;
    }
	public function setVOutro(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOutro) {
        $this->vOutro = $vOutro;
    }
	public function getVDescIncond() {
        return $this->vDescIncond;
    }
	public function setVDescIncond(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescIncond) {
        $this->vDescIncond = $vDescIncond;
    }
	public function getVDescCond() {
        return $this->vDescCond;
    }
	public function setVDescCond(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescCond) {
        $this->vDescCond = $vDescCond;
    }
	public function getVISSRet() {
        return $this->vISSRet;
    }
	public function setVISSRet(\TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vISSRet) {
        $this->vISSRet = $vISSRet;
    }
	public function getIndISS() {
        return $this->indISS;
    }
	public function setIndISS(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndISS $indISS) {
        $this->indISS = $indISS;
    }
	public function getCServico() {
        return $this->cServico;
    }
	public function setCServico(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\CServico $cServico) {
        $this->cServico = $cServico;
    }
	public function getCMun() {
        return $this->cMun;
    }
	public function setCMun(\TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMun) {
        $this->cMun = $cMun;
    }
	public function getCPais() {
        return $this->cPais;
    }
	public function setCPais(\TIPOSBASICOV310\Tpais\Tpais $cPais) {
        $this->cPais = $cPais;
    }
	public function getNProcesso() {
        return $this->nProcesso;
    }
	public function setNProcesso(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\NProcesso $nProcesso) {
        $this->nProcesso = $nProcesso;
    }
	public function getIndIncentivo() {
        return $this->indIncentivo;
    }
	public function setIndIncentivo(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndIncentivo $indIncentivo) {
        $this->indIncentivo = $indIncentivo;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'vBC',
      1 => 'vAliq',
      2 => 'vISSQN',
      3 => 'cMunFG',
      4 => 'cListServ',
      5 => 'vDeducao',
      6 => 'vOutro',
      7 => 'vDescIncond',
      8 => 'vDescCond',
      9 => 'vISSRet',
      10 => 'indISS',
      11 => 'cServico',
      12 => 'cMun',
      13 => 'cPais',
      14 => 'nProcesso',
      15 => 'indIncentivo',
    ),
  ),
), \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $vAliq, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vISSQN, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMunFG, \LEIAUTENFEV310\TCListServ $cListServ, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDeducao, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vOutro, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescIncond, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vDescCond, \TIPOSBASICOV310\TDec_1302Opc\TDec_1302Opc $vISSRet, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndISS $indISS, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\CServico $cServico, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMun, \TIPOSBASICOV310\Tpais\Tpais $cPais, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\NProcesso $nProcesso, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\ISSQN\IndIncentivo $indIncentivo) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->vBC = $vBC;
$this->vAliq = $vAliq;
$this->vISSQN = $vISSQN;
$this->cMunFG = $cMunFG;
$this->cListServ = $cListServ;
$this->vDeducao = $vDeducao;
$this->vOutro = $vOutro;
$this->vDescIncond = $vDescIncond;
$this->vDescCond = $vDescCond;
$this->vISSRet = $vISSRet;
$this->indISS = $indISS;
$this->cServico = $cServico;
$this->cMun = $cMun;
$this->cPais = $cPais;
$this->nProcesso = $nProcesso;
$this->indIncentivo = $indIncentivo;

    }
}