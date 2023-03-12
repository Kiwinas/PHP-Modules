<?php
require_once("topp.php")
?>
<?php function Mod($a, $b)
{
	return ($a % $b + $b) % $b;
}

function Cipher($input, $key, $encipher)
{
	$keyLen = strlen($key);

	for ($i = 0; $i < $keyLen; ++$i)
		if (!ctype_alpha($key[$i]))
			return ""; 

	$output = "";
	$nonAlphaCharCount = 0;
	$inputLen = strlen($input);

	for ($i = 0; $i < $inputLen; ++$i)
	{
		if (ctype_alpha($input[$i]))
		{
			$cIsUpper = ctype_upper($input[$i]);
			$offset = ord($cIsUpper ? 'A' : 'a');
			$keyIndex = ($i - $nonAlphaCharCount) % $keyLen;
			$k = ord($cIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
			$k = $encipher ? $k : -$k;
			$ch = chr((Mod(((ord($input[$i]) + $k) - $offset), 26)) + $offset);
			$output .= $ch;
		}
		else
		{
			$output .= $input[$i];
			++$nonAlphaCharCount;
		}
	}

	return $output;
}

function Encipher($input, $key)
{
	return Cipher($input, $key, true);
}
//funksjon for kryptering 

function Decipher($input, $key)
{
	return Cipher($input, $key, false);
}
//funksjon for dekryptering


$passord = "UniversitetIagder";
$kryptertpassord = Encipher($passord, "cipher");
$dekryptertPassord = Decipher($kryptertpassord, "cipher");
echo "din krypterte passord er: ", $kryptertpassord, "<br>";
echo "Den dekrypterte passordet er: ", $dekryptertPassord;
//bruker funksjonene kryptering og dektyptering




?>
<?php
require_once("Bunn.php")
?>


