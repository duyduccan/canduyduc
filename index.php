<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
$weight = $height = "";
if(isset($_POST["height"])&&($_POST["weight"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    $bmi = $weight/($height * $height);
    echo "chỉ số bmi là: " . $bmi;
}
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tính chỉ số BMI</h1>

            <form name="bmi" action="" method="post">
                <div class="form-group">
                    <label >Chiều cao ( cm )</label>
                    <input type="text" class="form-control" name="height" value="<?php echo $height?>">
                </div>
                <div class="form-group">
                    <label >Cân nặng ( kg ) </label>
                    <input type="text" class="form-control" name="weight" value="<?php echo $wight?>">
                </div>
                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>