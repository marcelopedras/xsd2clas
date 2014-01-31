<?php
namespace XML\LeiauteNFe;

use Util\XMLDocument;
use XML\TiposBasico\TCodUfIBGE;

/** identificação da NF-e */
class Ide extends XMLDocument{

    /** @var TCodUfIBGE Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE. */
    protected $cUF;
    /** @var CNF Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e. */
    protected $cNF;
    /** @var NatOp Descrição da Natureza da Operação */
    protected $natOp;
    /** @var TMod Código do modelo do Documento Fiscal. 55 = NF-e; 65 = NFC-e   */
    protected $mod;
    /** @var TSerie Série do Documento Fiscal
    série normal 0-889
    Avulsa Fisco 890-899
    SCAN 900-999  */
    protected  $serie;
    /** @var  INF Número do Documento Fiscal */
    protected $nfe;

} 