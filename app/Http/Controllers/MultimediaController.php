<?php

namespace App\Http\Controllers;

use App\Multimedia;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MultimediaController extends Controller
{   
    /**
     * Get the multimedia objects from the project
     * @param  Project $project 
     * @return Multimedia           
     */
    public function get(Project $project)
    {
        return $project->multimedia;
    }

    /**
     * Store a new multimedia object
     * @param  Project $project 
     * @param  Request $request 
     * @return Response       
     */
    public function store(Project $project, Request $request)
    {
        $multimedia = new Multimedia;
        $multimedia->project_id = $project->id;
        $multimedia->path = $request->file('file')->store('project_images');
        $multimedia->type = $request->file('file')->getMimeType() == 'image/jpeg' ? 1 : 2;
        $multimedia->description = '';
        $multimedia->save();

        return response()->json([
            'status' => 'uploaded',
            'file' => $multimedia
        ], 200);
    }

    /**
     * Remove the file from the filesystem and delete it from the database
     * @param  Multimedia $multimedia 
     * @return Response               
     */
    public function destroy(Multimedia $multimedia)
    {
        $deleted = Storage::delete($multimedia->path);

        $multimedia->delete();

        return response()->json([
            'status' => 'deleted'
        ], 200);
    }
}
