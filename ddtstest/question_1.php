<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<p>Please Enter an Integer number into the Entry Below</p>
  Number: <input type="text" name="num">
  <button type="submit">Check</button>
</form>

<!-- Number that can be divisible by 3 are numbers that the sum is divisible by 3 -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_REQUEST['num'];
    // echo strlen($number);

    function threeByThree($number){ 
        $sum = 0; 
        if (empty($number)){
            return "Number  is Required";
        } elseif (strlen($number) == 1){
            if ($number % 3 == 0){
                return "The Number is Divisible By Three (3)";
            } else {
                return "The Number is Not Divisible By Three (3)";
            }
        } elseif (!is_numeric($number)){
            return "Please Enter A Valid number";
        } elseif (strlen($number) > 1) {
            $sum_number = str_split($number);
            foreach ($sum_number as $key => $value ){
                $sum += $value;
                
                // return $number;
            }
            if ($sum % 3 == 0){
                // echo $sum;
                return "The Number is Divisible By Three (3)";
            } else {
                return "The Number is Not Divisible By Three (3)";
            }
            
        } else{
            return "Please Enter A Valid number";
        }
    }

    echo threeByThree($number);
}

?>

</body>
</html>
