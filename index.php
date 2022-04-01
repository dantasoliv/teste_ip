<!DOCTYPE html>
<html lang="en">
<!--head-->
<?php
    include('head.html');
?>
<body>
    <section class="principal">
        <?php
        $teste = 'IP Público:';
        echo "<h3>$teste</h3>";
        echo "<hr>";
        $ip = getenv ("REMOTE_ADDR"); // função para identificar ip do usuario
        // $ip = file_get_contents('https://api.ipify.org'); // Solicitando dados de uma API para identifiar o IP publico
        echo "<h2>$ip</h2>";
        $lista = file_get_contents("https://api.techniknews.net/ipgeo/{$ip}"); # Solicitando para uma API dados da geolocalização de um IP
        $info = json_decode($lista, true);
        $pais = $info['country'];
        $cidade = $info['city'];
        $provedor = $info['isp'];
        echo "<h4>Pais: $pais</h4>";
        echo "<h4>Cidade: $cidade</h4>";
        echo "<h4>Provedor: $provedor</h4>";
        ?>
    </section>
</body>
</html>


