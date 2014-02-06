<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS;



/**
    Dados do COFINS
**/


class COFINS {
    
    
                /** @var array  */
            public static $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'COFINSAliq',
      1 => 'COFINSQtde',
      2 => 'COFINSNT',
      3 => 'COFINSOutr',
    ),
  ),
);
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq Código de Situação Tributária do COFINS.
 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);  */
            protected $COFINSAliq;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde Código de Situação Tributária do COFINS.
03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;  */
            protected $COFINSQtde;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT Código de Situação Tributária do COFINS:
04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
06 - Operação Tributável - Alíquota Zero;
07 - Operação Isenta da contribuição;
08 - Operação Sem Incidência da contribuição;
09 - Operação com suspensão da contribuição;  */
            protected $COFINSNT;
	            /** @var \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr Código de Situação Tributária do COFINS:
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
            protected $COFINSOutr;

    public function getCOFINSAliq() {
        return $this->COFINSAliq;
    }
	public function setCOFINSAliq(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq $COFINSAliq) {
        $this->COFINSAliq = $COFINSAliq;
    }
	public function getCOFINSQtde() {
        return $this->COFINSQtde;
    }
	public function setCOFINSQtde(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde $COFINSQtde) {
        $this->COFINSQtde = $COFINSQtde;
    }
	public function getCOFINSNT() {
        return $this->COFINSNT;
    }
	public function setCOFINSNT(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT $COFINSNT) {
        $this->COFINSNT = $COFINSNT;
    }
	public function getCOFINSOutr() {
        return $this->COFINSOutr;
    }
	public function setCOFINSOutr(\LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr $COFINSOutr) {
        $this->COFINSOutr = $COFINSOutr;
    }
	public function __construct(array  $_indicatorMetadata = array (
  '_elements' => 
  array (
    'choice' => 
    array (
      0 => 'COFINSAliq',
      1 => 'COFINSQtde',
      2 => 'COFINSNT',
      3 => 'COFINSOutr',
    ),
  ),
), \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq $COFINSAliq, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde $COFINSQtde, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT $COFINSNT, \LEIAUTENFEV310\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr $COFINSOutr) {
        $this->_indicatorMetadata = $_indicatorMetadata;
$this->COFINSAliq = $COFINSAliq;
$this->COFINSQtde = $COFINSQtde;
$this->COFINSNT = $COFINSNT;
$this->COFINSOutr = $COFINSOutr;

    }
}