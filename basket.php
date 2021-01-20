<?php
  /*Creiamo un array 'matches' contenente altri array i
  quali rappresentano delle partite di basket di
  un’ipotetica tappa del calendario. Ogni array della
  partita avrà una squadra di casa e una squadra
  ospite, punti fatti dalla squadra di casa e punti fatti
  dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo
  schema:
  Olimpia Milano - Cantù | 55 - 60*/
  $matches = [
    [
      "squadraCasa" => "De' Longhi Treviso Basket",
      "puntiCasa" => 84,
      "squadraOspite" => "Dolomiti Energia Trentino",
      "puntiOspite" => 80,
      "arbitri" => [
        "Carmelo LO GUZZO",
        "Alessandro PERCIAVALLE",
        "Alessandro NICOLINI"
      ],
      "impianto" => "Palaverde"
    ],
    [
      "squadraCasa" => "Openjobmetis Varese",
      "puntiCasa" => 94,
      "squadraOspite" => "Germani Brescia",
      "puntiOspite" => 89,
      "arbitri" => [
        "Roberto BEGNIS",
        "Valerio GRIGIONI",
        "Giacomo DORI"
      ],
      "impianto" => "Enerxenia Arena"
    ],
    [
      "squadraCasa" => "UNAHOTELS Reggio Emilia",
      "puntiCasa" => 71,
      "squadraOspite" => "A|X Armani Exchange Milano",
      "puntiOspite" => 87,
      "arbitri" => [
        "Carmelo PATERNICO'",
        "Guido GIOVANETTI",
        "Dario MORELLI"
      ],
      "impianto" => "Unipol Arena"
    ],
    [
      "squadraCasa" => "Allianz Pallacanestro Trieste ",
      "puntiCasa" => 102,
      "squadraOspite" => "Vanoli Basket Cremona",
      "puntiOspite" => 77,
      "arbitri" => [
        "Alessandro VICINO",
        "Denis QUARTA",
        "Andrea VALZANI"
      ],
      "impianto" => "Allianz Dome"
    ],
    [
      "squadraCasa" => "Carpegna Prosciutto Pesaro",
      "puntiCasa" => 85,
      "squadraOspite" => "Banco di Sardegna Sassari",
      "puntiOspite" => 95,
      "arbitri" => [
        "Saverio LANZARINI",
        "Andrea BONGIORNI",
        "Matteo BONINSEGNA"
      ],
      "impianto" => "Vitrifrigo Arena"
    ],
    [
      "squadraCasa" => "Virtus Segafredo Bologna",
      "puntiCasa" => 84,
      "squadraOspite" => "Acqua S.Bernardo Cantù",
      "puntiOspite" => 65,
      "arbitri" => [
        "Lorenzo BALDINI",
        "Denny BORGIONI",
        "Ginluca CAPOTORTO"
      ],
      "impianto" => "Segafredo Arena"
    ],
    [
      "squadraCasa" => "Umana Reyer Venezia",
      "puntiCasa" => 75,
      "squadraOspite" => "Happy Casa Brindisi",
      "puntiOspite" => 67,
      "arbitri" => [
        "Alessandro MORTOLINI",
        "Christian BORGO",
        "Marco VITA"
      ],
      "impianto" => "Segafredo Arena"
    ]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Basket Matches</title>
</head>
<body>
  <h1>Prima giornata</h1>
  <p>Elenco risultati:</p>
  <ul>
  <?php for( $i=0; $i<count($matches); $i++) {
      echo "<li>".$matches[$i]["squadraCasa"]." - ".$matches[$i]["squadraOspite"]." | ".$matches[$i]["puntiCasa"]." - ".$matches[$i]["puntiOspite"]." | ".$matches[$i]["impianto"]." | ".$matches[$i]["arbitri"][0]." - ".$matches[$i]["arbitri"][1]." - ".$matches[$i]["arbitri"][2] ."</li>"."<br>";
  } ?>
  </ul>
</body>
</html>
