<?php

// Descrizione
// Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
// Stampare tutti i nostri hotel con tutti i dati disponibili.
// Iniziate in modo graduale.
// Prima stampate in pagina i dati, senza preoccuparvi dello stile.
// Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

// Bonus:
// 1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
// 2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
// NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
// Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap CDN -->
</head>
<body>
    <div class="container">
        <h1 class="text-center fw-semibold my-3">PHP Hotel</h1>
        <h3 class="my-3">I nostri hotels:</h3>
        <form action="index.php" method="GET" class="mb-3">
            <label for="parking" class="mb-2">Filtra per disponibilità parcheggio:</label>
            <select name="parking" id="parking" class="form-select w-auto" aria-label="Default select example">
                <option selected>Nessun filtro</option>
                <option value="true">Sì</option>
                <option value="false">NO</option>
            </select>
        </form>
        <table class="table">
            <?php foreach( $hotels as $hotel) { ?>
                <thead class="table-light text-center">
                    <tr>
                        <th scope="col" colspan="2" class="col-4 fs-5"><?php echo $hotel['name'] ?></th>
                    </tr>
                </thead>
                <tbody class="mb-4">
                    <tr>
                        <th scope="row">Descrizione:</th>
                        <td><?php echo $hotel['description'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Parcheggio:</th>
                        <td><?php echo $hotel['parking'] ? 'Sì' : 'No' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Voto:</th>
                        <td><?php echo $hotel['vote'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Distanza dal centro:</th>
                        <td><?php echo $hotel['distance_to_center'] .' km' ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>