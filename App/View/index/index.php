<div class="container">
<<<<<<< HEAD
	   <?php echo $this->q; ?>
=======
>>>>>>> 1d1622b71fb77faf8ae3f624d21f129b50cb6ddd
		<div class="panel panel-default">
			<div class="panel-body vertical-align">
				<div class="col-md-7 text-center">
					<h1>Projet LAVAL</h1>
					<p>Petit text de présentation du projet...</p>
					<p>
						<a class="btn btn-primary btn-md">En savoir plus...</a>
					</p>
				</div>
				<div class="col-md-4">
					<form class="form-horizontal" data-toggle="validator">
						<fieldset>
							<legend class="text-center">Inscription</legend>
							<div class="form-group">
								<label for="inputNom" class="col-lg-2 control-label">Nom</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputNom"
										placeholder="Nom" data-minlength="2"
										aria-describedby="inputNomStatus" required> <span
										class="glyphicon glyphicon-ok form-control-feedback"
										aria-hidden="true"></span> <span id="inputNomStatus"
										class="sr-only">(success)</span>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPrenom" class="col-lg-2 control-label">Prénom</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputPrenom"
										placeholder="Prénom" data-minlength="2" required> <span
										class="glyphicon glyphicon-ok form-control-feedback"
										aria-hidden="true"></span> <span id="inputNomStatus"
										class="sr-only">(success)</span>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="inputEmail"
										placeholder="Email"
										pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
										required> <span
										class="glyphicon glyphicon-ok form-control-feedback"
										aria-hidden="true"></span> <span id="inputNomStatus"
										class="sr-only">(success)</span>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-lg-2 control-label">Password</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" id="inputPassword"
										placeholder="Mot de passe" data-minlength="6" required> <span
										class="glyphicon glyphicon-ok form-control-feedback"
										aria-hidden="true"></span> <span id="inputNomStatus"
										class="sr-only">(success)</span>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword2" class="col-lg-2 control-label">Vérification</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" id="inputPassword2"
										placeholder="Vérification du mot de passe" data-minlength="6"
										data-match="#inputPassword" required> <span
										class="glyphicon glyphicon-ok form-control-feedback"
										aria-hidden="true"></span> <span id="inputNomStatus"
										class="sr-only">(success)</span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="reset" class="btn btn-default">Cancel</button>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>