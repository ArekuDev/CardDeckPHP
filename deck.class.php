<?php class DeckOfCards { 
	
	private $suits;
	private $ranks;
	public $deck;

	function __construct(){
		$this->suits = ["S","D","H","C"];
		$this->ranks = ["A",2,3,4,5,6,7,8,9,10,"J","Q","K"];
		foreach($this->suits as $s){
			foreach($this->ranks as $r){
				$this->deck[]="$r$s";
			}
		}
	}

	function show_deck() {
		// returns an array of all cards currently in the deck.
		return $this->deck;
	}

	function deal_one_card(){
		// deal one random card from the deck, then remove it.
		if(empty($this->deck)) return false; // no cards left
		$arrLen = count($this->deck);
		$key = mt_rand(0,$arrLen-1);
		$card = $this->deck[$key];
		array_splice($this->deck, $key,1);
		return $card;
	}

	function deal_top_card(){
		// deal the top card from the deck, then remove it.
		if(empty($this->deck)) return false; // no cards left
		array_splice($this->deck, 0, 1);
		return $card;
	}

	function shuffle(){
		// Shuffles all the cards currently in the deck.
		if(empty($this->deck)) return; // no cards in the deck to shuffle.
		$arrLen = count($this->deck);
		for($i=0; $i < $arrLen; $i++) {
			$newDeck[] = $this->deal_one_card();
		}
		$this->deck = $newDeck;
	}
}?>
