<?php include "deck.class.php";


$myCards = new DeckOfCards;

//// TEST: Deal cards until deck is empty

$myCards->shuffle();

// 1.a. ensure the deck was shuffled properly:
print_r($myCards->show_deck());


// 1.b. deal cards until they are gone.
// ( Iterate 54 times to ensure deal_one_card() properly returns false when the cards are gone. )
for($i=1;$i<=54;$i++){
	$card = $myCards->deal_one_card();
	if($card) {
	 	echo "You were dealt " . $card ."<br>";
	}
	else {
		echo "There are no cards left";
		break;
	}
} ?>