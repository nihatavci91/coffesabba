<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class PageConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();

        return view('panel.pageconfig.index',['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(About $about,Request $request)
    {
        $data = $request->all();
        $validated = $request->validate([
            'description' => 'nullable',
            'images' => 'nullable',
            'images.*' => 'image|mimes:jpg,png,jpeg',
            'input_1' => 'nullable',
            'input_2' => 'nullable',
            'input_3' => 'nullable'
        ]);

        if ($validated['images']){
            foreach ($validated['images'] as $image) {
                $imageUrl = time() . "-" . $data["id"] . "-" . $image->getClientOriginalName();
                $image->move(public_path('about_images') . "/", $imageUrl);
            }

            $about->where('id',$data["id"])->update([
                'description' => $validated['description'],
                'image_url_1' => $imageUrl,
                'input_1' => $validated['input_1'],
                'input_2' => $validated['input_2'],
                'input_3' => $validated['input_3']
            ]);
        }else{
            $about->where('id',$data["id"])->update([
                'description' => $validated['description'],
                'input_1' => $validated['input_1'],
                'input_2' => $validated['input_2'],
                'input_3' => $validated['input_3']
            ]);
        }


        return redirect()->back()->with('successMessage', "Hakkımızda Sayfası Başarı ile Güncellendi");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
