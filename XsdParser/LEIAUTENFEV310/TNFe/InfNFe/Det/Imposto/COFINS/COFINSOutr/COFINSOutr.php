<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr;



/**
    Código de Situação Tributária do COFINS:
49 - Outras Operações de Saída
50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno
51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno
52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação
53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno
54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação
55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação
56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno
61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno
62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação
63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno
64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação
65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação
66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
67 - Crédito Presumido - Outras Operações
70 - Operação de Aquisição sem Direito a Crédito
71 - Operação de Aquisição com Isenção
72 - Operação de Aquisição com Suspensão
73 - Operação de Aquisição a Alíquota Zero
74 - Operação de Aquisição sem Incidência da Contribuição
75 - Operação de Aquisição por Substituição Tributária
98 - Outras Operações de Entrada
99 - Outras Operações.
**/


class COFINSOutr {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pCOFINS',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'qBCProd',
              1 => 'vAliqProd',
            ),
          ),
        ),
      ),
      2 => 'vCOFINS',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST Código de Situação Tributária do COFINS:
49 - Outras Operações de Saída
50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno
51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno
52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação
53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno
54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação
55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação
56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno
61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno
62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação
63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno
64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação
65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação
66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
67 - Crédito Presumido - Outras Operações
70 - Operação de Aquisição sem Direito a Crédito
71 - Operação de Aquisição com Isenção
72 - Operação de Aquisição com Suspensão
73 - Operação de Aquisição a Alíquota Zero
74 - Operação de Aquisição sem Incidência da Contribuição
75 - Operação de Aquisição por Substituição Tributária
98 - Outras Operações de Entrada
99 - Outras Operações.  */
            protected $CST;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor da BC do COFINS  */
            protected $vBC;
	            /** @var \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 Alíquota do COFINS (em percentual)  */
            protected $pCOFINS;
	            /** @var \TIPOSBASICOV310\TDec_1204v\TDec_1204v Quantidade Vendida (NT2011/004)   */
            protected $qBCProd;
	            /** @var \TIPOSBASICOV310\TDec_1104v\TDec_1104v Alíquota do COFINS (em reais) (NT2011/004)  */
            protected $vAliqProd;
	            /** @var \TIPOSBASICOV310\TDec_1302\TDec_1302 Valor do COFINS  */
            protected $vCOFINS;

    public function getCST() {
        return $this->CST;
    }
	public function setCST(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST $CST) {
        $this->CST = $CST;
    }
	public function getVBC() {
        return $this->vBC;
    }
	public function setVBC(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC) {
        $this->vBC = $vBC;
    }
	public function getPCOFINS() {
        return $this->pCOFINS;
    }
	public function setPCOFINS(\TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCOFINS) {
        $this->pCOFINS = $pCOFINS;
    }
	public function getQBCProd() {
        return $this->qBCProd;
    }
	public function setQBCProd(\TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd) {
        $this->qBCProd = $qBCProd;
    }
	public function getVAliqProd() {
        return $this->vAliqProd;
    }
	public function setVAliqProd(\TIPOSBASICOV310\TDec_1104v\TDec_1104v $vAliqProd) {
        $this->vAliqProd = $vAliqProd;
    }
	public function getVCOFINS() {
        return $this->vCOFINS;
    }
	public function setVCOFINS(\TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'sequence' => 
    array (
      0 => 'CST',
      1 => 
      array (
        'choice' => 
        array (
          0 => 
          array (
            'sequence' => 
            array (
              0 => 'vBC',
              1 => 'pCOFINS',
            ),
          ),
          1 => 
          array (
            'sequence' => 
            array (
              0 => 'qBCProd',
              1 => 'vAliqProd',
            ),
          ),
        ),
      ),
      2 => 'vCOFINS',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST $CST, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vBC, \TIPOSBASICOV310\TDec_0302a04\TDec_0302a04 $pCOFINS, \TIPOSBASICOV310\TDec_1204v\TDec_1204v $qBCProd, \TIPOSBASICOV310\TDec_1104v\TDec_1104v $vAliqProd, \TIPOSBASICOV310\TDec_1302\TDec_1302 $vCOFINS) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->CST = $CST;
$this->vBC = $vBC;
$this->pCOFINS = $pCOFINS;
$this->qBCProd = $qBCProd;
$this->vAliqProd = $vAliqProd;
$this->vCOFINS = $vCOFINS;

    }
}