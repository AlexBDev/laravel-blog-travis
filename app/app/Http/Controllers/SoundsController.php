<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sound;
use Illuminate\Http\Request;

class SoundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $sounds = Sound::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('author_id', 'LIKE', "%$keyword%")
                ->orWhere('thumbail', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $sounds = Sound::paginate($perPage);
        }

        return view('sounds.index', compact('sounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('sounds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:15'
		]);
        $requestData = $request->all();
        
        Sound::create($requestData);

        return redirect('sounds')->with('flash_message', 'Sound added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $sound = Sound::findOrFail($id);

        return view('sounds.show', compact('sound'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $sound = Sound::findOrFail($id);

        return view('sounds.edit', compact('sound'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:15'
		]);
        $requestData = $request->all();
        
        $sound = Sound::findOrFail($id);
        $sound->update($requestData);

        return redirect('sounds')->with('flash_message', 'Sound updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Sound::destroy($id);

        return redirect('sounds')->with('flash_message', 'Sound deleted!');
    }
}
