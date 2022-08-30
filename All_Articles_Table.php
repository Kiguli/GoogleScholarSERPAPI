<?php
//Replace XXXXXX with your API Key
//To sort table by most citations remove &sort=pubdate from $content
$content= 'https://serpapi.com/search.json?engine=google_scholar_author&sort=pubdate&author_id=HhpTdG0AAAAJ&hl=en&api_key=XXXXXXXX';
$api = wp_remote_get($content, array());
if (is_wp_error($api) || empty($api['response']) || $api['response']['code'] != '200') {
            //error
            echo "Could not connect to the server. Try again later.";
} else {
            //update update_infos in cache
            $info = json_decode(wp_remote_retrieve_body($api), true);
			// Display The Jobs From The Result Set
        echo '<table>';
        echo '<tr>';
        echo '<th> Article</th>';
        echo '<th> Authors</th>';
	    echo '<th> Year </th>';
        #echo '<th> Publication</th>';
        echo '<th> Citations</th>';
        foreach ( $info['articles'] as $item ) {
            echo '<tr>';
            echo'<td><a href = \''.$item['link'].'\'>'.$item['title'].'</a></td>';
            echo '<td>'.$item['authors'].'</td>';
            echo '<td>'.$item['year'].'</td>';
			#echo '<td>'.$item['publication'].'</td>';
			echo'<td><a href = \''.$item['cited_by']['link'].'\'>'.$item['cited_by']['value'].'</a></td>';
        }
        echo '</table>';
        }
?>
