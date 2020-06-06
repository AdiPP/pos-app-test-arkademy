<?php
  include './connection.php';

  if (isset($_GET['pesan'])) {
    $hapus = true;
    $cashierName = $_GET['cashier'];
    $idProduct = $_GET['id'];
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <!-- Modal Tambah -->
  <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="border: 0;">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">ADD</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="./tambah.php">
          <div class="modal-body">
            <div class="form-group">
              <select class="custom-select" name="cashier"
                style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                id="inputGroupSelect01">
                <?php
                  $sql = "SELECT id, name FROM Cashier";
                  $cashiers = mysqli_query($conn, $sql);
                ?>
                <?php if(mysqli_num_rows($cashiers) > 0):?>
                  <?php while($row = mysqli_fetch_assoc($cashiers)): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name']?></option>
                  <?php endwhile ?>
                <?php else:?>
                  <option>Kosong</option>
                <?php endif?>
              </select>
            </div>
            <div class="form-group">
              <select class="custom-select" name="category"
                style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                id="inputGroupSelect01">
                <?php
                  $sql = "SELECT id, name FROM Category";
                  $categories = mysqli_query($conn, $sql);
                ?>
                <?php if(mysqli_num_rows($categories) > 0):?>
                  <?php while($row = mysqli_fetch_assoc($categories)): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name']?></option>
                  <?php endwhile ?>
                <?php else:?>
                  <option>Kosong</option>
                <?php endif?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;" name="product"
                class="form-control" placeholder="Ice Tea">
            </div>
            <div class="form-group">
              <input type="number" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;" name="price"
                class="form-control" placeholder="Rp. 10.000">
            </div>
          </div>
          <div class="modal-footer" style="border: 0;">
            <button type="submit" class="btn btn-warning font-weight-bold text-white">ADD</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <?php
    $sql = "SELECT c.name cashier, c.id idCashier, p.name product, p.id idProduct, cg.name category, cg.id idCategory, p.price price FROM Cashier c JOIN Product p ON p.id_cashier = c.id JOIN Category cg ON cg.id = p.id_category ";
    $editResult = mysqli_query($conn, $sql);
  ?>
  <?php if(mysqli_num_rows($editResult) > 0):?>
    <?php while($row = mysqli_fetch_assoc($editResult)): ?>
      <div class="modal fade" id="modalEdit<?= $row['idProduct'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-content">
              <div class="modal-header" style="border: 0;">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">EDIT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="./edit.php" method="POST">
                <input type="hidden" name="idProduct" value="<?= $row['idProduct'] ?>">
                <div class="modal-body">
                  <div class="form-group">
                    <select class="custom-select" name="cashier"
                      style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                      id="inputGroupSelect01">
                      <?php
                        $sql = "SELECT id, name FROM Cashier";
                        $cashiers = mysqli_query($conn, $sql);
                      ?>
                      <?php if(mysqli_num_rows($cashiers) > 0):?>
                        <?php while($cashier = mysqli_fetch_assoc($cashiers)): ?>
                          <?php if($cashier['id'] === $row['idCashier']):?>
                            <option value="<?= $cashier['id'] ?>" selected><?= $cashier['name']?></option>
                          <?php else:?>
                            <option value="<?= $cashier['id'] ?>"><?= $cashier['name']?></option>
                          <?php endif?>
                        <?php endwhile ?>
                      <?php else:?>
                        <option>Kosong</option>
                      <?php endif?>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="custom-select" name="category"
                      style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                      id="inputGroupSelect01">
                      <?php
                        $sql = "SELECT id, name FROM Category";
                        $categories = mysqli_query($conn, $sql);
                      ?>
                      <?php if(mysqli_num_rows($categories) > 0):?>
                        <?php while($category = mysqli_fetch_assoc($categories)): ?>
                          <?php if($category['id'] === $row['idCategory']):?>
                            <option value="<?= $category['id'] ?>" selected><?= $category['name']?></option>
                          <?php else:?>
                            <option value="<?= $category['id'] ?>"><?= $category['name']?></option>
                          <?php endif?>
                        <?php endwhile ?>
                      <?php else:?>
                        <option>Kosong</option>
                      <?php endif?>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;" name="product"
                      class="form-control" placeholder="Ice Tea" value="<?= $row['product'] ?>">
                  </div>
                  <div class="form-group">
                    <input type="number" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;" name="price"
                      class="form-control" placeholder="Rp. 10.000" value="<?= $row['price'] ?>">
                  </div>
                </div>
                <div class="modal-footer" style="border: 0;">
                  <button type="submit" class="btn btn-warning font-weight-bold text-white">EDIT</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile ?>
  <?php else:?>
    <option>Kosong</option>
  <?php endif?>

  <!-- Modal Hapus -->
  <?php if(isset($hapus)): ?>
    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: 0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <div class="">
              Data <?= $cashierName ?> ID <span class="text-warning">#<?= $idProduct ?></span>
            </div>
            <div>
              <i style="font-size: 300px" class="fa fa-check-circle-o text-success"></i>
            </div>
            <div>
              Berhasil Dihapus
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif?>

  <div>
    <nav class="navbar navbar-expand-lg bg-white bg-light px-5 py-0 shadow rounded">
      <a class="navbar-brand p-0" href="#"><img src="./assets/images/logo.png" alt="" width="130px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 w-100">
          <input class="form-control mr-5 w-100 bg-gradient-secondary text-white" type="search" placeholder="Search ..."
            aria-label="Search" style="height: 58px; background: #CECECE;">
        </form>
        <button type="button" class="btn btn-warning text-white bold font-weight-bold shadow" data-toggle="modal"
          data-target="#modalTambah" style="width: 190px;">ADD</button>
      </div>
    </nav>
  </div>
  <div class="container mt-5">
    <table class="table table-borderless shadow bordered">
      <thead>
        <tr class="bg-warning" style="height: 80px;">
          <th class="text-center text-white align-middle" style="width: 10%;" scope="col">No</th>
          <th class="text-white align-middle" scope="col">Cashier</th>
          <th class="text-white align-middle" scope="col">Product</th>
          <th class="text-white align-middle" scope="col">Category</th>
          <th class="text-white align-middle" scope="col">Price</th>
          <th class="text-white align-middle" scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT c.name cashier, c.id idCashier, p.name product, p.id idProduct, cg.name category, cg.id idCategory, p.price price FROM Cashier c JOIN Product p ON p.id_cashier = c.id JOIN Category cg ON cg.id = p.id_category ";
          $result = mysqli_query($conn, $sql);
        ?>
        <?php if (mysqli_num_rows($result) > 0): ?> 
          <?php 
          $i = 1;
            while($row = mysqli_fetch_assoc($result)): 
          ?>
            <tr>
              <th class="text-center align-middle" scope="row"><?= $i++ ?></th>
              <td class="align-middle"><?= $row["cashier"] ?></td>
              <td class="align-middle"><?= $row["product"] ?></td>
              <td class="align-middle"><?= $row["category"] ?></td>
              <td class="align-middle"><?= $row["price"] ?></td>
              <td class="text-nowrap align-middle">
                <a data-target="#modalEdit<?= $row['idProduct'] ?>" data-toggle="modal" class="mx-1" href="#modalEdit<?= $row['idProduct'] ?>"><i class="fa fa-edit text-success"></i></a>
                <a class="mx-1" href="./hapus.php?id=<?= $row['idProduct'] ?>"><i class="fa fa-trash text-danger"></i></a>
              </td>
            </tr>
          <?php endwhile ?>
        <?php else: ?>
            Kosong
        <?php endif ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <?php if(isset($hapus)): ?>
    <script>
      $("#modalHapus").modal();
    </script>
  <?php endif?>
</body>
</html>