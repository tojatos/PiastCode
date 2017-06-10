<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (!$this->session->is_logged): ?>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="text-center">
	               		<h1 class="title">Dodawanie wydarzenia</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
							col-sm-9 col-sm-offset-2 col-xs-9 col-xs-offset-1">
          <form class="create_event_form" method="post">
				<div class="form-group">
              		<p>Nazwa:</p>
						<input type="text" name="name" placeholder="Wpisz nazwę"/>
				</div>
				<div class="form-group">
              		<p>Opis:</p>
						<input type="text" name="description" placeholder="Wpisz opis"/>
				</div>
				<div class="form-group">
              		<p>Data startu:</p>
						<input type="text" name="date_start" class="datepicker" placeholder="Wpisz datę startu"/>
				</div>
				<div class="form-group">
              		<p>Godzina startu:</p>
						<input type="text" name="time_start" placeholder="Wpisz godzinę startu"/>
				</div>
				<div class="form-group">
              		<p>Data zakończenia:</p>
						<input type="text" name="date_end" class="datepicker" placeholder="Wpisz datę zakończenia"/>
				</div>
				<div class="form-group">
              		<p>Godzina zakończenia:</p>
						<input type="text" name="time_end" placeholder="Wpisz godzinę zakończenia"/>
				</div>
				
				<div class="form-group">
              		<p>Wybierz miejsce</p>
						<input type="text" name="place_id" placeholder="Wybierz miesjce wydarzenia z listy"/>
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
