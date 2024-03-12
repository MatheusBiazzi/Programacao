<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosseno</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        /*
         colocar estilos de cada página aqui para ficar feio nelas
         OK 
        */
        main{
            background-color: white;
            height: inherit;
        }
    </style>
</head>
<body>
    <main>
        <!--Forms padrão p/cada página-->
        <h1>cos()</h1>
        <p>A função cos() calcula função trigonométrica do Cosseno</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="icos">Digite o valor do cosseno desejado:</label>
                <input type="number" name="icos" id="icos" min="0">
            </p>
            <p>
                <input type="submit" value="Tente você mesmo">
            </p>
        </form>
        <?php 
        error_reporting(0);
        ini_set('display_errors', 0);

        $vlcos = $_GET['icos'];

        $vlconvert = deg2rad($vlcos);
        $vlfinalcos = cos($vlconvert);

        echo "<p>O cosseno de $vlcos é : $vlfinalcos </p>";
        ?>
        <p><a href="../index.htm">Volte à página principal</a></p>
    </main>
    <footer>
        <p>&copy;Matheus H. Biazzi</p>
    </footer>
</body>
</html>