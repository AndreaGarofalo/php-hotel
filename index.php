<?php

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

    $checked = false;

    if(isset($_GET['parking'])) {
        $checked = 'checked';

        $filtered_hotels = [];

        foreach($hotels as $hotel) {
            if($hotel['parking']) $filtered_hotels[] = $hotel;
        }

        $hotels = $filtered_hotels;
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
      integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Hotel</h1>
        <form action="#" method="GET">
          <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="parking"
                name="parking"
              />
              <label class="form-check-label" for="parking">
                Mostra solo hotel con parcheggio
              </label>
            </div>
            <button class="btn btn-small btn-primary">Filtra</button>
          </div>
        </form>
      </header>
      <main>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Descrizione</th>
              <th scope="col">Parcheggio</th>
              <th scope="col">Voto</th>
              <th scope="col">Distanza</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hotels as $hotel) : ?>
            <tr>
              <th scope="row"><?= $hotel['name']?></th>
              <td><?= $hotel['description']?></td>
              <td>
                <i
                  class="<?= $hotel['parking'] ? 'bi-check-circle text-success' : 'bi-x-circle text-danger' ?>"
                ></i>
              </td>
              <td><?= $hotel['vote']?></td>
              <td>
                <?= $hotel['distance_to_center']?>
                Km
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </main>
    </div>
  </body>
</html>
