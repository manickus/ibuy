<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;


class CategoryController extends Controller
{

	public function __construct()
	{
		Carbon::setLocale('pl');
	}

	
    public function show(Category $category)
    {
      $ads = $category->ads()->latest()->paginate(9);
    	 $categories = Category::pluck('name','id');


      return view('category.show',['category' => $category,
                                    'ads' => $ads,
                                    'categories' => $categories,
                                     ]);

    }
}
