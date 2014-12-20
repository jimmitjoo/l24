@extends('master.index')

@section('content')

		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">

					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">

						<div class="login col-sm-5 col-sm-offset-1">
							<h1 class="center">Skapa konto</h1>

							<div class="col-sm-12">
								<form class="form-style">
									<input type="text" name="firstname" placeholder="Förnamn*" class="form-control" />
									<input type="text" name="lastname" placeholder="Efternamn*" class="form-control" />
									<input type="text" name="persnr" placeholder="Personnummer*" class="form-control" />
									<input type="text" name="address" placeholder="Nuvarande adress" class="form-control" />
									<input type="text" name="postcode" placeholder="Postnummer" class="form-control" />
									<input type="text" name="city" placeholder="Stad" class="form-control" />
									<input type="text" name="income" placeholder="Inkomst per månad" class="form-control" />
									<input type="text" name="phone" placeholder="Tele*" class="form-control" />
									<input type="email" name="email" placeholder="E-post*" class="form-control" />
									<input type="password" name="Password" placeholder="Lösenord*" class="form-control" />
									<input type="password" name="Password" placeholder="Repetera lösenord*" class="form-control" />

									<div class="checkbox">
										<label>
											<input type="checkbox" name="terms"> Jag har läst och godkänner <a href="#">villkoren</a>.
										</label>
									</div

									<button type="submit" class="btn btn-fullcolor">Fortsätt</button>
								</form>
							</div>


						</div>

						<div class="login-info col-sm-4 col-sm-offset-1">
							<h1>Hyra ut lägenhet</h1>
							<p>För att hyra ut en lägenhet via Nirmea måste du först skapa ett konto. Anledningen till detta
							är att vi måste veta vem du är, och de sökande måste ha ett sätt att kontakta dig på.</p>

							<h1>Varför ska jag hyra ut lägenheter via Nirmea?</h1>
							<p>Nirmeas mål är att ungdomar ska få en egen lägenhet, som det ser ut idag med kösystem så är
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