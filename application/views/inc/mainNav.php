<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<nav class="mainnav">
  <a class="logo" href="<?= site_url() ?>"><img src="<?= site_url() ?>public/images/logo.png" alt=""/></a>
  <ul class="navbar-left">
    <?php if ($this->session->is_logged): ?>
     <li><a href="<?= site_url('Event/Create')?>"class="<?= ($this->uri->segment(1)=="Event") ? "active" : ""?>">Dodawanie wydarzenia</a></li>
        <?php if ($this->session->is_admin): ?>
            <li><a href="<?= site_url('Administrator')?>"class="<?= ($this->uri->segment(1)=="Administrator") ? "active" : ""?>">Panel Administratora</a></li>
        <?php endif; ?>
     <?php endif; ?>
  </ul>
  <ul class="navbar-right">
    <?php if (!$this->session->is_logged): ?>
      <li><a href="<?= site_url('Register')?>" class="<?= ($this->uri->segment(1)=="Register") ? "active" : ""?>">Rejestracja</a></li>
      <li><a href="<?= site_url('Login')?>" class="<?= ($this->uri->segment(1)=="Login") ? "active" : ""?>">Logowanie</a></li>
    <?php else: ?>
    <li><a href="<?= site_url('User')?>"class="<?= ($this->uri->segment(1)=="User") ? "active" : ""?>">Profil</a></li>
      <li>
        <form class="logout_form" method="post">
          <input class="logout" type="submit" value="Wyloguj">
        </form>
      </li>
    <?php endif; ?>
  </ul>
</nav>
