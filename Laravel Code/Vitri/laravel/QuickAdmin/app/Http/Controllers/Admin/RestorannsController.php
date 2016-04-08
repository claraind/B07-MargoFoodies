<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Restoranns;
use App\Http\Requests\CreateRestorannsRequest;
use App\Http\Requests\UpdateRestorannsRequest;
use Illuminate\Http\Request;



class RestorannsController extends Controller {

	/**
	 * Display a listing of restoranns
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $restoranns = Restoranns::all();

		return view('admin.restoranns.index', compact('restoranns'));
	}

	/**
	 * Show the form for creating a new restoranns
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.restoranns.create');
	}

	/**
	 * Store a newly created restoranns in storage.
	 *
     * @param CreateRestorannsRequest|Request $request
	 */
	public function store(CreateRestorannsRequest $request)
	{
	    
		Restoranns::create($request->all());

		return redirect()->route('admin.restoranns.index');
	}

	/**
	 * Show the form for editing the specified restoranns.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$restoranns = Restoranns::find($id);
	    
	    
		return view('admin.restoranns.edit', compact('restoranns'));
	}

	/**
	 * Update the specified restoranns in storage.
     * @param UpdateRestorannsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateRestorannsRequest $request)
	{
		$restoranns = Restoranns::findOrFail($id);

        

		$restoranns->update($request->all());

		return redirect()->route('admin.restoranns.index');
	}

	/**
	 * Remove the specified restoranns from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Restoranns::destroy($id);

		return redirect()->route('admin.restoranns.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Restoranns::destroy($toDelete);
        } else {
            Restoranns::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.restoranns.index');
    }

}
