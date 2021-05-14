<!DOCTYPE html>
<html leng="en">

<head>
    <title> Task 2 </title>
</head>

<body>


    <?php
    require("saleaba.php");
    require("paymentOptions.php");

    $aba = new ABA(); 
    $Wing = new Wing(); 
    $PiPay = new PiPay(); 
    $sale = new SaleData();

    $aba->payment(new Transaction("Item1",5,1,"ABA"), $sale);
    $Wing->payment(new Transaction("Item2", 3,2,"Wing"), $sale);
    $aba->payment(new Transaction("Item3",4,1,"ABA"), $sale);
    $aba->payment(new Transaction("Item4",5,1,"ABA"), $sale);
    $PiPay->payment(new Transaction("Item5",6,1,"PiPay"), $sale);
    $aba->payment(new Transaction("Item6",10,1,"ABA"), $sale);
    $Wing->payment(new Transaction("Item7", 15,1,"Wing"), $sale); 
    $Wing->payment(new Transaction("Item8", 2,1,"Wing"), $sale); 

    echo "Number of sale made by ABA : " . " " . $sale->displayABA() . "\n";
    echo "Number of sale made by Wing & PiPay : " . " " . $sale->displayWingPiPay() . "\n"; 
    $sale->displayOrdering()

    ?>

</body>

</html>