<?php 
//Turn the current document into inline CSS.
//Leaves the original style tags alone
$data = stream_get_contents(STDIN);;
if (! $data){
    echo __('error_segment_add_members');
    exit();
}

$api->listStaticSegmentMembersAdd($config->list_id, $config->segment_id, explode(',', $data));
$oopsy->go($api->errorCode, $api->errorMessage, 'error_add_member_segment');

echo 'Members Added...';