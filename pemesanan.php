<?php

//panggil koneksi database
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="stylesidebar.css" />
  
    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-6.2.0-web/css/all.css" />

    <title>Document</title>
  </head>

    <div class="container">
        <div class="sidebar">
            <div class="header">
              <div class="list-item">
                <a href="#">
                  <img src="img" alt="" class="icon" />
                  <span class="description-header">GoBus!</span>
                </a>
                <div class="illustration">
                  <img class="gambar" src="img/bus-driver.png" alt="" />
                </div>
              </div>
            </div>
            <div class="main">
              <div class="list-item">
                <a href="index.php">
                  <i class="fa-solid fa-bus" style="color: #ffffff"></i>
                  <span class="description"> Kelas Armada</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#daftarharga.php">
                    <i class="fa-solid fa-tags" style="color: #ffffff"></i>
                    <span class="description">Daftar Harga</span>
                </a>
              </div>
              <div class="list-item">
                <a href="pemesanan.php">
                    <i class="fa-solid fa-tags" style="color: #ffffff"></i>
                    <span class="description">Pesan Tiket</span>
                </a>
              </div>
              <div class="list-item">
                <a href="tampildata.php">
                    <i class="fa-solid fa-clipboard fa-lg" style="color: #ffffff"></i>
                    <span class="description">TampilData</span>
                </a>
              </div>
              </div>
        </div>
        <div class="utama">
        <?php
         
         if(isset($_POST['ttotal'])){
            $tpenumpang= $_POST['jml_pnm'];
            $tpenumpanglansia= $_POST['jml_pnm_lansia'];
            $tkelas= $_POST['kls_penumpang'];
        

         }

         

        ?>
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>      
            </div>
            <div class="labelmenu">
                <h2> Pesan Tiket</h2>
            </div>
            <div class="card pesan">
                <h4 class="card-header">Form Pemesanan Tiket</h4>
                <div class="card-body">
                    <form action="crud.php" method="POST">
                    <div class="mb-3 row">
                        <label for="inputNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                        <input type="text" name="tnama" class="form-control" id="inputNama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputNomor" class="col-sm-3 col-form-label">Nomor Identitas</label>
                        <div class="col-sm-8">
                        <input type="number" name="tnik" class="form-control" id="inputNomor">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputNoHp" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-8">
                        <input type="number" name="tnohp" class="form-control" id="inputNoHp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputKelas" class="col-sm-3 col-form-label">Kelas Penumpang</label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" name="tkelas" id=" " onchange="changeFunction(this)" >
                                <option value="">--Pilih Kelas Armada Bis--</option>
                                <option value="Bisnis">Bisnis</option>
                                <option value="Eksekutif">Eksekutif</option>
                                <option value="First Class">First Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputJadwal" class="col-sm-3 col-form-label">Jadwal Keberangkatan</label>
                        <div class="col-sm-8">
                        <input type="date" class="form-control" id="inputJadwal" name="tjadwal">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPenumpang" aria-placeholder="Ma" class="col-sm-3 col-form-label" >Jumlah Penumpang</label>
                        <div class="col-sm-8">
                        <input type="number" name="tpenumpang" placeholder="Masukan Penumpang dengan usia kurang dari 60 tahun" class="form-control" id="inputPenumpang">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputLansia" class="col-sm-3 col-form-label">Jumlah Penumpang Lansia</label>
                        <div class="col-sm-8">
                        <input type="number" name="tpenumpanglansia" placeholder="Masukan Penumpang dengan usia lebih dari 60 tahun" class="form-control" id="inputLansia">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                        <input type="text" name="tharga" class="form-control" id="showValue" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Total" class="col-sm-3 col-form-label">Total</label>
                        <div class="col-sm-8">
                        <input type="text" name="ttotal" class="form-control" id="Total">
                        </div>
                    </div> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                        </label>
                    </div>
                    <button type="button" class="btn mt-3 btn-primary btn-sm">Hitung Total Bayar</button>
                    <button type="submit" class="btn mt-3 btn-warning btn-sm" data-bs-dismiss="modal" name="bsimpan">Pesan Tiket</button>
                    <button type="button" class="btn mt-3 btn-danger btn-sm">Cancel</button>
                    </form>                                     
                </div>
            </div>
        </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script>
    function changeFunction(selectValue) {
        var x = selectValue.value;
        document.getElementById('showValue').value = x;
      }
   </script>
</body>
</html>
