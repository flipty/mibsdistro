<?php
$now = time();
date_default_timezone_set('America/Chicago'); //setting the time zone to avoid a weird offset issue
$today = date('l'); // day of week name
$currentTime = date('g:i a');
date_default_timezone_set('UTC'); //have to reset the time for some reason watch for this in the future...

$sun_open = get_field('hours_sun_open', 'options');
$sun_close = get_field('hours_sun_close', 'options');
$mon_open = get_field('hours_mon_open', 'options');
$mon_close = get_field('hours_mon_close', 'options');
$tues_open = get_field('hours_tues_open', 'options');
$tues_close = get_field('hours_tues_close', 'options');
$weds_open = get_field('hours_weds_open', 'options');
$weds_close = get_field('hours_weds_close', 'options');
$thur_open = get_field('hours_thur_open', 'options');
$thur_close = get_field('hours_thur_close', 'options');
$fri_open = get_field('hours_fri_open', 'options');
$fri_close = get_field('hours_fri_close', 'options');
$sat_open = get_field('hours_sat_open', 'options');
$sat_close = get_field('hours_sat_close', 'options');

$open = true;
$preOrder = true;
$admin = false;

$close_reason = get_field('close_reason', 'options');
$close_override = get_field('close_override', 'options');
$open_override = get_field('open_override', 'options');

$openHour = "10:00 am";
$closeHour = "8:00 pm";

if ($today === 'Sunday') { $openHour = $sun_open; $closeHour = $sun_close; }
if ($today === 'Monday') { $openHour = $mon_open; $closeHour = $mon_close; }
if ($today === 'Tuesday') { $openHour = $tues_open; $closeHour = $tues_close; }
if ($today === 'Wednesday') { $openHour = $weds_open; $closeHour = $weds_close; }
if ($today === 'Thursday') { $openHour = $thur_open; $closeHour = $thur_close; }
if ($today === 'Friday') { $openHour = $fri_open; $closeHour = $fri_close; }
if ($today === 'Saturday') { $openHour = $sat_open; $closeHour = $sat_close; }

$currently = DateTime::createFromFormat('g:i a', $currentTime);
$openTime = DateTime::createFromFormat('g:i a', $openHour);
$closeTime = DateTime::createFromFormat('g:i a', $closeHour);

if ($currently > $openTime && $currently < $closeTime) :
  $open = true;
else:
  $open = false;
endif;

if ($close_override) {
  $open = false;
}
if ($open_override) {
  $open = true;
}
?>
