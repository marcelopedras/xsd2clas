<?php
namespace XSD2Class\GlassGenerator;

interface PHPType {

    public function getSetterDoc();
    public function getSetterSign();

    public function getGetterDoc();
    public function getVarDoc();

    //This last ones are only for collections.
    public function getAdderDoc();
    public function getAdderSign();
} 