<?php
/**
 * Template Name: Trio PDF Template
 */

ob_start();

include("wp-content/themes/danielrevelry/mpdf/mpdf.php");

$mpdf = new mPDF();
?>
<div class="setListTitle">Daniel Revelry Trio Request List</div>
<div class="leftColumn">
	1.) Bright Lights - Gary Clark Jr<br>
	2.) Drift Away - Uncle Kracker<br>
	3.) Voodoo Child - Jimi Hendrix<br>
	4.) Pride and Joy - Stevie Ray Vaughan<br>
	5.) Yellow Ledbetter - Pearl Jam<br>
	6.) Gypsy Soul - Daniel Revelry Trio<br>
	7.) When I Come Around - Green Day<br>
	8.) Valerie - Amy Winehouse<br>
	9.) Free Bird - Lynyrd Skynyrd<br>
	10.) Sweet Home Alabama - Lynyrd Skynyrd<br>
	11.) Brown Eyed Girl - Van Morrison<br>
	12.) Seven Nation Army - The White Stripes<br>
	13.) Killing In The Name of - RATM<br>
	14.) Waitin On The World To Change - John Mayer<br>
	15.) Gravity - John Mayer<br>
	16.) The Middle - Jimmy Eat World<br>
	17.) Basketcase - Green Day<br>
	18.) What I Got - Sublime<br>
	19.) Garden Grove - Sublime<br>
	20.) Whiskey Train - Daniel Revelry Trio <br>
</div>
<div class="rightColumn">
	21.) Another Brick In The Wall - Pink Floyd<br>
	22.) Far Behind - Candlebox<br>
	23.) Bulls on Parade - RATM<br>
	24.) Rock N Roll All Night - KISS<br>
	25.) Stranglehold - Ted Nugent<br>
	26.) Mary Jane's Last Dance - Tom Petty
	27.) Lets Go Crazy - Prince<br>
	28.) Purple Rain / Under The Bridge - Prince / RHCP<br>
	29.) Folsom Prison Blues - Johnny Cash<br>
	30.) Wagon Wheel - Old Crow Medicine Show<br>
	31.) Friends In Low Places - Garth Brooks<br>
	32.) Caress Me Down - Sublime<br>
	33.) Hard To Handle - The Black Crowes<br>
	34.) Santeria - Sublime<br>
	35.) I Wanna Be Sedated - The Ramones<br>
	36.) Down - 311<br>
	37.) Cliffs of Dover - Eric Johnson<br>
	38.) Aeroplane - Red Hot Chili Peppers<br>
	39.) I Want You To Want Me - Cheap Trick<br>
	40.) Doin Time - Sublime<br>
</div>
<div class="otherSongsSection">
	<div class="otherSongsTitle">OTHER SONGS:</div>
	1.) Fire - Daniel Revelry Trio <br>
	2.) Little Wing - Jimi Hendrix <br>
	3.) Wonderwall - Oasis<br>
	4.) Sweet Caroline - Neil Diamond<br>
</div>
<div class="suggestedDonationSection">
	SUGGESTED DONATION: $5
</div>
<?php

$html = ob_get_contents();
ob_end_clean();
$stylesheet = file_get_contents('wp-content/themes/danielrevelry/css/trio-pdf.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output();
exit;