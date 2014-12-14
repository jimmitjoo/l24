						<!-- BEGIN FIND AGENTS -->
						<div id="find_agents" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
							<h2 class="section-title">Find An Agent</h2>

							<img src="http://placehold.it/307x188" alt="" id="agents-img"/>

							<select id="agents_country" name="agents_country" data-placeholder="Choose a country">
								<option value=""> </option>
								<option value="Sweden">Sweden</option>
							</select>

							<select id="agents_state" name="agents_state" data-placeholder="Choose your state/region">
								<option value=""> </option>
								<option value="state1">State/Region1</option>
								<option value="state2">State/Region2</option>
								<option value="state3">State/Region3</option>
								<option value="state4">State/Region4</option>
								<option value="state5">State/Region5</option>
								<option value="state6">State/Region6</option>
							</select>

							<select id="agents_city" name="agents_city" data-placeholder="Choose your city">
								<option value=""> </option>
								<option value="city1">City1</option>
								<option value="city2">City2</option>
								<option value="city3">City3</option>
								<option value="city4">City4</option>
								<option value="city5">City5</option>
								<option value="city6">City6</option>
								<option value="city7">City7</option>
							</select>

							<div class="form-actions">
								<button class="btn btn-default">Search</button>
							</div>
						</div>
						<!-- END FIND AGENTS -->

						<!-- BEGIN AGENCIES -->
						<div id="agencies" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
							<h2 class="section-title">Our Agencies</h2>

							<div class="mapborder">
								<div id="map_agency" class="gmap"></div>
							</div>
							<select id="agency" name="agency" data-placeholder="Choose an agency">
								<option value=""> </option>
								<!-- The list of agencies will be automatically created.
									Set the list of agencies in the file js/agencies.js -->
							</select>
						</div>
						<!-- END AGENCIES -->