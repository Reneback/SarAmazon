

  <html>
  <head>
    <title>SarAmazon</title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
    $verne = array(
      'titre' => '20000 lieux chez ta mère',
      'prix' => 8000000,
      'note' => 10,
      'prime' => true,
    );
    $proust = array(
      'titre' => 'Du Côté de chez Sara',
      'prix' => 12,
      'note' => 10,
      'prime' => true
    );
    $pagnol = array (
     'titre' => 'Manon de Simp',
     'prix' => 12,
     'note' => 10,
     'prime' => true
   );
    $despentes = array (
     'titre' => 'Vernon ne dit pas Non',
     'prix' => 12,
     'note' => 10,
     'prime' => true
   );
    $foenkinos = array (
     'titre' => 'Charlotte aux fraises',
     'prix' => 16,
     'note' => 10,
     'prime' => true
   );
    $updike = array (
     'titre' => 'Le Génie du Mal ',
     'prix' => 12,
     'note' => 10,
     'prime' => true
   );
    $johnny = array (
     'titre' => 'Mémoires de l\'au delà',
     'prix' => 18,
     'note' => 10,
     'prime' => true
   );
    $daho = array (
     'titre' => 'Tu sens le Soleil',
     'prix' => 12,
     'note' => 10,
     'prime' => true
   );
    $magritte = array (
     'titre' => 'Tête de pipe ',
     'prix' => 12,
     'note' => 10,
     'prime' => true
   );
    $larochefoucauld = array (
     'titre' => 'Maximes et Compagnie...',
     'prix' => 12,
     'note' => 10,
     'prime' => true
   );


    $catalogue = array($verne, $proust, $pagnol, $despentes, $larochefoucauld, $foenkinos, $updike, $johnny, $daho, $magritte);
    foreach ($catalogue as $book) {
    
      echo ' <ul style="border: 2px black solid;list-style-type: none;background-color: black; color: white;">';
       echo '<li>' .$book['titre']. '</li>';
       echo '<li>' .$book['prix']. '</li>';
       echo '<li>' .$book['note']. '</li>';
       if ($book['prime'] == true) {
       echo '<li>' .'Prime'. '</li>';
      }
      else{
        echo '<li>' .'No Prime'.'<li>';
      }
       echo '</ul>';   
    }
    ?>
    

  </body>
  </html>