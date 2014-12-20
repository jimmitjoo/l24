		<!-- BEGIN HEADER -->
		<header id="header">
			<div id="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul id="top-info">
								<li>Telefon: 0730-361 869</li>
								<li>E-post: <a href="mailto:info@nirmea.com">info@nirmea.com</a></li>
							</ul>

							<ul id="top-buttons">
								<li><a href="#"><i class="fa fa-sign-in"></i> Logga in</a></li>
								<li><a href="{{ route('users.create') }}"><i class="fa fa-pencil-square-o"></i> Registrera</a></li>

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
							<a href="index.html" class="nav-logo"><img src="images/logo.png" alt="Cozy Logo" /></a>

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
											<li class="dropdown-submenu">
												<a href="#">Blekinge län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Karlskrona</a></li>
													<li><a href="#">Olofström</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Dalarnas län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Falun</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Gotlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Visby</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Gävleborgs län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Gävle</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Hallands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Halmstad</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Jämtlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Östersund</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Jönköpings län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Jönköping</a></li>
													<li><a href="#">Huskvarna</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Kalmar län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Kalmar</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Kronobergs län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Växjö</a></li>
													<li><a href="#">Ljungby</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Norrbottens län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Luleå</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Skåne län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Malmö</a></li>
													<li><a href="#">Helsingborg</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Stockholms län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Stockholm</a></li>
													<li><a href="#">Solna</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Södermanlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Nyköping</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Uppsala län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Uppsala</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Värmlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Karlstad</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Västerbottens län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Umeå</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Västernorrlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Härnösand</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Västmanlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Västerås</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Västra Götalands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Göteborg</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Örebro län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Örebro</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">Östergötlands län</a>
												<ul class="dropdown-menu">
													<li><a href="#">Linköping</a></li>
													<li><a href="#">Norrköping</a></li>
												</ul>
											</li>
										</ul>
									</li>

									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Konto<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="pricing-tables.html">Prenumerationer</a></li>
											<li class="divider"></li>
											<li><a href="login.html">Logga in</a></li>
											<li><a href="{{ route('users.create') }}">Registrera</a></li>

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