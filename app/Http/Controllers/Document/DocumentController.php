<?php

namespace App\Http\Controllers\Document;

use App\Category;
use App\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('documents.index')->with(compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('documents.create')->with(compact('categories'));
    }

    public function consult($id)
    {
        $category = Category::find($id);
        $documents = Document::where('category_id', $id);

        return view('documents.consult')->with(compact('category','documents'));
    }
}
