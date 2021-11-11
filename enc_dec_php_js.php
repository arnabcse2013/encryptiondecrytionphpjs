<?php
use Nullix\CryptoJsAes\CryptoJsAes;
require "CryptoJsAes.php";

// encrypt
$originalValue = ["this is value 1", "this is value 2"]; // this could be any value
$password = "arnab@roy#";
$encrypted = CryptoJsAes::encrypt($originalValue, $password);

// decrypt
$encrypted = $encrypted;
$password = "arnab@roy#";
$decrypted = CryptoJsAes::decrypt($encrypted, $password);

echo "Encrypted: " . $encrypted . "\n";
echo "<br/>Decrypted: " . print_r($decrypted, true) . "\n";

?>

<script type="text/javascript" src="/cryptojs-aes.min.js"></script>
<script type="text/javascript" src="/cryptojs-aes-format.js"></script>
<script>
      (function () {
        // encrypt value
        let valueToEncrypt = 'this is value 1'; // this could also be object/array/whatever
        let encpassword = 'arnab@roy#';
        let encrypted = CryptoJSAesJson.encrypt(valueToEncrypt, encpassword);
        console.log('Encrypted:', encrypted);
		
		let encryptedval = encrypted;
        let decpassword = 'arnab@roy#';
        let decrypted = CryptoJSAesJson.decrypt(encryptedval, decpassword);
        console.log('Decrypted:', decrypted);
		
      })();
</script>