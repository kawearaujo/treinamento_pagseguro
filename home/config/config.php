<?php
require_once __DIR__ . "/../config/environment.php";
// session_start();
define("HOST", "localhost");
define("USER", "kawe_rlGbZy9xo6e");
define("PASSWORD", "tjzk1wLE76ZOA5V"); 
define("DATABASE", "kawe_re9agencia_com_br"); 
define("CHARSET", "utf8");
define("PAGSEGURO_TOKEN", "221DF1406C454C69A4D1CD7A63579241");
define("PAGSEGURO_VENDEDOR","kawepetro@gmail.com");
// define("PAGSEGURO_POSTBACK","https://webhook.site/0f04d4db-78df-45a9-9161-bee86b9615ad");
define("PAGSEGURO_POSTBACK","https://kawe.re9agencia.com.br/home/funcoes.php");

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

if (!$mysqli->set_charset(CHARSET)) {
	printf("Error loading character set " . CHARSET . ": %s\n", $mysqli->error);
	exit();
}

function antisql($mysqli, $variavel)
{
	return $mysqli->real_escape_string(strip_tags(trim($variavel)));
}

if (!function_exists('mb_ucfirst')) {

	/**
	* Make a string's first character uppercase
	* @param string $str The input string.
	* @param string $encoding The encoding parameter is the character encoding.
	* @return string
	*/

	function mb_ucfirst($str, $encoding = 'utf-8')
	{
		static $use_mb = null;

		if (is_null($use_mb)) {
			$use_mb = function_exists('mb_convert_encoding');
		}

		if ($use_mb) {
			return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) . mb_substr($str, 1, mb_strlen($str, $encoding), $encoding);
		} else {
			return ucfirst($str);
		}
	}
}
