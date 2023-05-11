<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices= Notice::all();
        return view('notice.index',compact('notices'));
    }

    public function create()
    {
        return view('notice.create');
    }


    public function store(Request $request)
    {
                //dd($request);  //it prints the  single data

                $data = $request->validate([
                    'notice'=>'required',
                    'priority'=>'required|numeric'
                ]);
        
               // dd($data); // printing the data 
                
        
                Notice::create($data);
                return redirect(route('notice.index'))->with('success','Notice created sucessfully!');
    }

    public function edit($id)
    {
        $notice= Notice::find($id);
        return view('notice.edit',compact('notice'));
        
    }
    
    public function update(Request $request, $id)
    {
        $data= $request->validate([
            'notice'=>'required',
            'priority'=>'required|numeric'

        ]);

        $notices= Notice::find($id);
        $notices->update($data);
        return redirect(route('notice.index'))->with('success','Notice updated sucessfully!');
        
    }
    
    public function destroy($id)
    {
        $notices = Notice::find($id);
        $notices->delete();
        return redirect(route('notice.index'))->with('success','Notice deleted sucessfully!');
    }
    
}
