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
										{{ Form::label('personal_code_number', 'Org/personnummer') }}
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
							<h1>Hyra ut lägenhet</h1>
							<p>För att hyra ut en lägenhet via Lägenheter24 måste du först skapa ett konto. Anledningen till detta
							är att vi måste veta vem du är, och de sökande måste ha ett sätt att kontakta dig på.</p>

							<h1>Varför ska jag hyra ut via Lägenheter24?</h1>
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