<?php

namespace App\Http\Controllers;

use App\Models\dataMusic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DataMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = new dataMusic();
        $date = $request->date_filter;

        switch($date){
            case 'today':
                $data->whereDate('tgl_rilis',Carbon::today());
                break;
            case 'yesterday':
                $data->whereDate('tgl_rilis',Carbon::yesterday());
        }
        
        if($request->get('search')){
            $data = $data->where('artist','LIKE','%'.$request->get('search').'%')
            ->orWhere('music_name','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('/dashboardAdmin/index',compact('data','request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function     create(Request $request)
    {
        
        return view('/dashboardAdmin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Validator::make($request->all(),[
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'artist' => 'required',
            'genre' => 'required',
            'name_music' => 'required',
            'file_music' => 'required',
            'tgl_rilis' => 'required',
        ]);

        if($insert->fails()) return redirect()->back()->withInput()->withErrors($insert);

        $image = $request->file('image');
        $filename = date('y-m-d').$image->getClientOriginalName();
        $path = 'image-music/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));

        $data['image'] = $filename;
        $data['artist'] = $request->artist;
        $data['genre'] = $request->genre;
        $data['music_name'] = $request->name_music;
        $data['music_file'] = $request->file_music;
        $data['tgl_rilis'] = $request->tgl_rilis;
        
        dataMusic::create($data);
        return redirect()->route('user.index.admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataMusic $dataMusic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $data = dataMusic::find($id);
        return view('/dashboardAdmin/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $insert = Validator::make($request->all(),[
            'image' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'name_music' => 'required',
            'file_music' => 'required',
            'tgl_rilis' => 'required',
        ]);

        if($insert->fails()) return redirect()->back()->withInput()->withErrors($insert);

        $data['image'] = $request->image;
        $data['artist'] = $request->artist;
        $data['genre'] = $request->genre;
        $data['music_name'] = $request->name_music;
        $data['music_file'] = $request->file_music;
        $data['tgl_rilis'] = $request->tgl_rilis;
        
        dataMusic::whereId($id)->update($data);
        return redirect()->route('index.admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $data = dataMusic::find($id);
        if($data){
            $data->delete();
        }

        return redirect()->route('user.index.admin');
    }
}
