<?php

require __DIR__ . '/vendor/autoload.php';

use App\Ulvis\UrlShorter;

if(isset($_POST['submit'])){
    $url = $_POST['url'];

    $short = UrlShorter::short($url);
}else{
    $short = '';
}

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Daniel Silva</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Encurtador de URL</h2>
        </div>

        <form class="form">
            <label for="url">URL</label>
            <input type="url" id="url" value="<?php echo $short ?>" name="url" placeholder="https://example.com">

            <span class="forgot"><a href="index.html">Gerar novo url</a></span>

            <button type="button" id="copiar">Copiar</button>
        </form>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>