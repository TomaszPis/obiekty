<?php

class osoba{
	public $imie;
	public $nazwisko;
	public $rok_ur;
	public $waga;
	public $wzrost;
	public $zainteresowania;

	function wiek(){
		$wiek = (date(Y) - ($this->rok_ur));
		$wiek2 = round($wiek, 2);
		return $wiek2;
	}

	function bmi(){
		$bmi = ($this->waga/($this->wzrost * $this->wzrost));
		return $bmi;
	}

	function przedstaw_sie(){
		echo ("Mam na imię {$this->imie} mam: " . "{$this->wiek()}" . " lat(a), moje zainteresowania to {$this->zainteresowania}" . 
			 "<br><b>" .
			 "Moje BMI to: " . $this->bmi()) . "</b>";
	}

}

$ja = new osoba();
$ja->imie = 'Tomasz';
$ja->nazwisko = 'Pisarski';
$ja->rok_ur = 1991;
$ja->waga = 84;
$ja->wzrost = 1.81; 
$ja->zainteresowania = 'programowanie, sport';


if(isset($_POST['action']) and $_POST['action'] == 'Dodaj rok')
{
	$add_age = $_POST['add_age'];
	$ja->rok_ur = $add_age;

	$nowy_wiek = $ja->wiek();

	if($nowy_wiek < 0)
	{
		$error = 'Podaj większy rok urodzenia';
		$color = 'red';
	}
	if ($nowy_wiek > 103) {
		
		$error = 'Nie postarzaj mnie! :(';
		$color = 'red';

	} else {
		
		$error = 'Zmieniłeś mi wiek. Teraz mam: ' . $nowy_wiek . ' lat(a) :)';
		$color = 'green'; 
	}
	
	
}

include 'szablon.php';



