<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>

    <style type="text/css">
        @font-face {
            font-family: Mali;
            src: url(font/Mali/TTF/Mali-Medium.ttf) format("truetype");
        }

        body {
            font-family: 'Mali';
        }
    </style>

    <!-- Bootstrap Include via CDN -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body style="font-family:Mali;">

    <?php
    $price = 1000; // ราคาสินค้า
    $discount = 5; // ส่วนลด 50%
    $cal =  calDiscount($price, $discount); // คำนวณราคาส่วนลด
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">ตัวอย่างการใช้งาน function แบบที่ 1</h5>
                    <div class="card-body">
                        <h5 class="card-title">เรียก function คำนวนและเขียนแสดงผลลัพธ์</h5>
                        <?php
                        $price = 1500; // ราคาสินค้า
                        $discount = 5; // ส่วนลด 50%
                        $cal_discount =  calDiscount($price, $discount); // คำนวณราคาส่วนลด
                        $total_discount = $price - $cal // ราคาสินค้าหลังหักส่วนลด
                        ?>
                        <p class="card-text">
                        <h5>ราคาเต็มสินค้า (บาท) = <?php echo $price; ?> บาท</h5>
                        <h5>ส่วนลด (%) = <?php echo $discount; ?> %</h5>
                        <h5>ได้รับส่วนลด = <?php echo $cal_discount; ?> บาท</h5>
                        <h5>ราคาสินค้าหลังหักส่วนลด = <?php echo $total_discount ?> บาท</h5>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">ตัวอย่างการใช้งาน function แบบที่ 2</h5>
                    <div class="card-body">
                        <h5 class="card-title">เรียก function คำนวนพร้อมแสดงผลลัพธ์</h5>
                        <p class="card-text">
                            <?php
                            $price = 500; // ราคาสินค้า
                            $discount = 5; // ส่วนลด 50%
                            showDiscount($price, $discount, $cal);//คำนวณราคาสินค้าหลังหักส่วนลด
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // คำนวณราคาส่วนลด
    function calDiscount($price, $discount)
    {
        $cal_discount = ($price * $discount) / 100;
        return $cal_discount;
    }
    ?>

    <?php
    // คำนวนพร้อมแสดงผลลัพธ์ 
    function showDiscount($price, $discount, $cal_discount)
    {
        echo "<h5>ราคาเต็มสินค้า (บาท) = {$price} บาท</h5>";
        echo "<h5>ส่วนลด (%) = {$discount} %</h5>";
        echo "<h5>ได้รับส่วนลด = {$cal_discount} บาท</h5>"; 
        $total_discount = $price - $cal_discount; //คำนวณราคาสินค้าหลังหักส่วนลด
        echo "<h5>ราคาสินค้าหลังหักส่วนลด = {$total_discount} บาท</h5>";
    }
    ?>
</body>

</html>