<?php
require "./auth.php";
include './nav.php';
?>

<div class="header1">
    <div class="box">
    </div>
</div>

<ul class="page">
    <li id="1">1</li>
    <li id="2">2</li>
    <li id="3">3</li>
    <li id="4">4</li>
</ul>

<?php
require './bdd.php';

$req = $pdo->query('SELECT * FROM chaussures LIMIT 0,16 ');

while($data = $req->fetch()){

    echo '

<div class="row1">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}

$req = $pdo->query('SELECT * FROM chaussures LIMIT 16 OFFSET 16 ');

while($data = $req->fetch()){

    echo '

<div class="row2">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}

$req = $pdo->query('SELECT * FROM chaussures LIMIT 16 OFFSET 32 ');

while($data = $req->fetch()){

    echo '

<div class="row3">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}

$req = $pdo->query('SELECT * FROM chaussures LIMIT 16 OFFSET 48 ');

while($data = $req->fetch()){

    echo '

<div class="row4">
  <div class="column1">
      <div class="card">
        <img src="'.$data->images.'" alt="" style="width:100%">
        <div class="container">
          <h2 class="marque">'.$data->modele.'</h2>
          <p class="prix">'.$data->prix.' €</p>
        </div>
      </div>
  </div>
</div>
';
}


?>


<?php
include './footer.php';
?>

