<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// SDK de Mercado Pago


require '/vendor/autoload.php';


// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6718728269189792-112017-dc8b338195215145a4ec035fdde5cedf-491494389');


while ($post = each($_POST))
{
echo $post[0] . " = " . $post[1]."<br>";
} 



?>

<form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>
