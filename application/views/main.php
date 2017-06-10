<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?= dump($events_data) ?>

<div class="event_container">
  <?php foreach ($events_data as $event): ?>
    <a href="<?= site_url('Event/').$event->id_event ?>">
        <div class="event teatr">
            <div class="description">
                <div class="name"><?= $event->name ?></div>
                <div class="date"><?= $event->datetime_start ?></div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
  <?php endforeach; ?>
    <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a><a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event kino">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">11:00</div>
            </div>
            <div class="image">
                <img src="<?= site_url("public/images/kappa.bmp") ?>" />
            </div>
        </div>
    </a>
    <a href="">
        <div class="event cwk">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">koniec 23:30</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a> <a href="">
        <div class="event teatr">
            <div class="description">
                <div class="name">Konferencja dt. Ziemniaków</div>
                <div class="date">09.06.2017</div>
                <div class="place">CWK Opole, ul. Wrocławska 5, 44-999 Opole</div>
                <div class="short-info">zaczynamy o 15:00</div>
            </div>
            <div class="image">
             <img src="<?= site_url("public/images/kappa.bmp") ?>" />   </div>
        </div>
    </a>
</div>
