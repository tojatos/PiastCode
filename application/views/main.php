<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div class="event_filter">
    <div class="title">Filtruj:</div>
    <div class="formula">
        <form action="">
            <?php foreach ($category_data as $category): ?>
                <input type="checkbox" name="category" value="<?=$category?>"> <?=$category=?>
            <?php endforeach; ?>
            <input type="submit" value="Submit">
        </form>
    </div>

</div>

<div style="clear:both"></div>

<div class="event_container">
    
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
