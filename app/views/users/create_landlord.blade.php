@extends('master.index')

@section('content')

		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">

					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">

						<div class="login col-sm-5 col-sm-offset-1">
							<h1 class="center">Registrera som hyresvärd</h1>

							<div class="col-sm-12">
								<form class="form-style">
									<input type="text" name="firstname" placeholder="Förnamn*" class="form-control" />
									<input type="text" name="lastname" placeholder="Efternamn*" class="form-control" />
									<input type="text" name="personal_code_number" placeholder="Org/personnummer*" class="form-control" />
									<input type="text" name="address" placeholder="Adress" class="form-control" />
									<input type="text" name="zip_code" placeholder="Postnummer" class="form-control" />
									<input type="text" name="city" placeholder="Stad" class="form-control" />
									<input type="text" name="tele" placeholder="Tele*" class="form-control" />
									<input type="email" name="email" placeholder="E-post*" class="form-control" />
									<input type="password" name="password" placeholder="Lösenord*" class="form-control" />
									<input type="password" name="password_confirmation" placeholder="Repetera lösenord*" class="form-control" />
									<input type="hidden" name="landlord" value="1" />

									<div class="checkbox">
										<label>
											<input type="checkbox" name="terms"> Jag har läst och godkänner <a href="#">villkoren</a>.
										</label>
									</div>

									<button type="submit" class="btn btn-fullcolor">Fortsätt</button>
								</form>
							</div>


						</div>

						<div class="login-info col-sm-4 col-sm-offset-1">
							<h1>Hyra ut lägenhet</h1>
							<p>För att hyra ut en lägenhet via Lägenheter24 måste du först skapa ett konto. Anledningen till detta
							är att vi måste veta vem du är, och de sökande måste ha ett sätt att kontakta dig på.</p>

							<h1>Varför ska jag hyra ut lägenheter via Lägenheter24?</h1>
							<p>Lägenheter24s mål är att ungdomar ska få en egen lägenhet, som det ser ut idag med kösystem så är
							det nästan omöjligt för en 18-25årig person att få tag på hyresrätter. Du måste ha flera års
							kötid, vilket rimmar dåligt när man flyttar till en ny stad för antingen arbete eller studer.</p>

						</div>
					</div>
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->

@stop