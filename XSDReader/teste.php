<?php
$document = new DOMDocument();
$document->loadXML(file_get_contents("../result/teste.xsd"));

$nrChildNodes = $document->childNodes->length;
for ($i = 0; $i < $nrChildNodes; $i++) {
    $childNode = $document->childNodes->item($i);
    switch ($childNode->nodeName) {
        case 'xs:schema':
            var_dump(createSchema($childNode));
            break;
    }
}

function getAttributes(DOMNode $node) {
    $attributes = array();
    for($i = 0; $i < $node->attributes->length; $i++) {
        $attribute = $node->attributes->item($i);
        $attributes[$attribute->nodeName] = $attribute->nodeValue;
    }

    return $attributes;
}

function createSimpleType(DOMNode $node) {
    $attributes = getAttributes($node);
    return array(
        'name' => $attributes['name'],
        'type' => $attributes['type']
    );
}

function createComplexType(DOMNode $node) {
    $attributes = array();
    for ($i = 0; $i < $node->childNodes->length; $i++) {
        $childNode = $node->childNodes->item($i);
        switch ($childNode->nodeName) {
            case 'xs:sequence':
                break;
            case 'xs:attribute':
                $attributes[] = createSimpleType($childNode);
                break;
            default:
                echo "Unsupported node type {$node->name} in createComplexType\n";
                break;
        }
    }

    return array(

    );
}

function createNamedComplexType(DOMNode $node) {
    $mapping = createComplexType($node);
    $attributes = getAttributes($node);
}

function createElement(DOMNode $node) {
    $attributes = array();
    for($i = 0; $i < $node->attributes->length; $i++) {
        $attribute = $node->attributes->item($i);
        $attributes[$attribute->nodeName] = $attribute->nodeValue;
    }

    $mapping = array(
        "name" => $attributes["name"]
    );

    return $mapping;
}

function createSchema(DOMNode $schemaNode) {
    $mapping = array();
    $types   = array();
    for ($i = 0; $i < $schemaNode->childNodes->length; $i++) {
        $childNode = $schemaNode->childNodes->item($i);
        switch ($childNode->nodeName) {
            case '#test': continue;
            case 'xs:element':
                $mapping[] = createElement($childNode);
                break;
            case 'xs:complexType':
                createComplexType($childNode);
                break;
            case 'xs:simpleType';
                createSimpleType($childNode);
                break;
        }
    }

    return $mapping;
}