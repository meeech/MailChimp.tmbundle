<?php 
/**
 * Create a new static segment
 *
 * @package mailchimp.tmbundle
 * @author Mitchell Amihod
 **/
$UI = new UI(getenv('DIALOG'));

$new_name = $UI->input(array(
    'title'=>__('modal_segment_new_title'), 
    'prompt'=>__('modal_segment_new_prompt')
));


$new_segment_id = $api->listStaticSegmentAdd($config->list_id, $new_name);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_segment_new_adding'));

$config->segment_id = $new_segment_id;
$config->save();

echo __('segment_new_success');