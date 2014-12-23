		<!-- BEGIN HEADER -->
		<header id="header">
			<div id="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul id="top-info">
								<li>Telefon: 0730-361 869</li>
								<li>E-post: <a href="mailto:info@lagenheter24.se">info@lagenheter24.se</a></li>
							</ul>

							<ul id="top-buttons">
								@if(!Auth::check())
									<li><a href="{{ route('sessions.create') }}"><i class="fa fa-sign-in"></i> Logga in</a></li>
									<li><a href="{{ route('users.create') }}"><i class="fa fa-pencil-square-o"></i> Skapa konto</a></li>
									@else
									<li><a href="{{ route('sessions.destroy') }}"><i class="fa fa-sign-out"></i> Logga ut</a></li>

								@endif

								<li class="divider"></li>
								<li>
									<div class="language-switcher">
										<span><i class="fa fa-globe"></i> Svenska</span>
										<ul>
											<li><a href="#">English</a></li>
											<li><a href="#">Deutsch</a></li>
											<li><a href="#">Espa&ntilde;ol</a></li>
											<li><a href="#">Fran&ccedil;ais</a></li>
											<li><a href="#">Portugu&ecirc;s</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="nav-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a href="/?ref=logo" class="nav-logo"><img src="images/logo.png" alt="Lägenheter24 logga" /></a>

							<!-- BEGIN SEARCH -->
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Sök..." type="text" value="" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<i class="fa fa-search sb-icon-search"></i>
								</form>
							</div>
							<!-- END SEARCH -->

							<!-- BEGIN MAIN MENU -->
							<nav class="navbar">
								<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>

								<ul class="nav navbar-nav">
									<!--<li class="dropdown">
										<a class="active" href="#" data-toggle="dropdown" data-hover="dropdown">Start<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a class="active" href="index.html">Home Search</a></li>
											<li><a href="index-slider.html">Home Slider</a></li>
											<li><a href="index-grid.html">Home Grid</a></li>
											<li><a href="index-map.html">Home Map</a></li>
										</ul>
									</li>-->

                                    <li><a href="/">Start</a></li>
									<li>{{ link_to_route('users.create_landlord', 'Hyra ut') }}</li>

									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Lägenheter i... <b class="caret"></b></a>
										<ul class="dropdown-menu">
											@if (isset($geomenu))
												@foreach ($geomenu as $key => $value)
													<li class="dropdown-submenu">
														<a href="#">{{ $key }}</a>
														<ul class="dropdown-menu">
															@foreach($value as $slug)
																<li><a href="{{ $slug[0] }}">{{ $slug[1] }}</a></li>
															@endforeach
														</ul>
													</li>
												@endforeach
											@endif

										</ul>
									</li>

									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Konto<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="pricing-tables.html">Prenumerationer</a></li>

											@if(!Auth::check())
											<li class="divider"></li>
											<li><a href="{{ route('sessions.create') }}">Logga in</a></li>
											<li><a href="{{ route('users.create') }}">Skapa konto</a></li>
											@endif

											<li class="divider"></li>
											<li><a href="faq.html">FAQ</a></li>
										</ul>
									</li>

									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Blogg<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="blog-detail.html">Blog Detail</a></li>
											<li><a href="blog-listing1.html">Blog Listing 1</a></li>
											<li><a href="blog-listing2.html">Blog Listing 2</a></li>
											<li><a href="blog-listing3.html">Blog Listing 3</a></li>
											<li><a href="blog-listing4.html">Blog Listing 4</a></li>
										</ul>
									</li>

									<li><a href="contacts.html">Kontakt</a></li>
								</ul>

							</nav>
							<!-- END MAIN MENU -->

						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->