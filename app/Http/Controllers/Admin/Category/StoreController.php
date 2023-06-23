<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        //dd($data);
        Category::firstOrCreate($data);
        //Category::firstOrCreate([ 'title' => $data['title']],
        //    [ 'title' => $data['title']]);
        //return view('admin.category.create');
        return redirect()->route('admin.category.index');
    }
}
