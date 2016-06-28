<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use App\Category;
use App\MyCategory;
use App\ImageProcessor;

use App\Http\Requests;

class GalleryController extends Controller
{

    protected $dirSmall;
    protected $dirLarge;
    protected $dirOriginal;
    protected $fileName;
    private $category;

    public function __construct(MyCategory $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $content = Images::paginate(20);
        return view('adminView.gallery', array('content' => $content));
    }

    public function create()
    {

    }

    public function store(Request $request, ImageProcessor $imageProcessor)
    {
        if($request->hasFile('uploadfile')){

            $this->validate($request, array(
                'image ' => 'image',
            ));

            if ($request->file('uploadfile')->isValid()) {

                $tmp_name = $request->file('uploadfile')->getPathName();
                $category = $request['category'];

                switch ($category) {
                    case 'Плитка':
                        $category = 1;
                        break;
                    case 'Гипсокартон':
                        $category = 2;
                        break;
                    case 'Отделка':
                        $category = 3;
                        break;
                    case "Ремонт 'до' и 'после'":
                        $category = 4;
                        break;
                    case 'Другое':
                        $category = 5;
                        break;
                }
                    //получаем расширение файла
                $fileType = (image_type_to_extension(exif_imagetype($tmp_name)));
                    //генерируем новое имя файла
                $this->fileName = time() . $fileType;
                    //Генерируем пути к директориям сохранения превьюшек
                $this->dirSmall = public_path().'/upload/images_small/';
                $this->dirLarge = public_path().'/upload/images_large/';
                $this->dirOriginal = public_path().'/upload/images_original/';
                    //Сохраняем имя файла в БД
                Images::create(array('category' => $category, 'img' => $this->fileName));
                    //Создаем и сохраняем превьюшки
                $imageProcessor->resizeImg($tmp_name, $this->dirSmall . $this->fileName, array('thumbwidth' => 420, 'thumbheight' => 280));
                $imageProcessor->resizeImg($tmp_name, $this->dirLarge . $this->fileName, array('thumbwidth' => 0, 'thumbheight' => 600,
                    'cropwidth' => 860, 'cropheight' => 600));
                    //Сохраняем оригинал изображения
                $request->file('uploadfile')->move($this->dirOriginal, $this->fileName);
                return redirect()->back();
            }
        }
        echo 'Загрузка файла не удалась';
    }

    public function show()
    {
        $categories = Category::all();
        $categoryTree = $this->category->getCategory($categories);
        $images = Images::orderBy('id', 'desc')->paginate(9);
        return view('showGallery', array('images' => $images, 'categoryTree' => $categoryTree));
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {
        $image = Images::find($id);
        $image->delete();
        $this->dirSmall = public_path().'/upload/images_small/';
        $this->dirLarge = public_path().'/upload/images_large/';
        $this->dirOriginal = public_path().'/upload/images_original/';
        unlink($this->dirSmall.$image->img);
        unlink($this->dirLarge.$image->img);
        unlink($this->dirOriginal.$image->img);
        return redirect()->back();
    }
}




