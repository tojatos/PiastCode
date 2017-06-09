<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Rejestracja</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-5
							col-sm-6 col-sm-offset-4 col-xs-6 col-xs-offset-4">
          <form class="register_form" method="post">
						<div class="form-group">
              			<p>Login</p>
									<input type="text" class="form-control" name="login" id="login"  placeholder="Wpisz login"/>
						</div>

						<div class="form-group">
							<p>E-mail</p>
							<input type="email" class="form-control" name="email" id="email"  placeholder="Wpisz Email"/>
						</div>


						<div class="form-group">
							<p>Hasło</p>
							<input type="password" class="form-control" name="password" id="password"  placeholder="Wpisz hasło"/>
						</div>

						<div class="form-group">
								<p>Powtórz hasło</p>
								<input type="password" class="form-control" name="password_repeat" id="password_repeat"  placeholder="Wpisz ponownie hasło"/>
						</div>
						<div class="form-group ">
							<input class="button-primary" type="submit" value="Zarejestruj">
						</div>
					</form>
				</div>
			</div>
		</div>
