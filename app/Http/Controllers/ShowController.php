
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();

        return view('index', compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'group' => 'required|max:255',
            'phone_no' => 'required|numeric',
        ]);
        $show = Show::create($validatedData);
   
        return redirect('books')->with('success', 'Account is successfully saved');
        
       
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Show::findOrFail($id);

        return view('edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'group' => 'required|max:255',
            'phone_no' => 'required|numeric',
        ]);
         
        Show::whereId($id)->update($validatedData);

        return redirect('/shows')->with('success', 'Account is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::findOrFail($id);
        $show->delete();

        return redirect('/shows')->with('success', 'Account is successfully deleted');

    }
}
