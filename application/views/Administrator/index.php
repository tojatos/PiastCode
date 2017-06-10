<div class="panel-heading">
	               <div class="text-center">
	               		<h1 class="title">Panel Administratora</h1>
	               		<hr />
	               	</div>
</div>
<div class="event_container">
    <div class="left_admin">
        <p>Dodaj kategorię</p>
        <?= $create_category_form ?>
    </div>
    <div class="right_admin">
        <?php if($events_data == NULL):?>
        <p>Nie ma żadnych wydarzeń do zweryfikowania</p>
        <?php else: ?>
        <p>Zweryfikuj wydarzenia</p>
        
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
                <form class="verify_event_form" method="post">
                    <input value="<?=$event->event_id ?>" name="event_id" type="hidden">
                    <input class="button-primary" type="submit" value="Zaakceptuj wydarzenie">
                </form>
            </div>
            
        </a>
  <?php endforeach; ?>
  <?php endif; ?>
    </div>
</div>