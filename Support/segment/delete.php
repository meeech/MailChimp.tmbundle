<?php
/**
 * Delete a static segmemnt
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

$segments = $api->listStaticSegments($config->list_id);
$oopsy->go($api->errorCode, $api->errorMessage, 'error_select');

//Array indexed by title. not ideal (would rather id) 
// but i dont see a way with the requestItem nib how to pass extra data
// We will encounter problems if segments can have the same name :/ - make more intelligent
$segHash = array();
foreach($segments as $segment){
    $segHash[$segment['name']] = array(
        'title'=>$segment['name'],
        'id' => $segment['id']
    );
}

$response = $UI->requestItem(array(
    'items'=>array_keys($segHash),
    'title' => __('modal_segment_title'),
    'prompt' => __('modal_segment_prompt')
));

if(empty($response)) {
    exit('Cancelled.');
}

$api->listStaticSegmentDel($config->list_id, $segHash[$response]['id']);
echo 'Deleted '.$response;
