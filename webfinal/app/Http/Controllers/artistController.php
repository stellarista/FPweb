<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class artistController extends Controller
{
    public function __construct(Artist $artist){
        $this->artist = $artist;
    }

    public function create(Request $request)
    {
        $newArtist=[
            'artist_name'=>$request->artist_name,
        ];

        //$newArtist = $this->artist->create($newArtist);

        if($newArtist!=null)
        {
            $data = $this->artist->create($newArtist);
            return response()->json($data,200);
        } else {
            return response()->json(['error' => 'Artist is not added'], 404);
        }
    }

    public function getByID($id)
    {
        $artistId=Artist::find($id)->value('id');
        $data=Artist::find($id);

        return $data;
    }

    public function show()
    {
        $show=Artist::all();

        return $show;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $updateArtist=Artist::where('id', $request->id)->update([
            'artist_name'=>$request->artist_name
        ]);

        return $updateArtist;
    }

    public function destroy(Request $request, $id)
    {
        Artist::where('id', $id)->delete();
    }
}
