<?php namespace App\Http\Controllers;
 
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;
 
class ProjectsController extends Controller {
 
    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],	
    ];
    
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
            $projects = Project::all();
            return view('projects.index', compact('projects'));
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
            return view('projects.create');
    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:255',
                'slug' => 'required|min:3|max:255',
            ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        
        //$validator = Validator::make(Input::all(), $this->rules);
        
        //
        $input = Input::all();
	Project::create( $input );
 
	return Redirect::route('projects.index')->with('message', 'Success: Your Project created.');
    }

    /**
        * Display the specified resource.
        *
        * @param  \App\Project $project
        * @return Response
        */
    public function show(Project $project)
    {
            return view('projects.show', compact('project'));
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Project $project
        * @return Response
        */
    public function edit(Project $project)
    {
            return view('projects.edit', compact('project'));
    }

    /**
        * Update the specified resource in storage.
        *
        * @param  \App\Project $project
        * @return Response
        */
    public function update(Project $project, Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:255',
                'slug' => 'required|min:3|max:255',
            ]);

        if ($validator->fails()) {
            return redirect()->back() // '/projects/'. $project->slug.'/edit' )
                ->withInput()
                ->withErrors($validator);
        }
        
        //
        $input = array_except(Input::all(), '_method');
	$project->update($input);
 
	return Redirect::route('projects.show', $project->slug)->with('message', 'Success: Your Project updated.');
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Project $project
        * @return Response
        */
    public function destroy(Project $project)
    {
        //
        $project->delete();
 
	return Redirect::route('projects.index')->with('message', 'Success: Your Project deleted.');
    }
 
}
