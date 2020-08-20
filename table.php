<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM tb_statlog ORDER BY id ASC"); // using mysqli_query instead
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Data Mining</title>
</head>
<body>
<div class="">
    <div class="card">
        <div class="card-header">
            <h4>Data Klasifikasi Penyakit Jantung</h4>
        </div>
        <div class="card-body">
            <table id="example" class="table  table-striped table-bordered" >
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Age</th>
                        <th scope="col">Sex</th>
                        <th scope="col">CP</th>
                        <th scope="col">RBP</th>
                        <th scope="col">SC</th>
                        <th scope="col">FBS</th>
                        <th scope="col">RER</th>
                        <th scope="col">MHRA</th>
                        <th scope="col">EIA</th>
                        <th scope="col">Oldpeak</th>
                        <th scope="col">STS</th>
                        <th scope="col">NV</th>
                        <th scope="col">T</th>
                        <th scope="col">Class</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    while($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <th><?= $data['Age']; ?></th>
                        <th><?= $data['Sex']; ?></th>
                        <th><?= $data['CPT']; ?></th>
                        <th><?= $data['RBP']; ?></th>
                        <th><?= $data['SC']; ?></th>
                        <th><?= $data['FBS']; ?></th>
                        <th><?= $data['RER']; ?></th>
                        <th><?= $data['MHRA']; ?></th>
                        <th><?= $data['EIA']; ?></th>
                        <th><?= $data['Oldpeak']; ?></th>
                        <th><?= $data['TSofTPESTS']; ?></th>
                        <th><?= $data['NoMV']; ?></th>
                        <th><?= $data['Thal']; ?></th>
                        <th><?= $data['Label']; ?></th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="card mb-3">
    <div class="card-header">
        <h4>Input Nilai Data Uji</h4>
    </div>
    <div class="card-body">
        <form action="proses.php" method="post" name="form1">
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control form-control-sm" id="age" name="age">
            </div> 
            <div class="form-group">
                <label for="sex">Sex <b>(values : 0,1)</b></label>
                <input type="number" class="form-control form-control-sm" id="sex" name="sex">
            </div>
            <div class="form-group">
                <label for="cpt">Chest Pain Type <b>(values : 1-4)</b></label>
                <input type="number" class="form-control form-control-sm" id="cpt" name="cpt">
            </div>   
            <div class="form-group">
                <label for="rbp">Resting Blood Pressur</label>
                <input type="number" class="form-control form-control-sm" id="rbp" name="rbp">
            </div>      
            <div class="form-group">
                <label for="sc">Serum Cholestoral in mg/d</label>
                <input type="number" class="form-control form-control-sm" id="sc" name="sc">
            </div> 
            <div class="form-group">
                <label for="fbs">Fasting Blood Sugar > 120 mg/dl  <b>(values : 0,1)</b></label>
                <input type="number" class="form-control form-control-sm" id="fbs" name="fbs">
            </div>   
            <div class="form-group">
                <label for="rer">Resting Electrocardiographic Results <b>(values : 0,1,2)</b></label>
                <input type="number" class="form-control form-control-sm" id="rer" name="rer">
            </div>   
            <div class="form-group">
                <label for="mhra">Maximum Heart Rate Achieved</label>
                <input type="number" class="form-control form-control-sm" id="mhra" name="mhra">
            </div> 
            <div class="form-group">
                <label for="eia">Exercise Induced Angina  <b>(values : 0,1)</b></label>
                <input type="number" class="form-control form-control-sm" id="eia" name="eia">
            </div> 
            <div class="form-group">
                <label for="oldpeak">Oldpeak  <b>(values : 1-4)</b></label>
                <input type="number" step="any" class="form-control form-control-sm" id="oldpeak" name="oldpeak">
            </div> 
            <div class="form-group">
                <label for="tsoftpests">ST Segment  <b>(values : 1,2,3)</b></label>
                <input type="number" class="form-control form-control-sm" id="tsoftpests" name="tsoftpests">
            </div> 
            <div class="form-group">
                <label for="nomv">Number of Major Vessels <b>(values : 0-3)</b></label>
                <input type="number" class="form-control form-control-sm" id="nomv" name="nomv">
            </div>
            <div class="form-group">
                <label for="thal">Thal <b>(values : 3,6,7)</b></label>
                <input type="number" class="form-control form-control-sm" id="thal" name="thal">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Proses</button>       
        </form>
    </div>
    </div>
</div>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>