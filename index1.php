<?php
//Viết PHP script để khai báo và tạo một mảng gồm các phần tử "white, green, red, blue, black", sau đó in ra dưới dạng list.
$mauSac = array(
    "white",
    "green",
    "red",
    "blue", 
    "black"
);
$leng = count($mauSac);
for($i = 0; $i < $leng; $i++ ){
    echo $mauSac[$i]."<br>";
};
?>

<?php
//Viết PHP script để tạo associative array hiển thị tên các quốc gia và thủ đô. 
    $thuDo= array(
        "Việt Nam" => "Hà Nội",
        "ChiNa" => "Bắc Kinh",
        "JaPan" => "Tokio",
        "American" => "Oasington DC",
        "Gemany" => "Beclin"
    );
    asort($thuDo);
    foreach ($thuDo as $country => $capital) {
        echo "Thủ đô của $country là $capital"."<br>" ;  
    }
    unset($thuDo[2]);
?>

<?php
// Xóa phần từ khỏi mảng
    $x = array(0, 1, 2, 3, 4); 
    echo "<pre>"; 
    var_dump($x);  
    unset($x[3]);  
    $x = array_values($x);  
    echo '';  
    echo "<pre>"; 
    var_dump($x); 
?>

<?php
// lấy phần tử đầu tiên trong mảng
    $y = array(0, 1, 2, 3, 4, 5);
    print_r(array_shift($y)); 
?>

<?php
//Viết PHP script để chèn một phần tử vào bất kì vị trí nào trong mảng.
    $stt = array(1, 2, 3, 4);
    $stt[] = 5;
    var_dump($stt);
?>

<?php
    // tính trung bình cộng và in 5 giá trị lớn nhất, 5 giá trị nhỏ nhất
    $items = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";  
    $soNguyen = explode(',', $items);
    $tong = 0;
    $dem = count($soNguyen);
    var_dump($soNguyen);
    foreach ($soNguyen as $i) {
        $tong += $i;
    };
    echo("tổng dãy số là:".  $tong . "<br>");
    $trungBinhCong = $tong / $dem;
    echo("Trung bình công của dãy số là: " . $trungBinhCong . "<br>");
    sort($soNguyen);
    var_dump($soNguyen);
    echo "5 giá trị nhỏ nhất của mảng là: ";
    for($i = 0; $i < 5; $i++){
        echo($soNguyen[$i]." ") ;
    }
    echo "<br>";
    rsort($soNguyen);
    echo "5 giá trị lớn nhất của mảng là: ";
    for($i = 0; $i < 5; $i++){
        echo($soNguyen[$i]." ");
    }
?>

<?php
// nhập 2 mảng thành 1
    $array1 = array(
        1, 2, 3, 4, 5
    );
    $array2 = array(
        6, 7, 8, 9, 10
    );
    $array3 = array_merge($array1, $array2);
    var_dump($array3);
?>

