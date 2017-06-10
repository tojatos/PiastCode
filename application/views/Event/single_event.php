<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="event_offer">
    <div class="image"><img src="<?= site_url("/public/images/zbieranie_ziemniakow.jpg") ?>"/></div>
    <div class="event_content">
        <div class="title"><?= $event->event_name ?></div>
        <div class="date">Czas trwania: Od <?= date_format(date_create($event->event_datetime_start), 'd.m.Y G:i') ?> do <?= date_format(date_create($event->event_datetime_end), 'd.m.Y G:i') ?></div>
        <div class="place">Miejsce: <?= $event->place_name ?>, <?= $event->place_address ?></div>
        <div class="content"><?= $event->event_description ?></div>
    </div>
</div>
