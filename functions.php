<?php

require_once('VirginMoneyGiving-API/api.php');

function get_fundraising_total () {
	$vmg1 = new VirginMoneyGiving('http://uk.virginmoneygiving.com/team/paulandrob');
	$total = $vmg1->getTotal();
	$vmg2 = new VirginMoneyGiving('http://uk.virginmoneygiving.com/team/jonandtim');
	$total += $vmg2->getTotal();
	return $total;
}