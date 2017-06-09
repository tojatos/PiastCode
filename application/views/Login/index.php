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
				<div class="col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-5
							col-sm-6 col-sm-offset-4 col-xs-6 col-xs-offset-4">
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
