<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if ($this->session->is_logged): ?>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="text-center">
	               		<h1 class="title">Dodawanie wydarzenia</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
							col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
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
              		<p>Wybierz miejsce:</p>
					<select name="place_id" placeholder="Wybierz miejsce wydarzenia z listy" class="select_places">
						<?= $select_places ?>
					</select>
	              <p>Wybierz kategorie (opcjonalnie):</p>
					<select name="category_ids[]" multiple placeholder="Wybierz kategorie z listy" class="select_categories">
						<?php foreach ($categories as $category): ?>
							<option value="<?= $category->id_category ?>"><?= $category->name ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group ">
					<input class="button-primary" type="submit" value="Dodaj wydarzenie">
				</div>
            </form>
				</div>
			</div>

		<button type="button" class="add_place_form_toggle button-primary">Nie ma mojego miejsca na liście</button>
		<div  id="add_place_form"><?= $create_place_form ?></div>
		</div>
<?php
  else:
    header('Location: '.base_url());
  endif;
