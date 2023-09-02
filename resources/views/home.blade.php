<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encurtador URL</title>
    <link href="http://localhost/encurtadorUrl/laravel/resources/css/app.css" rel="stylesheet">
</head>
<body>
    <main class=".bg-secondary.bg-gradient" >        
        <div class="container_url">
            <h1 class="h1">Encurtador</h1>
            <p>Seja bem vindo insira uma url</p>  
            <form method="POST" action="">
                    <input type="text" name="url" class="form-control" placeholder="https://github.com/GileuNeto">
                <div class="d-grid p-2 gap-2 col-6 mx-auto">
                    <button id="encurtar" class="btn btn-dark">Encurtar</button>
                    <button id="copiar" class="btn btn-success">Copiar</button>
                </div>
            </form>  
            <!-- mostra ao usuario sua url curta -->          
            <?php 
                require '/Wamp/www/encurtadorUrl/laravel/vendor/autoload.php';

                use \App\Models\UrlShortener;

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['url'])) {
                    $url = $_POST['url'];
                    $short = UrlShortener::short($url);  
                    
                    echo "<p id='short-url'>Está é a sua url curta = ".$short."</p>"; 
                }

                ?>
        </div>
    </main>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>     
</body>
</html>