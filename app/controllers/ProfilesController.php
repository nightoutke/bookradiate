<?php

class ProfilesController extends BaseController {

    /**
     * Profile Repository
     *
     * @var Profile
     */
    protected $profile;
    protected $course;

    public function __construct(Profile $profile, Course $course)
    {
        $this->profile = $profile;
        $this->course = $course;
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $profiles = $this->profile->all();

        return View::make('profiles.index', compact('profiles'));

        //From CoursesController
        // $courses = Course::all();
        // return View::make('courses.show', compact('courses'));

        // var_dump($courses);
        // var_dump($profiles);
        // exit();
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Profile::$rules);

        if ($validation->passes())
        {
            $this->profile->create($input);

            return Redirect::route('profiles.index');
        }

        return Redirect::route('profiles.create')
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
        $profile = $this->profile->findOrFail($id);
        

        return View::make('profiles.show', compact('profile'));
        
        //From CoursesController.php
        // $courses = $arrayName = array('courses' => 'courses.show', compact('course'));
        // $course = $this->course->findOrFail($id);

        // return View::make('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $profile = $this->profile->find($id);


        if (is_null($profile))
        {
            return Redirect::route('profiles.index');
        }

        return View::make('profiles.edit', compact('profile'));
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
        $validation = Validator::make($input, Profile::$rules);

        if ($validation->passes())
        {
            $profile = $this->profile->find($id);
            $profile->update($input);

            return Redirect::route('profiles.show', $id);
        }

        return Redirect::route('profiles.edit', $id)
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
        $this->profile->find($id)->delete();

        return Redirect::route('profiles.index');
    }

}