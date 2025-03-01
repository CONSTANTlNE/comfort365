<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function gallery()
    {
        $works = Portfolio::with('media')->get();

        return view('site.gallery', compact('works'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'file'     => 'required|array|min:1',
            'file.*'   => 'required|mimes:jpg,jpeg,png,webp',
            'category' => 'required|string|max:255',
            'title'    => 'nullable|string|max:255',
        ]);


        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $work           = new Portfolio();
                $work->title    = $request->title;
                $work->category = $request->category;
                $work->save();
                $work->addMedia($file)->toMediaCollection('uploads');
            }
        }

        return back();
    }

    public function update(Request $request)
    {
        $work           = Portfolio::find($request->id);
        $work->title    = $request->title;
        $work->category = $request->category;
        $work->save();

        return back();
    }

    public function delete(Request $request)
    {
        $work = Portfolio::find($request->id);
        $work->media->first()->delete();
        $work->delete();

        return back();
    }


}
