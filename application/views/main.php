<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div class="event_filter">
    <div class="formula">
        <form class="filter" method="post">
            <?php foreach ($categories as $category): ?>
                <input type="checkbox" name="category" value="<?=$category->name ?>"> <?=$category->name ?>
            <?php endforeach; ?>
            <input class="datepicker date_filter"> Data
            <input type="submit" class="button-filter" value="Filtruj">
        </form>
        
    </div>

</div>

<div style="clear:both"></div>

<div class="main_container">
  <?php
  if ($events_data != null) {
    foreach ($events_data as $key => $event) {
        if (date_create($event->event_datetime_end) <= date_create('now')||!$event->event_verified) {
            unset($events_data[$key]);
        }
    }
  }
  ?>
  <?php foreach ($events_data as $event): ?>
    <a href="<?= site_url('Event/').$event->event_id ?>">
        <div class="event teatr">
            <div class="description">
                <div class="name"><?= $event->event_name ?></div>
                <div class="date"><?= date_format(date_create($event->event_datetime_start), 'd.m.Y'); ?></div>
                <div class="place"><?= $event->place_name ?>, <?= $event->place_address ?></div>
                <div class="short-info">rozpoczęcie o <?= date_format(date_create($event->event_datetime_start), 'H:i'); ?></div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.png") ?>" />
            </div>
        </div>
    </a>
  <?php endforeach; ?>

</div>
