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
if(isset($_GET["height"])&&($_GET["weight"])){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    $weight = $_GET["weight"];
    $height = $_GET["height"];

    $bmi = $weight/($height * $height);
    echo "chỉ số bmi là: " . $bmi;
    if( $bmi < 18.5){
        echo "<br>gầy - thấp";
    }elseif(($bmi >= 18.5 )&&($bmi <= 24.9)){
        echo "<br>bình thường - trung bình";
    }elseif(($bmi >= 25 )&&($bmi <= 29.9)){
        echo "<br>hơi béo - cao";
    }elseif(($bmi >= 30.0 )&&($bmi <= 34.9)){
        echo "<br>béo phì cấp độ 1 - cao";
    }elseif(($bmi >= 35 )&&($bmi <= 39.9)){
        echo "<br>béo phì cấp độ 2 - trung bình";
    }elseif($bmi >= 40 ){
        echo "<br>béo phì cấp độ 3 - nguy hiểm";
    }else{
        echo "<br>không xác định";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tính chỉ số BMI</h1>

            <form name="bmi" action="" method="get">
                <div class="form-group">
                    <label >Chiều cao ( cm )</label>
                    <input type="text" class="form-control" name="height" value="<?php echo $height?>">
                </div>
                <div class="form-group">
                    <label >Cân nặng ( kg ) </label>
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight?>">
                </div>
                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>