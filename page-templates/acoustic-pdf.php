<?php
/**
 * Template Name: Acoustic PDF Template
 */

ob_start();

include("wp-content/themes/danielrevelry/mpdf/mpdf.php");

$mpdf = new mPDF();
?>
<div class="setListTitle">Daniel Revelry Request List</div>
<div class="leftColumn">
	1.) Brown Eyed Girl – Van Morrison<br>
	2.) Folsom Prison Blues – Johnny Cash<br>
	3.) When I Come Around – Green Day<br>
	4.) Free Bird – Lynyrd Skynyrd<br>
	5.) Redemption Song – Bob Marley<br>
	6.) Fire – Daniel Revelry<br>
	7.) Under The Bridge – Red Hot Chili Peppers<br>
	8.) Faithfully – Journey<br>
	9.) What I Got – Sublime<br>
	10.) Santeria – Sublime<br>
	11.) Waitin On the World To Change – John Mayer<br>
	12.) Love Yourself – Justin Bieber<br>
	13.) Your Body Is A Wonderland – John Mayer<br>
	14.) Yellow Ledbetter – Pearl Jam<br>
	15.) Ho Hey – The Lumineers<br>
	16.) Gypsy Soul - Daniel Revelry
	17.) Basketcase – Green Day<br>
	18.) She Will Be Loved – Maroon 5<br>
	19.) Pride and Joy – Stevie Ray Vaughan<br>
	20.) Sweet Home Alabama – Lynyrd Skynyrd<br>
</div>
<div class="rightColumn">
	21.) Wagon Wheel – Old Crow Medicine Show<br>
	22.) Let Her Cry – Darius Rucker<br>
	23.) Last Kiss – Pearl Jam<br>
	24.) Caress Me Down – Sublime<br>
	25.) Garden Grove – Sublime<br>
	26.) How To Love – Lil Wayne<br>
	27.) Drift Away – Uncle Kracker<br>
	28.) Friends In Low Places – Garth Brooks<br>
	29.) Wonderwall – Oasis<br>
	30.) Banana Pancakes – Jack Johnson<br>
	31.) Landslide – Fleetwood Mac<br>
	32.) Doin Time – Sublime<br>
	33.) Sweet Caroline – Neil Diamond<br>
	34.) Tiny Dancer – Elton John<br>
	35.) Versace On The Floor – Bruno Mars<br>
	36.) Trap Queen – Fetty Wap<br>
	37.) Cold Water – Justin Bieber<br>
	38.) Maria Maria – Carlos Santana<br>
	39.) Play It Again – Luke Bryan<br>
	40.) Free Fallin – Tom Petty<br>
</div>

<div class="otherSongsSection">
	<div class="otherSongsTitle">OTHER SONGS:</div>
	1.) Whiskey Train - Daniel Revelry <br>
	2.) Slow Dancing In A Burning Room – John Mayer<br>
	3.) Won’t Go Home Without You – Maroon 5<br>
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