<?php
// replace XXXXXX by your API Key
$content= 'https://serpapi.com/search.json?engine=google_scholar_author&author_id=HhpTdG0AAAAJ&hl=en&api_key=XXXXXXXXXXXXXXXXX';
$api = wp_remote_get($content, array());
if (is_wp_error($api) || empty($api['response']) || $api['response']['code'] != '200') {
            //error
            echo "Could not connect to the Server. Try again later.";
} else {
            //update update_infos in cache
            $info = json_decode(wp_remote_retrieve_body($api), true);
			echo $info['cited_by']['table']['0']['citations']['all'];
        }
?>
