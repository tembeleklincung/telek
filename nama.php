<?php
echo nama();


function nama()
	{
$sumur = array('indonesian','japanese','chinese','indian');
$goak=$sumur[mt_rand(0,sizeof($sumur)-1)];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/".$goak."_name.php");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$ex = curl_exec($ch);
		preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
		return $name[2][mt_rand(0, 14) ];
	}
