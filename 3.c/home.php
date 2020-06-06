<?php

include './connection.php';

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
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <select class="custom-select"
                    style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                    id="inputGroupSelect01">
                    <option selected>Raisa Andriana</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="custom-select"
                    style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                    id="inputGroupSelect01">
                    <option selected>Drink</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ice Tea">
                </div>
                <div class="form-group">
                  <input type="text" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp. 10.000">
                </div>
              </form>
            </div>
            <div class="modal-footer" style="border: 0;">
              <button type="button" class="btn btn-warning font-weight-bold text-white">ADD</button>
            </div>
          </div>
        </div>
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
        <tr>
          <th class="text-center align-middle" scope="row">1</th>
          <td class="align-middle">Pevita Pearce</td>
          <td class="align-middle">Latte</td>
          <td class="align-middle">Drink</td>
          <td class="align-middle">Rp. 10.000</td>
          <td class="text-nowrap align-middle">
            <a data-target="#modalEdit" data-toggle="modal" class="mx-1" href="#modalEdit"><i class="fa fa-edit text-success"></i></a>
            <a data-target="#modalHapus" data-toggle="modal" class="mx-1" href="#modalHapus"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <th class="text-center align-middle" scope="row">2</th>
          <td class="align-middle">Raisa Andriana</td>
          <td class="align-middle">Cake</td>
          <td class="align-middle">Food</td>
          <td class="align-middle">Rp. 15.000</td>
          <td class="text-nowrap align-middle">
            <a data-target="#modalEdit" data-toggle="modal" class="mx-1" href="#modalEdit"><i class="fa fa-edit text-success"></i></a>
            <a data-target="#modalHapus" data-toggle="modal" class="mx-1" href="#modalHapus"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <th class="text-center align-middle" scope="row">3</th>
          <td class="align-middle">Raisa Andriana</td>
          <td class="align-middle">Cake</td>
          <td class="align-middle">Food</td>
          <td class="align-middle">Rp. 30.000</td>
          <td class="text-nowrap align-middle">
            <a data-target="#modalEdit" data-toggle="modal" class="mx-1" href="#modalEdit"><i class="fa fa-edit text-success"></i></a>
            <a data-target="#modalHapus" data-toggle="modal" class="mx-1" href="#modalHapus"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <th class="text-center align-middle" scope="row">4</th>
          <td class="align-middle">Pevita Pearce</td>
          <td class="align-middle">Gudeg</td>
          <td class="align-middle">Food</td>
          <td class="align-middle">Rp. 35.000</td>
          <td class="text-nowrap align-middle">
            <a data-target="#modalEdit" data-toggle="modal" class="mx-1" href="#modalEdit"><i class="fa fa-edit text-success"></i></a>
            <a data-target="#modalHapus" data-toggle="modal" class="mx-1" href="#modalHapus"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <th class="text-center align-middle" scope="row">5</th>
          <td class="align-middle">Joko Purwadhi</td>
          <td class="align-middle">Ice Tea</td>
          <td class="align-middle">Drink</td>
          <td class="align-middle">Rp. 55.000</td>
          <td class="text-nowrap align-middle">
            <a data-target="#modalEdit" data-toggle="modal" class="mx-1" href="#modalEdit"><i class="fa fa-edit text-success"></i></a>
            <a data-target="#modalHapus" data-toggle="modal" class="mx-1" href="#modalHapus"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
        <tr>
          <th class="text-center align-middle" scope="row">6</th>
          <td class="align-middle">Adi Permana Putra</td>
          <td class="align-middle">Burger</td>
          <td class="align-middle">Food</td>
          <td class="align-middle">Rp. 15.000</td>
          <td class="text-nowrap align-middle">
            <a data-target="#modalEdit" data-toggle="modal" class="mx-1" href="#modalEdit"><i class="fa fa-edit text-success"></i></a>
            <a data-target="#modalHapus" data-toggle="modal" class="mx-1" href="#modalHapus"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
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
            Data Raisa Andriani ID <span class="text-warning">#1</span>
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
  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
          <div class="modal-body">
            <form>
              <div class="form-group">
                <select class="custom-select"
                  style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                  id="inputGroupSelect01">
                  <option selected>Raisa Andriana</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group">
                <select class="custom-select"
                  style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                  id="inputGroupSelect01">
                  <option selected>Drink</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ice Tea">
              </div>
              <div class="form-group">
                <input type="text" style="border: 0;outline: 0;border-radius: 0;border-bottom: 1px solid #969191;"
                  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp. 10.000">
              </div>
            </form>
          </div>
          <div class="modal-footer" style="border: 0;">
            <button type="button" class="btn btn-warning font-weight-bold text-white">EDIT</button>
          </div>
        </div>
      </div>
    </div>
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
</body>

</html>