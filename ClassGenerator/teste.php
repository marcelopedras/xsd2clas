<?php

use XSD2Class\GlassGenerator\PHPBlock;
use XSD2Class\GlassGenerator\PHPClass;
use XSD2Class\GlassGenerator\PHPConstant;
use XSD2Class\GlassGenerator\PHPMethod;
use XSD2Class\GlassGenerator\PHPValue;
use XSD2Class\GlassGenerator\PHPNamespace;
use XSD2Class\GlassGenerator\PHPProperty;
use XSD2Class\GlassGenerator\Type\Primary;

require "registerAll.php";

$acmeNamespace = new PHPNamespace("Acme");
$utilNamespace = new PHPNamespace("Util", $acmeNamespace);

//echo $utilNamespace->asPHP();

$toolClass = new PHPClass("Tool");
//$toolClass->setAbstract(true);
$toolClass->setNamespace($utilNamespace);
$toolClass->addConstant(new PHPConstant("MATERIAL_IRON","iron"));
$toolClass->addConstant(new PHPConstant("MATERIAL_STEEL","steel"));
$toolClass->addConstant(new PHPConstant("MATERIAL_WOOD","wood"));

$toolClass->addProperty(new PHPProperty("lastSerialNumber", new Primary(Primary::TYPE_INTEGER), PHPProperty::VISIBILITY_PUBLIC, new PHPValue(0), PHPProperty::IS_STATIC));
$toolClass->addProperty(new PHPProperty("serialNumber", new Primary(Primary::TYPE_INTEGER), PHPProperty::VISIBILITY_PRIVATE));
$toolClass->addProperty(new PHPProperty("material", new Primary(Primary::TYPE_STRING), PHPProperty::VISIBILITY_PROTECTED));

$constructorCode = new PHPBlock("\$this->material = \$material");
$constructorParameters = array(
    new \XSD2Class\GlassGenerator\PHPParameter("material"),
);
$toolClass->addMethod(new PHPMethod("__construct", $constructorCode, $constructorParameters, PHPMethod::VISIBILITY_PUBLIC));

echo $toolClass->asPHP(), "\n";
echo "---------------------------------------------------\n";
$anvilClass = new PHPClass("Anvil", $toolClass);
$anvilClass->addMethod(new PHPMethod("__construct", new PHPBlock("parent::__construct(\\Acme\\Util\\Tool::MATERIAL_IRON);")));
$anvilClass->setNamespace($utilNamespace);
echo $anvilClass->asPHP(), "\n";