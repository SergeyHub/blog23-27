<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        //dd($data);
        Tag::firstOrCreate($data);
        //Category::firstOrCreate([ 'title' => $data['title']],
        //    [ 'title' => $data['title']]);
        //return view('admin.category.create');
        return redirect()->route('admin.tag.index');
    }
}
