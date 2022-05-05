<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php

include __DIR__ . '../database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>php-ajax-dischi</title>
</head>
<body>
<div class="container">
        <div class="row">
            <?php foreach($albums as $album) { ?>

                <div class="col">

                    <img src="<?php echo $album['poster'] ?>" alt="img" class="w-25" >
                    <h3>    
                        <?php echo $album['title'] ?>
                    </h3>
                    <p>
                        <?php echo $album['author'] ?>
                    </p>
                    <p>
                        <?php echo $album['year'] ?>
                    </p>
                    
                </div>





            <?php } ?>
        </div>

    </div>

    
</body>
</html>