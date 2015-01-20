<?php

use L24\Repos\MenuRepository;

class TownsController extends \BaseController {

	/**
	 * @var MenuRepository
	 */
	private $menu;

	public function __construct(MenuRepository $menu)
	{
		$this->menu = $menu;
	}

	/**
	 * Display a listing of the resource.
	 * GET /towns
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /towns/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /towns
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /{town}
	 *
	 * @param  string  $town
	 * @return Response
	 */
	public function show($town)
	{
		return View::make('town.index')->withTown($town)->withGeomenu($this->menu->regionMenu());
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /towns/{id}/edit
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
	 * PUT /towns/{id}
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
	 * DELETE /towns/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}