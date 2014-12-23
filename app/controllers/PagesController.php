<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index')->withGeomenu($this->geomenu());
	}

	public function geomenu()
	{
		$towns = DB::table('regions')->orderBy('name')->join('towns', 'towns.region_id', '=', 'regions.id')->orderBy('town')->get();

		$regions = [];
		foreach ($towns as $town) {
			if (!isset($regions[$town->name])) {
				$regions[$town->name] = [];
			}

			$regions[$town->name][] = [$town->slug, $town->town];
		}

		return $regions;

		/*$menu = [
			'/' => 'Start',
			link_to_route('users.create_landlord', 'Hyra ut') => 'Hyra ut',
			'#' => [
				$regions
			],
			'#' => [
				'#' => 'Prenumerationer',
				'<li class="divider"></li>',
				link_to_route('sessions.create', 'Logga in')
			]

		];*/
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}