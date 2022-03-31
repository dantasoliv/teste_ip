<!DOCTYPE html>
<html lang="en">
<!--head-->
<?php
    include('head.html');
?>
<body>
    <section class="principal">
        
        <?php
        $teste = 'Teste IP:';
        echo "<h3>$teste</h3>";
        echo "<hr>";
        $ip = getenv ("REMOTE_ADDR"); // função para identificar ip do usuario
        //$ip = $_SERVER['REMOTE_ADDR']; // outra função para identificar ip do usuario
        echo "<h2>$ip</h2>";
        ?>
    </section>
</body>
</html>


