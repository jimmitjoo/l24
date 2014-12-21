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

								<hr/>

								@include('errors.list')

								{{ Form::open(['route' => 'users.store', 'method' => 'post', 'class' => 'form-style']) }}
									<div class="form-group">
										{{ Form::label('firstname', 'Förnamn') }}
										{{ Form::text('firstname', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('lastname', 'Efternamn') }}
										{{ Form::text('lastname', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('personal_code_number', 'Personnummer') }}
										{{ Form::text('personal_code_number', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('address', 'Adress') }}
										{{ Form::text('address', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('zip_code', 'Postnummer') }}
										{{ Form::text('zip_code', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('city', 'Postort') }}
										{{ Form::text('city', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('income', 'Inkomst per månad (Ex. 20000)') }}
										{{ Form::text('income', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('tele', 'Telefon') }}
										{{ Form::text('tele', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
										{{ Form::label('email', 'E-post *') }}
										{{ Form::text('email', null, ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
									    {{ Form::label('password', 'Lösenord *') }}
									    {{ Form::password('password', ['class' => 'form-control']) }}
									</div>

									<div class="form-group">
									    {{ Form::label('password_confirmation', 'Repetera lösenord *') }}
									    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
									</div>

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