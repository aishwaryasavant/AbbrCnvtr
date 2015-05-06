<?php
// Copyright (c) 2013 Adam Green. All rights reserved.
// See http://140dev.com/download/license.txt for licensing of this code.

function get_all_tags($where,$start,$results_per_page) {
	global $db;

	$query = "SELECT COUNT( * ) AS cnt, tag
		FROM tweet_tags
		WHERE 1
		$where
		GROUP BY tweet_tags.tag
		ORDER BY cnt DESC, tag ASC 
		LIMIT $start, $results_per_page";

	return $db->select_array($query);
}
?>