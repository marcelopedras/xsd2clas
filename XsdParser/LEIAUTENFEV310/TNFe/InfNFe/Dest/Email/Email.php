<?php
namespace LEIAUTENFEV310\TNFe\InfNFe\Dest\Email;



/**
    Informar o e-mail do destinatário. O campo pode ser utilizado para informar o e-mail
de recepção da NF-e indicada pelo destinatário
**/


class Email {
    
    
                /** @var string 
base = TString
maxLength - 60
minLength - 1
whiteSpace - preserve
  */
            protected $value;

    public function __construct($value) {
        $this->value = $value;

    }
}