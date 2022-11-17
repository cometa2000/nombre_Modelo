<?php 
    require_once'./conexion.php';
    $conexion = conexion();

    $sql = "SELECT * FROM nombreModel";

    $respuesta = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered border-primary" style="margin-top: 70px;">
                <thead >
                    <tr>
                        <th>Nombre Usuario</th>
                        <th>Nombre Hardware</th>
                        <th>Modelo del Hardware</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php  while($ver = mysqli_fetch_array($respuesta)): ?>
                        <tr>
                            <td><?php echo $ver['nombreuser']?></td>
                            <td><?php echo $ver['nombre_Hardware']?></td>
                            <td><?php echo $ver['modelo']?></td>
                        </tr>
                    <?php  endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>