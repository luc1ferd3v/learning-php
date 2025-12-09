<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <h1>Tài liệu học lập trình web</h1>
    <?php
        echo "<hr>";
    ?>
    <p>Tài liệu học HTML</p>
    <p>Tài liệu học CSS</p>
    <?php
    echo "<h2>Tài liệu học JavaScripts</h2>";
    echo "<h3>Tài liệu học MySQL</h3>"; 
    echo "<h4>Tài liệu học PHP</h4>"; 
    ?>
    <hr>
    <?php
    $text = "Từ cơ bản" . " " . "đến nâng cao";
    echo $text;
    ?>
    
    <br><br> <?php
    function showValue()
    {
        $a=5;
        echo "Giá trị trong hàm: " . $a; 
    }
    showValue();
    ?>
    
    <br><br>

    <?php
    $a = 1;
    $b = 2;
    function Sum()
    {
        global $a, $b;
        $b = $a + $b;
    }
    Sum();
    echo "Tổng b sau khi gọi hàm: " . $b;
    ?>
    <h2>Số từ 1 đến 100</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<div style='color: red; font-weight: bold; float: left; margin: 5px;'>$i</div>";
        } else {
            echo "<div style='color: green; font-weight: bold; font-style: italic; float: left; margin: 5px;'>$i</div>";
        }
    }
    ?>
</body>
</html>