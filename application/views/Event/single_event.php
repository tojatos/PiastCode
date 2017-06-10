
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="event_offer">
    <div class="event_container">
        <div class="title"><?= $event->event_name ?></div>
        <div class="image">
      <img src="
      <?php if(file_exists('public/images/events/event'.$event->event_id.'.jpeg'))
      {
          echo site_url('public/images/events/event'.$event->event_id.'.jpeg');
      }
      else
      {
          echo site_url('public/images/zbieranie_ziemniakow.jpg');
      }
      ?>
      "/>
      </div>
        <div class="date"><p>Czas trwania: Od <?= date_format(date_create($event->event_datetime_start), 'd.m.Y G:i') ?> do <?= date_format(date_create($event->event_datetime_end), 'd.m.Y G:i') ?></p>
        <p>Miejsce: <?= $event->place_name ?>, <?= $event->place_address ?></p></div>
        <div class="content"><?= $event->event_description ?>
        <p><button class="button-primary" name="follow">Obserwuj wydarzenie</button></p></div>
        <iframe
                width="100%"
                height="450"
                frameborder="0" style="margin-left: auto;
    margin-right: auto;
    display: block;border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCDgP6HlTeeOXBilAy2d94efiaN0LcLtpI
                &q=<?= $event->place_address ?>,Opole" allowfullscreen>
        </iframe>

    </div>
</div>
