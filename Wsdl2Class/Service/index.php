<?php
	$server = new SoapServer(null, array('uri' => "localhost/xsd2clas"));

	function hello($name) {
		return "Hello ".$name;
	}

	function fileReader($url, $type) {
		switch($type) {
			case "JSON":
				return readJSON($url);
				break;
			case "XML":
				return readXML($url);
				break;
		}
		//default
		return "Unknow type";
	}

	function readJSON($url) {
		$retorno = "<h2>O arquivo JSON foi lido</h2>";
		//file = abre o arquivo e o transforma em um array, onde cada linha é um elemento do array
		//implode = transforma um array em string

		//JSON no formato string
		$json_str = implode("", file($url));

		//JSON em array (objeto json)
		$json_obj = json_decode($json_str, true);

		foreach($json_obj as $field)
			$retorno.=$field . "<br>";

		return $retorno;
	}
	function readXML($url) {
			$retorno = "<h2>O arquivo XML foi lido</h2>";

			//LE O ARQUIVO XML

			return $retorno;
		}

	$server->addFunction("hello");

	$server->addFunction("fileReader");
	//$server->addFunction("readJSON");
	//$server->addFunction("readXML");

	if($_SERVER["REQUEST_METHOD"]== "POST") {
		$server->handle();
	}
	else {
		$functions = $server->getFunctions();
		//var_dump($server);

		foreach($functions as $func) {
			print $func."<br>";
		}
	}
echo "so de zua";
?>