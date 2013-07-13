<?php

class VisitersController extends BaseController {

    /**
     * Visiter Repository
     *
     * @var Visiter
     */
    protected $visiter;

    public function __construct(Visiter $visiter)
    {
        $this->visiter = $visiter;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $visiters = $this->visiter->all();

        return View::make('visiters.index', compact('visiters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('visiters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Visiter::$rules);

        if ($validation->passes())
        {
            $this->visiter->create($input);

            return Redirect::route('visiters.index');
        }

        return Redirect::route('visiters.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $visiter = $this->visiter->findOrFail($id);

        return View::make('visiters.show', compact('visiter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $visiter = $this->visiter->find($id);

        if (is_null($visiter))
        {
            return Redirect::route('visiters.index');
        }

        return View::make('visiters.edit', compact('visiter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Visiter::$rules);

        if ($validation->passes())
        {
            $visiter = $this->visiter->find($id);
            $visiter->update($input);

            return Redirect::route('visiters.show', $id);
        }

        return Redirect::route('visiters.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->visiter->find($id)->delete();

        return Redirect::route('visiters.index');
    }

}