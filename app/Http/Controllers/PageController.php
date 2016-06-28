<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\MyCategory;
use App\ImageProcessor;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class PageController extends Controller
{
    protected $dirNewsPreview;
    protected $dirNewsOriginal;
    protected $fileName;
    private $category;

    public function __construct(MyCategory $category)
    {
        $this->middleware('auth');
        $this->category = $category;
    }

    public function index()
    {
//        $this->authorize('admin');
        $content = DB::table('rem_content')
        ->join('article_category','article_category.id','=','rem_content.category_id')
        ->select('rem_content.*','article_category.name as category_name')->paginate(20);
        return view( 'adminView.articles', array('content' => $content));

    }
    public function showCategories()
    {
        $categories = Category::all();
        $categoryTree = $this->category->getCategory($categories);
        return view( 'adminView.categories', array('categoryTree' => $categoryTree));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('adminView.addPage', array('categories' => $categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ImageProcessor $imageProcessor)
    {
        $model = Page::create($request->all());

            if($request->hasFile('uploadfile')){

                $this->validate($request, array(
                    'image ' => 'image',
                ));

                if ($request->file('uploadfile')->isValid()) {

                    $tmp_name = $request->file('uploadfile')->getPathName();

                    //получаем расширение файла
                    $fileType = (image_type_to_extension(exif_imagetype($tmp_name)));
                    //генерируем новое имя файла
                    $this->fileName = time() . $fileType;
                    //Генерируем пути к директориям сохранения превьюшек
                    $this->dirNewsPreview = public_path().'/upload/images_news/';
                    $this->dirNewsOriginal = public_path().'/upload/images_news_original/';
                    //Сохраняем всю запись в БД

                    $page = Page::find($model->id);
                    $page->img_preview = $this->fileName;
                    $page->save();
    ;
                    //Создаем и сохраняем превьюшку
                    $imageProcessor->resizeImg($tmp_name, $this->dirNewsPreview . $this->fileName, array('thumbwidth' => 600, 'thumbheight' => 0));
                    //Сохраняем оригинал изображения
                    $request->file('uploadfile')->move($this->dirNewsOriginal, $this->fileName);
                }
            }
            else{ echo 'Загрузка файла не удалась';
                return redirect()->back();}
        return redirect('/page');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Page::find($id);
        return view('adminView.editPage', array('article' => $article));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content = Page::find($id);
        $content->rubrica = $request->rubrica;
        $content->title = $request->title;
        $content->article = $request->article;
        $content->save();
        return redirect('/page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $content = Page::find($id);
        $content->delete();
        $this->dirNewsPreview = public_path().'/upload/images_news/';
        $this->dirNewsOriginal = public_path().'/upload/images_news_original/';
        unlink($this->dirNewsPreview.$content->img_preview);
        unlink($this->dirNewsOriginal.$content->img_preview);
        return redirect('/page');
    }
}
