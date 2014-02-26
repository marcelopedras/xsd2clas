<?php
/**
 * Created by PhpStorm.
 * User: daymannovaes
 * Date: 21/02/14
 * Time: 12:25
 */

//------------------------------------------------------------
//------------------------------------------------------------
/*class Method {
    public $name;
    public $parameters;
    public $return;
//------------------------------------------------------------
//---- CONSTRUCTORS
    function __construct($name) {
        $this->name = $name;

        $this->parameters = Array();

        //$this->createTest();
    }
//------------------------------------------------------------
//---- GET AND SET FUNCTIONS
    //---- NAME
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    //---- PARAMETERS
    public function setParameters($parameters) {
        $this->parameters = $parameters;
    }
    public function addParameter($parameter) {
        $this->parameters[] = $parameter;
    }
    public function getParameters() {
        return $this->parameters;
    }

    //---- RETURN
    public function setReturn($return) {
        $this->return = $return;
    }
    public function getReturn() {
        return $this->return;
    }
//------------------------------------------------------------
//---- OUTPUT FUNCTIONS
    public function echoMethod() {
        $nl = "\n"; //new line, \n or <br>
        $echo = "public function ". $this->name. "(";

        foreach($this->parameters as $param) {
            $echo = $echo. "$". $param. ", ";
        }

        $echo = $echo. ") {".$nl."..... return $". $this->return. ";".$nl."}".$nl."";
        $echo = str_replace(", )", ")", $echo);

        echo $echo;
    }
}
$metodo = new Method("Método teste");
//$metodo->createFunction();*/




/*
//------------------------------------------------------------
//------------------------------------------------------------
class TraverseMehod {
    protected $method;
    function __construct($node) {
        //Pega o nome do método atraves do atributo wsdl
        $nameMethod = $node->getAttributeNode("name")->value;

        //cria o método já com um nome
        $this->method = new Method($nameMethod);

        //percorre o metodo para criar seus parâmetros e retorno
        $this->traverseMethod($node, "....");

        $this->method->createFunction();
    }

    public function traverseMethod($node, $tab) {
        //echo "Method name: ". $this->method->getName();

        //if($node->nodeName != "#text")
       //     echo $tab. $node->nodeName. "<br>";

        //se a tag for um input, adiciona um parametro
        if($node->nodeName == "wsdl:input") {
            $parameter = $node->getAttributeNode("message")->value;
            //retira qualquer prefixo
            $parameter = preg_replace("/.*:/", "", $parameter);

            $this->method->addParameter($parameter);
        }

        //se a tag for um output, adiciona um retorno
        else if($node->nodeName == "wsdl:output") {
            $return = $node->getAttributeNode("message")->value;
            $return = preg_replace("/.*:/", "", $return);

            $this->method->setReturn($return);
        }

        if($node->hasChildNodes()) {
            $children = $node->childNodes;

            foreach($children as $child) {
                $this->traverseMethod($child, $tab."....");
            }
        }
    }
}



/*
    public function traverse($node, $tab) {
        /**SE a tag tiver filhos, percorre seus filhos
            funciona sem o if, pois o foreach é inteligente,
            mas não é necessario percorrer o array se ele não tem filhos

        echo "<br>".$tab. "< ";
        echo $node->nodeName. ">";
        if($node->nodeName == "wsdl:operation") {
            echo "<span style='color:red;'>";
            $this->getNameMethod($node);
        }
        if($node->hasChildNodes()) {
            echo " | node type: ". $node->nodeType;

            $children = $node->childNodes;
            foreach($children as $child) {
                $this->traverse($child, $tab.".....");
            }
        }
        if($node->hasChildNodes()) {
            echo "<br>".$tab."/". $node->nodeName;
            if($node->nodeName == "wsdl:operation")
                echo "</span>";
        }
    }*/
/*
public function traverse($node) {
    //Se for um método, a iteração se dará
    //no tipo método
    if($node->nodeName == "wsdl:operation" && $node->parentNode->nodeName != "wsdl:binding") {
        new TraverseMehod($node, "....");
    }
    /*else if($node->nodeName == "wsdl:message") {
       // new TraverseMessage($node, "....");
    }


    if($node->hasChildNodes()) {
        $children = $node->childNodes;

        foreach($children as $child) {
            $this->traverse($child);
        }
    }
}*/