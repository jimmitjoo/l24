@extends('master.index')

@section('content')

		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">

					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">

						<div class="login col-sm-5 col-sm-offset-1">
							<h1 class="center">Skapa GRATIS konto</h1>

							<div class="col-sm-12">
								{{ Form::open(['route' => 'users.store', 'method' => 'post', 'class' => 'form-style']) }}
								<form class="form-style">
									<input type="text" name="firstname" placeholder="Förnamn*" class="form-control" />
									<input type="text" name="lastname" placeholder="Efternamn*" class="form-control" />
									<input type="text" name="personal_code_number" placeholder="Personnummer*" class="form-control" />
									<input type="text" name="address" placeholder="Nuvarande adress" class="form-control" />
									<input type="text" name="zip_code" placeholder="Postnummer" class="form-control" />
									<input type="text" name="city" placeholder="Stad" class="form-control" />
									<input type="text" name="income" placeholder="Inkomst per månad (Ex: 20000)" class="form-control" />
									<input type="text" name="tele" placeholder="Tele*" class="form-control" />
									<input type="email" name="email" placeholder="E-post*" class="form-control" />
									<input type="password" name="password" placeholder="Lösenord*" class="form-control" />
									<input type="password" name="password_confirmation" placeholder="Repetera lösenord*" class="form-control" />

									<div class="checkbox">
										<label>
											<input type="checkbox" name="terms"> Jag har läst och godkänner <a href="#">villkoren</a>.
										</label>
									</div>

									<button type="submit" class="btn btn-fullcolor">Fortsätt</button>
								{{ Form::close() }}
							</div>


						</div>

						<div class="login-info col-sm-4 col-sm-offset-1">
							<h1>Hur du söker lägenhet</h1>
							<p>För att söka lägenhet via Lägenheter24 måste du först skapa ett konto. Ju mer information du anger
							om dig själv, desto mer information kan hyresvärden ta del av i sitt beslut om du är en hyresgäst
							som uppnår dennes krav. De flesta har krav på inkomst, personnummer m.m. vilket gör att du blir
							skickad fler lägenheter om du anger denna information.</p>

							<h1>Varför ska jag söka via Lägenheter24?</h1>
							<p>Vår tjänst är till för dig som inte har tillräckligt lång kötid i den stad du önskar hyra lägenhet
							i. Vad som sker när du registrerar dig är att vi anmäler dig i alla lägenhetsköer vi känner till för
							området, utöver detta får du också våra unika lägenheter som våra partners publicerar exklusivt hos oss.
							Fördelen med dessa är att du endast har konkurrens med 4st andra om lägenheten till skillnad från i
							köerna där du ofta har konkurrens med hundratals.</p>

						</div>
					</div>
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->

@stop