<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<p>Please Enter the Binary Number int the Entry below</p>
  Binary Number: <input type="text" name="search">
  <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_REQUEST['search'];
    function maxConsecutiveOnes($number) {
        $a = str_split($number); // split the array of string number
        $counter = 0;
        $max = 0;
        if (empty($number)){
            return "Number  is Required";
        } elseif (strlen($number) == 1){
            if ($number % 3 == 0){
                return "True";
            } else {
                return "False";
            }
            // !is_numeric($number)
        }else{ foreach ($a as $key => $value){ // looping through the array
                if ($value == 1){ // finding one's
                    $counter += 1; // increasing the number of one found
                    if ($max < $counter){
                        $max = $counter; // getting the biggest number of the consecutive one
                    }
                } else {
                    if ($max < $counter){
                        $max = $counter;
                        $counter = 0;
                    } else{
                        $counter = 0;
                    }
                }
            }
            return $max;
        }
    }

    echo "Maximum Number of Consecutive 1's is ". maxConsecutiveOnes($number);

}

?>

</body>
</html>