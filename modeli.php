<!doctype html>
<html lang="en">
<?php
$xml_modeli = simplexml_load_file('modeli.xml');
?>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="automobili.php">Automobili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modeli.php">Modeli</a>
        </li>        
    </div>
  </div>
  </nav>
  <div class="container my-5">
    <div class="table-responsive">
        <table class="table table-striped table-success">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Cijena</th>
                <th scope="col">Tehničke specifikacije</th>
                <th scope="col">Performance</th>
                </tr>
            </thead>
    <tbody>
  <?php foreach ($xml_modeli as $model): ?>
          <tr>
            <td>
              <?php echo $model->naziv?>
            </td>
            <td>
              <?php echo $model->cijena?>
            </td>
            <td>
              <?php echo $model->specs?>
            </td>
            <td>
              <?php echo $model->performance?>
            </td>            
          </tr>
          <?php endforeach?>    
    </tbody>
</table>
<nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <footer class="footer fixed-bottom bg-dark text-light text-center py-3">
    <div class="container">
      <span class="text-light">
        <p>Ena Majić - 2024. godina</p>
      </span>
    </div>
  </footer>


</body>
</html>