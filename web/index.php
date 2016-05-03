<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Web Scrapper</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h2>Groupon Product Expiry Status Scrapper</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="index.php" method="post" accept-charset="utf-8">
				<input type="hidden" name="cmd" value="fetch-data">
				<label for="url">Groupon deal Url:</label>
				<input id="url" type="text" name="url" value="" placeholder="Enter groupon url here" style="width:400px;">
				<button type="submit">Submit</button>
			</form>

			<p>
				<em>Sample groupon deal url - <a href="https://www.groupon.ie/deals/gg-grs-gadgets-ltd-1-131?utm_medium=afl&utm_source=TDB&utm_campaign=IE_DT_AFL_TDB_TDB_TIM_TTT_SR_LBP_CHA_YBR_pid*2772705_uji*9f3e37b11f2fdef63ad955f403fbfcd8" target="_blank">https://www.groupon.ie/deals/gg-grs-gadgets-ltd-1-131?utm_medium=afl&utm_source=TDB&utm_campaign=IE_DT_AFL_TDB_TDB_TIM_TTT_SR_LBP_CHA_YBR_pid*2772705_uji*9f3e37b11f2fdef63ad955f403fbfcd8</a></em>
			</p>

		</div>
	</div>

<div class="row">
	<div class="col-md-12">
		<?php

include 'htmlParser/simple_html_dom.php';

if (isset($_POST['cmd']) && $_POST['cmd'] === 'fetch-data' && !empty(trim($_POST['url']))) {
	// $url = 'https://www.groupon.ie/deals/gg-grs-gadgets-ltd-1-131?utm_medium=afl&utm_source=TDB&utm_campaign=IE_DT_AFL_TDB_TDB_TIM_TTT_SR_LBP_CHA_YBR_pid*2772705_uji*9f3e37b11f2fdef63ad955f403fbfcd8';
	$url = trim($_POST['url']);
	echo $url;
	$html = file_get_html($url);
	echo '<h4>Product Expiry Details:</h4>';
	foreach ($html->find('div[class=limited-time]') as $element) {
		echo $element->innertext;
	}
}

?>
	</div>
</div>



</div>

</body>
</html>