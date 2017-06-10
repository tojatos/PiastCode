<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (!$this->session->is_logged): ?>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="text-center">
	               		<h1 class="title">Logowanie</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
							col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
          <form class="login_form" method="post">
				<div class="form-group">
              		<p>Login</p>
						<input type="text" class="form-control" name="login" id="login"  placeholder="Wpisz login"/>
				</div>
				<div class="form-group">
					<p>Hasło</p>
						<input type="password" class="form-control" name="password" id="password"  placeholder="Wpisz hasło"/>
				</div>
				<div class="form-group ">
					<input class="button-primary" type="submit" value="Zaloguj">
				</div>
            </form>
	            <a href="<?= site_url('ForgottenPassword') ?>" class="forgot">Nie pamiętam hasła</a>
				</div>
			</div>
		</div>
<?php
  else:
    header('Location: '.base_url());
  endif;