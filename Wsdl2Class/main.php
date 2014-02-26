<?php
/**
 * Created by PhpStorm.
 * User: daymannovaes
 * Date: 17/02/14
 * Time: 17:15
 */

require "../ClassGenerator/registerAll.php";
require "Util.php";

use XSD2Class\GlassGenerator\PHPBlock;
use XSD2Class\GlassGenerator\PHPClass;
use XSD2Class\GlassGenerator\Type\Object;
use XSD2Class\GlassGenerator\PHPConstant;
use XSD2Class\GlassGenerator\PHPMethod;
use XSD2Class\GlassGenerator\PHPValue;
use XSD2Class\GlassGenerator\PHPParameter;
use XSD2Class\GlassGenerator\PHPNamespace;
use XSD2Class\GlassGenerator\PHPProperty;
use XSD2Class\GlassGenerator\Type\Primary;


$file_path = __DIR__.DIRECTORY_SEPARATOR."Sources".DIRECTORY_SEPARATOR;

$fileName = "GnreLoteRecepcao.wsdl";
$document = new DOMDocument();
$document->loadXML(file_get_contents($file_path.$fileName));

//------------------------------------------------------------
class TraverseWSDL {
    protected $parentNode;
    protected $messages;
    protected $elements;

    function __construct($node) {
        $this->parentNode = $node;

        $this->messages = $node->getElementsByTagName("message");

        $this->elements = $node->getElementsByTagName("element");
        //$this->createTypes($elements);

        $this->traverse($node);
    }

//---- Percorre o arquivo WSDL criando todas as classes
    public function traverse($node) {

        //PORTTYPE define uma classe
        $portTypes = $node->getElementsByTagName("portType");
        $this->createClasses($portTypes, true, "Generated\\Client");

        $this->createClasses($portTypes, false, "Generated\\Server");
    }


//---- MUDA isso ae
    //public function newServer($classes, $code) {
        /*$server = new PHPClass("qualquer coisa");

        foreach($classes as $class) {
            //OPERATION define um método
            $operations = $class->getElementsByTagName("operation");

            $class->addProperty(new PHPProperty("client", new \XSD2Class\GlassGenerator\Type\Object("SoapClient"), PHPProperty::VISIBILITY_PROTECTED));
            $class = $this->setConstruct($class);

            $class = $this->setMethods($operations, $class, $isClient);



            echo $class->asPHP();
            createFile("Wsdl2Class\\".$namespace, $class->getName(), $class, $isClient);
        }*/
    //}

//------ CRIA TODAS AS CLASSES ------
    //---- Cria todas as classes
    /*
    * para cada classe, cria uma classe nova
    * classe passa a ser uma classe com construtor
    * classe passa a ser uma classe com métodos
    * cria um arquivo com a classe
    */
    public function createClasses($classes, $isClient = true, $namespace) {
        foreach($classes as $class) {
            //OPERATION define um método
            $operations = $class->getElementsByTagName("operation");

            $class = new PHPClass(valid($class->getAttribute("name")));

            if($isClient) {
                //Cria um atributo e instancia o construtor
                $class->addProperty(new PHPProperty("client", new \XSD2Class\GlassGenerator\Type\Object("SoapClient"), PHPProperty::VISIBILITY_PROTECTED));
                $class = $this->setConstruct($class);
            }

            $class = $this->setMethods($operations, $class, $isClient);



            echo $class->asPHP();
            createFile("Wsdl2Class\\".$namespace, $class->getName(), $class, $isClient);
        }
    }

    //---- Cria o construtor da classe
    public function setConstruct($class) {
        $constructorCode = new PHPBlock("\$this->client = new SoapClient(null, array('location' => \$location, 'uri' => \$uri));");

        $parameters[] = new PHPParameter("location");
        $parameters[] = new PHPParameter("uri");

        $class->addMethod(new PHPMethod("__construct", $constructorCode, $parameters, PHPMethod::VISIBILITY_PUBLIC));
        return $class;
    }

    //---- Pega um classe, adiciona todos métodos e retorna a classe de novo
    /*
    * para cada método: pega os parametros
    * adiciona o método na classe
    * retorna a classe novamente, com os métodos adicionados
    */
    public function setMethods($methods, $class, $isClient) {
        foreach($methods as $method) {

            $parameters = $method->getElementsByTagName("input");
            //Parameters deixa de ser um input para ser um parametro de verdade
            $parameters = $this->getParameters($parameters);

            if($isClient) {
                $return = $this->setReturn($method);
            }

            $class->addMethod(
                new PHPMethod(
                    valid($method->getAttribute("name")), $return, $parameters, PHPMethod::VISIBILITY_PUBLIC));
        }
        return $class;
    }

    //---- Retorna o "retorno" de uma classe
    /*
    * pega o nome do output
    * valida o retorno
    * retorna o "retorno" como um bloco de codigo
    */
    public function setReturn($method) {
        $return = "return \$this->client->";
        $return = $return. valid($method->getAttribute("name")). "(";

        $parameters = $method->getElementsByTagName("input");
        foreach($parameters as $parameter) {
            $parameter = removePrefix($parameter->getAttribute("message"));
            $parameter = valid($parameter);
            $return = $return. "$". $parameter. ", ";
        }
        $return = preg_replace("/, $/", "", $return);

        //$return = $method->getElementsByTagName("output")->item(0)->getAttribute("message");
/*
        $return = removePrefix($return);
        $return = valid($return);
*/
        $return = new PHPBlock($return. ");");
        return $return;
    }

    //---- Retorna todos os parâmetros de uma classe
    public function getParameters($AUXparameters) {
        $parameters = NULL;
        foreach($AUXparameters as $parameter) {

            //Nome do parâmetro
            $parameter = $parameter->getAttribute("message");
            $type = $this->getType(removePrefix($parameter));

            $parameter = removePrefix($parameter); //remove o prefixo
            $parameter = valid($parameter); //remove caracteres não alfanuméricos

            //Cria um novo parâmetro passando o seu nome
            $parameter = new PHPParameter($parameter, new Object($type));
            //Adicina o parametro no array "parameters"
            $parameters[] = $parameter;
        } //Agora, parameters contém todos os parametros como classes
        return $parameters;
    }
//-- END "cria todas as classes"

    public function getType($parameter) {
        $message = $this->getMessageByName($parameter);
        if($message == null)
            return null;

        $elementName = $message->getElementsByTagName("part");
        $elementName = $elementName->item(0)->getAttribute("element");

        $element = $this->getElementByName(removePrefix($elementName));
        if($element->getAttribute("type") == null) {
            $this->createType($element, "Wsdl2Class\\Generated\\Types");
            return $element->getAttribute("name");
        }
        return $element->getAttribute("type");
    }

    public function getMessageByName($name) {
        foreach($this->messages as $message) {
            if($message->getAttribute("name") == $name) {
                return $message;
            }
        }
        return null;
    }
    public function getElementByName($name) {
        foreach($this->elements as $element) {
            if($element->getAttribute("name") == $name)
                return $element;
        }
        return null;
    }

    public function createType($type, $url) {
        $class = new PHPClass($type->getAttribute("name"));


        $elements = $type->getElementsByTagName("element");
        $attributes = null;
        foreach($elements as $element) {
            $types = $element->getAttribute("type");
            if($types == null) {
                $types = $this->createType($element, $url. "\\". $element->getAttribute("name"));
            }
            echo "\nteste do atual: ". $type->getAttribute("name");
            echo "\nteste do pai: ". $element->parentNode->getAttribute("name");
            if($element->parentNode->getAttribute("name") == $type->getAttribute("name"))
                $class->addProperty(new PHPProperty($element->getAttribute("name"), new Object(removePrefix($types))));
        }
        createFile($url, $class->getName(), $class, true);
        return $type->getAttribute("name");
    }

}

$t = new TraverseWSDL($document->documentElement);
