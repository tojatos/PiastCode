<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if ($this->session->is_logged): ?>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="text-center">
	               		<h1 class="title">Dodawanie miejsca</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
							col-sm-9 col-sm-offset-2 col-xs-9 col-xs-offset-1">
          <form class="create_place_form" method="post">
				<div class="form-group">
              		<p>Nazwa:</p>
						<input type="text" name="name" placeholder="Wpisz nazwę"/>
				</div>
				<div class="form-group">
              		<p>Adres:</p>
						<input type="text" name="address" placeholder="Wpisz adres"/>
				</div>
				<div class="form-group">
              		<p>Opis (opcjonajnie):</p>
						<input type="text" name="description" placeholder="Wpisz opis"/>
				</div>

				<div class="form-group ">
					<input class="button-primary" type="submit" value="Wyślij">
				</div>
            </form>
				</div>
			</div>
		</div>
<?php
  else:
    header('Location: '.base_url());
  endif;
