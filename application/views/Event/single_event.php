
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="event_offer">
    <div class="image"><img src="<?= site_url("/public/images/zbieranie_ziemniakow.jpg") ?>"/></div>
    <div class="event_container">
        <div class="title"><?= $event->event_name ?></div>
        <div class="date">Czas trwania: Od <?= date_format(date_create($event->event_datetime_start), 'd.m.Y G:i') ?> do <?= date_format(date_create($event->event_datetime_end), 'd.m.Y G:i') ?></div>
        <div class="place">Miejsce: <?= $event->place_name ?>, <?= $event->place_address ?></div>
        <div class="content"><?= $event->event_description ?></div>
        <iframe
                width="100%b"
                height="450"
                frameborder="0" style="margin-left: auto;
    margin-right: auto;
    display: block;border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCDgP6HlTeeOXBilAy2d94efiaN0LcLtpI
                &q= <?= $event->place_address ?>,Opole" allowfullscreen>
        </iframe>
        
    </div>
</div>
