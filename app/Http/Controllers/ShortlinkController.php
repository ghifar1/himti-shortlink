<?php

namespace App\Http\Controllers;

use App\Models\Shortlink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShortlinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('authbiasa')->except('search');
    }

    public function index()
    {
        $shortlinks = Shortlink::all();

        return response()->json($shortlinks, 200);
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'slug' => 'required',
            'target' => 'required',
        ]);

        if($validated->fails())
        {
            return response()->json($validated->errors(), 400);
        }

        $shortlink = Shortlink::create($request->all());

        return response()->json($shortlink, 200);
    }

    public function search($slug)
    {
        $shortlink = Shortlink::where('slug', $slug)->first();

        if(!$shortlink) return view('404');

        return redirect($shortlink->target);
    }

    public function destroy($id)
    {
        $shortlink = Shortlink::find($id);
        if(!$shortlink) return response()->json('data not found', 404);
        $shortlink->delete();

        return response()->json("OK", 200);
    }
}
