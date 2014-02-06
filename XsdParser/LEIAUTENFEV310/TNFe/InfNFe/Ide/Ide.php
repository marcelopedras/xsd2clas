<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Ide;



/**
    identificação da NF-e
**/


class Ide {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cUF',
      1 => 'cNF',
      2 => 'natOp',
      3 => 'indPag',
      4 => 'mod',
      5 => 'serie',
      6 => 'nNF',
      7 => 'dhEmi',
      8 => 'dhSaiEnt',
      9 => 'tpNF',
      10 => 'idDest',
      11 => 'cMunFG',
      12 => 'tpImp',
      13 => 'tpEmis',
      14 => 'cDV',
      15 => 'tpAmb',
      16 => 'finNFe',
      17 => 'indFinal',
      18 => 'indPres',
      19 => 'procEmi',
      20 => 'verProc',
      21 => 
      array (
        'sequence' => 
        array (
          0 => 'dhCont',
          1 => 'xJust',
        ),
      ),
      22 => 'NFref',
    ),
  ),
);
	            /** @var \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.  */
            protected $cUF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\CNF Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e.  */
            protected $cNF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NatOp Descrição da Natureza da Operação  */
            protected $natOp;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPag Indicador da forma de pagamento:
0 – pagamento à vista;
1 – pagamento à prazo;
2 – outros.  */
            protected $indPag;
	            /** @var \TIPOSBASICOV310\TMod\TMod Código do modelo do Documento Fiscal. 55 = NF-e; 65 = NFC-e.  */
            protected $mod;
	            /** @var \TIPOSBASICOV310\TSerie\TSerie Série do Documento Fiscal
série normal 0-889
Avulsa Fisco 890-899
SCAN 900-999  */
            protected $serie;
	            /** @var \TIPOSBASICOV310\TNF\TNF Número do Documento Fiscal  */
            protected $nNF;
	            /** @var \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC Data e Hora de emissão do Documento Fiscal (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00  */
            protected $dhEmi;
	            /** @var \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC Data e Hora da saída ou de entrada da mercadoria / produto (AAAA-MM-DDTHH:mm:ssTZD)  */
            protected $dhSaiEnt;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\TpNF Tipo do Documento Fiscal (0 - entrada; 1 - saída)  */
            protected $tpNF;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\IdDest Identificador de Local de destino da operação (1-Interna;2-Interestadual;3-Exterior)  */
            protected $idDest;
	            /** @var \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)  */
            protected $cMunFG;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\TpImp Formato de impressão do DANFE (0-sem DANFE;1-DANFe Retrato; 2-DANFe Paisagem;3-DANFe Simplificado;
											4-DANFe NFC-e;5-DANFe NFC-e em mensagem eletrônica)
											  */
            protected $tpImp;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\TpEmis Forma de emissão da NF-e
1 - Normal;
2 - Contingência FS
3 - Contingência SCAN
4 - Contingência DPEC
5 - Contingência FSDA
6 - Contingência SVC - AN
7 - Contingência SVC - RS
9 - Contingência off-line NFC-e  */
            protected $tpEmis;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\CDV Digito Verificador da Chave de Acesso da NF-e  */
            protected $cDV;
	            /** @var \TIPOSBASICOV310\TAmb\TAmb Identificação do Ambiente:
1 - Produção
2 - Homologação  */
            protected $tpAmb;
	            /** @var \LEIAUTENFEV310\TFinNFe Finalidade da emissão da NF-e:
1 - NFe normal
2 - NFe complementar
3 - NFe de ajuste
4 - Devolução/Retorno  */
            protected $finNFe;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\IndFinal Indica operação com consumidor final (0-Não;1-Consumidor Final)  */
            protected $indFinal;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPres Indicador de presença do comprador no estabelecimento comercial no momento da oepração
											(0-Não se aplica (ex.: Nota Fiscal complementar ou de ajuste;1-Operação presencial;2-Não presencial, internet;3-Não presencial, teleatendimento;4-NFC-e entrega em domicílio;9-Não presencial, outros)  */
            protected $indPres;
	            /** @var \LEIAUTENFEV310\TProcEmi Processo de emissão utilizado com a seguinte codificação:
0 - emissão de NF-e com aplicativo do contribuinte;
1 - emissão de NF-e avulsa pelo Fisco;
2 - emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site
do Fisco;
3- emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.  */
            protected $procEmi;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\VerProc versão do aplicativo utilizado no processo de
emissão  */
            protected $verProc;
	            /** @var \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC Informar a data e hora de entrada em contingência contingência no formato  (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00.  */
            protected $dhCont;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\XJust Informar a Justificativa da entrada  */
            protected $xJust;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref[] Grupo de infromações da NF referenciada  */
            protected $NFref;

    public function getCUF() {
        return $this->cUF;
    }
	public function setCUF(\TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF) {
        $this->cUF = $cUF;
    }
	public function getCNF() {
        return $this->cNF;
    }
	public function setCNF(\LEIAUTENFEV310\TNFe\InfNFe\Ide\CNF $cNF) {
        $this->cNF = $cNF;
    }
	public function getNatOp() {
        return $this->natOp;
    }
	public function setNatOp(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NatOp $natOp) {
        $this->natOp = $natOp;
    }
	public function getIndPag() {
        return $this->indPag;
    }
	public function setIndPag(\LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPag $indPag) {
        $this->indPag = $indPag;
    }
	public function getMod() {
        return $this->mod;
    }
	public function setMod(\TIPOSBASICOV310\TMod\TMod $mod) {
        $this->mod = $mod;
    }
	public function getSerie() {
        return $this->serie;
    }
	public function setSerie(\TIPOSBASICOV310\TSerie\TSerie $serie) {
        $this->serie = $serie;
    }
	public function getNNF() {
        return $this->nNF;
    }
	public function setNNF(\TIPOSBASICOV310\TNF\TNF $nNF) {
        $this->nNF = $nNF;
    }
	public function getDhEmi() {
        return $this->dhEmi;
    }
	public function setDhEmi(\TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhEmi) {
        $this->dhEmi = $dhEmi;
    }
	public function getDhSaiEnt() {
        return $this->dhSaiEnt;
    }
	public function setDhSaiEnt(\TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhSaiEnt) {
        $this->dhSaiEnt = $dhSaiEnt;
    }
	public function getTpNF() {
        return $this->tpNF;
    }
	public function setTpNF(\LEIAUTENFEV310\TNFe\InfNFe\Ide\TpNF $tpNF) {
        $this->tpNF = $tpNF;
    }
	public function getIdDest() {
        return $this->idDest;
    }
	public function setIdDest(\LEIAUTENFEV310\TNFe\InfNFe\Ide\IdDest $idDest) {
        $this->idDest = $idDest;
    }
	public function getCMunFG() {
        return $this->cMunFG;
    }
	public function setCMunFG(\TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMunFG) {
        $this->cMunFG = $cMunFG;
    }
	public function getTpImp() {
        return $this->tpImp;
    }
	public function setTpImp(\LEIAUTENFEV310\TNFe\InfNFe\Ide\TpImp $tpImp) {
        $this->tpImp = $tpImp;
    }
	public function getTpEmis() {
        return $this->tpEmis;
    }
	public function setTpEmis(\LEIAUTENFEV310\TNFe\InfNFe\Ide\TpEmis $tpEmis) {
        $this->tpEmis = $tpEmis;
    }
	public function getCDV() {
        return $this->cDV;
    }
	public function setCDV(\LEIAUTENFEV310\TNFe\InfNFe\Ide\CDV $cDV) {
        $this->cDV = $cDV;
    }
	public function getTpAmb() {
        return $this->tpAmb;
    }
	public function setTpAmb(\TIPOSBASICOV310\TAmb\TAmb $tpAmb) {
        $this->tpAmb = $tpAmb;
    }
	public function getFinNFe() {
        return $this->finNFe;
    }
	public function setFinNFe(\LEIAUTENFEV310\TFinNFe $finNFe) {
        $this->finNFe = $finNFe;
    }
	public function getIndFinal() {
        return $this->indFinal;
    }
	public function setIndFinal(\LEIAUTENFEV310\TNFe\InfNFe\Ide\IndFinal $indFinal) {
        $this->indFinal = $indFinal;
    }
	public function getIndPres() {
        return $this->indPres;
    }
	public function setIndPres(\LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPres $indPres) {
        $this->indPres = $indPres;
    }
	public function getProcEmi() {
        return $this->procEmi;
    }
	public function setProcEmi(\LEIAUTENFEV310\TProcEmi $procEmi) {
        $this->procEmi = $procEmi;
    }
	public function getVerProc() {
        return $this->verProc;
    }
	public function setVerProc(\LEIAUTENFEV310\TNFe\InfNFe\Ide\VerProc $verProc) {
        $this->verProc = $verProc;
    }
	public function getDhCont() {
        return $this->dhCont;
    }
	public function setDhCont(\TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhCont) {
        $this->dhCont = $dhCont;
    }
	public function getXJust() {
        return $this->xJust;
    }
	public function setXJust(\LEIAUTENFEV310\TNFe\InfNFe\Ide\XJust $xJust) {
        $this->xJust = $xJust;
    }
	public function getNFref($index) {
        return $this->NFref[$index];
    }
	public function setNFref($index, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref $NFref) {
        $this->NFref[$index] = $NFref;
    }
	public function addNFref(\LEIAUTENFEV310\TNFe\InfNFe\Ide\NFref $NFref) {
        $this->NFref[] = $NFref;
if(count($this->NFref) > 500){throw new \Exception("Property value out of bounds of max 500");}

    }
	public function NFrefLength() {
        return count($this->NFref);
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'cUF',
      1 => 'cNF',
      2 => 'natOp',
      3 => 'indPag',
      4 => 'mod',
      5 => 'serie',
      6 => 'nNF',
      7 => 'dhEmi',
      8 => 'dhSaiEnt',
      9 => 'tpNF',
      10 => 'idDest',
      11 => 'cMunFG',
      12 => 'tpImp',
      13 => 'tpEmis',
      14 => 'cDV',
      15 => 'tpAmb',
      16 => 'finNFe',
      17 => 'indFinal',
      18 => 'indPres',
      19 => 'procEmi',
      20 => 'verProc',
      21 => 
      array (
        'sequence' => 
        array (
          0 => 'dhCont',
          1 => 'xJust',
        ),
      ),
      22 => 'NFref',
    ),
  ),
), \TIPOSBASICOV310\TCodUfIBGE\TCodUfIBGE $cUF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\CNF $cNF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\NatOp $natOp, \LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPag $indPag, \TIPOSBASICOV310\TMod\TMod $mod, \TIPOSBASICOV310\TSerie\TSerie $serie, \TIPOSBASICOV310\TNF\TNF $nNF, \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhEmi, \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhSaiEnt, \LEIAUTENFEV310\TNFe\InfNFe\Ide\TpNF $tpNF, \LEIAUTENFEV310\TNFe\InfNFe\Ide\IdDest $idDest, \TIPOSBASICOV310\TCodMunIBGE\TCodMunIBGE $cMunFG, \LEIAUTENFEV310\TNFe\InfNFe\Ide\TpImp $tpImp, \LEIAUTENFEV310\TNFe\InfNFe\Ide\TpEmis $tpEmis, \LEIAUTENFEV310\TNFe\InfNFe\Ide\CDV $cDV, \TIPOSBASICOV310\TAmb\TAmb $tpAmb, \LEIAUTENFEV310\TFinNFe $finNFe, \LEIAUTENFEV310\TNFe\InfNFe\Ide\IndFinal $indFinal, \LEIAUTENFEV310\TNFe\InfNFe\Ide\IndPres $indPres, \LEIAUTENFEV310\TProcEmi $procEmi, \LEIAUTENFEV310\TNFe\InfNFe\Ide\VerProc $verProc, \TIPOSBASICOV310\TDateTimeUTC\TDateTimeUTC $dhCont, \LEIAUTENFEV310\TNFe\InfNFe\Ide\XJust $xJust, array $NFref) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->cUF = $cUF;
$this->cNF = $cNF;
$this->natOp = $natOp;
$this->indPag = $indPag;
$this->mod = $mod;
$this->serie = $serie;
$this->nNF = $nNF;
$this->dhEmi = $dhEmi;
$this->dhSaiEnt = $dhSaiEnt;
$this->tpNF = $tpNF;
$this->idDest = $idDest;
$this->cMunFG = $cMunFG;
$this->tpImp = $tpImp;
$this->tpEmis = $tpEmis;
$this->cDV = $cDV;
$this->tpAmb = $tpAmb;
$this->finNFe = $finNFe;
$this->indFinal = $indFinal;
$this->indPres = $indPres;
$this->procEmi = $procEmi;
$this->verProc = $verProc;
$this->dhCont = $dhCont;
$this->xJust = $xJust;
$this->NFref = $NFref;

    }
}