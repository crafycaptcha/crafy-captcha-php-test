<?php
// 1. Requerir el autoloader de Composer (usualmente en el index principal de la app)
require_once __DIR__ . '/vendor/autoload.php';

// 2. Importar tu clase usando el namespace que definiste
use Crafy\Captcha\CrafyCAPTCHA;

// 3. Instanciar la clase con las llaves del proyecto
$publicKey = 'pk_tu_llave_publica';
$secretKey = 'sk_tu_llave_secreta';
$captcha = new CrafyCAPTCHA($publicKey, $secretKey);

// 4. Crear el Flow y obtener las opciones encriptadas
try {
    $crafyOptions = $captcha->createFlow([
        'theme' => 'dark',
        'lang' => 'es'
    ]);

    echo $crafyOptions; // Esto se usará en el frontend para renderizar el CAPTCHA
} catch (Exception $e) {
    // Manejo de errores si no se puede escribir el nonce o hay error criptográfico
    die("Error al generar el CAPTCHA: " . $e->getMessage());
}
?>