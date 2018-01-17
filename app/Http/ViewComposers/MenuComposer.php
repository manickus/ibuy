<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class MenuComposer
{
    public $categories = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::menu();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        
        $view->with('categories', $this->categories);
    }
}