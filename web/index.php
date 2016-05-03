<?php

include 'htmlParser/simple_html_dom.php';

$url = 'https://www.groupon.ie/deals/gg-grs-gadgets-ltd-1-131?utm_medium=afl&utm_source=TDB&utm_campaign=IE_DT_AFL_TDB_TDB_TIM_TTT_SR_LBP_CHA_YBR_pid*2772705_uji*9f3e37b11f2fdef63ad955f403fbfcd8';

$html = file_get_html($url);
foreach ($html->find('div[class=limited-time]') as $element) {
	echo $element->innertext;
}

?>

<form action="index.php" method="post" accept-charset="utf-8">
	<label for="url">Groupon product Url:</label>
	<input id="url" type="text" name="url" value="" placeholder="Enter groupon url here" style="width:400px;">
	<button type="submit">Submit</button>
</form>