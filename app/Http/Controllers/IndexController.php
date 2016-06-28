<?php
/**
 * Created by PhpStorm.
 * User: Тоха
 * Date: 08.05.2016
 * Time: 9:48
 */

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\MyCategory;
use App\Http\Requests;
use App\Images;
use DB;

class IndexController extends Controller
{
    private $category;

    public function __construct(MyCategory $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = Category::all();
        $categoryTree = $this->category->getCategory($categories);
        $images = Images::orderBy('id', 'desc')->get();
        return view('index', array('images' => $images, 'categoryTree' => $categoryTree));
    }
    public function show($id, $sliderTitle)
    {
        $categories = Category::all();
        $categoryTree = $this->category->getCategory($categories);
        $content = Page::where('id', '=', $id)->first();
        return view('article', array('content' => $content,
            'categoryTree' => $categoryTree,
            'sliderTitle' => $sliderTitle));
    }
    public function showLatestNews()
    {
        $categories = Category::all();
        $categoryTree = $this->category->getCategory($categories);

        $previews = Page::orderBy('id', 'desc')->paginate(3);
        return view('latest_news', array('previews' => $previews,
            'categoryTree' => $categoryTree,
            'sliderTitle' => 'Последние новости'));
    }
    public function showArticlesToCategories($category_id)
    {
        $categories = Category::all();
        $categoryTree = $this->category->getCategory($categories);

        foreach($categoryTree as $item){
            if($item->id == $category_id)
                $sliderTitle =  $item->name;
        }

        $previews = Page::orderBy('id', 'desc')->where('category_id', '=', $category_id)->paginate(3);
        return view('latest_news', array('previews' => $previews,
            'categoryTree' => $categoryTree,
            'sliderTitle' => $sliderTitle));
    }
}