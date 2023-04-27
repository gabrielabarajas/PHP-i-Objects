<?php
class PokerDice{
    private $faceFigure = array("As","K","Q","J","7","8"); 

    public function throw(){
        return $random_num =rand(0,5);
    }

    public function shapeName($num){
        return $name = $this->faceFigure[$num];  
    }
}

class throws{
    private $numberDices;
    private $numberThrows;

public function __construct($dices,$throws)
{
    $this->numberDices = $dices;
    $this->numberThrows = $throws;
}
public function getTotalThrows(){
    return $totalThrows = $this->numberDices * $this->numberThrows;
}
}

function throwFive(){
    $dice1= new PokerDice;
    $rand1 = $dice1->throw();
    $shape1= $dice1->shapeName($rand1);
    echo $shape1;

    $dice2= new PokerDice;
    $rand2 = $dice2->throw();
    $shape2= $dice2->shapeName($rand2);
    echo $shape2;

    $dice3= new PokerDice;
    $rand3 = $dice3->throw();
    $shape3= $dice3->shapeName($rand3);
    echo $shape3;

    $dice4= new PokerDice;
    $rand4 = $dice4->throw();
    $shape4= $dice4->shapeName($rand4);
    echo $shape4;

    $dice5= new PokerDice;
    $rand5 = $dice5->throw();
    $shape5= $dice5->shapeName($rand5);
    echo $shape5;

    echo "</br>";
} 

throwFive();
throwFive();
throwFive();

$play1= new throws(5,3);
$totalThrows = $play1->getTotalThrows();

echo "Numero de tiradas entre todos los dados son:  ".$totalThrows;

?>