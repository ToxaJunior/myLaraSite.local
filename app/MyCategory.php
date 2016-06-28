<?php
/**
 * Created by PhpStorm.
 * User: Тоха
 * Date: 16.06.2016
 * Time: 22:28
 */

namespace App;


class MyCategory
{
    public $categories = [];
    public $procesedCategories = [];

    public function getCategory($categoryNames){

        $this->categories = $this->changeCategoryToArray($categoryNames);
        $this->outTree(0, 0);
        return $this->procesedCategories;
    }
    public function changeCategoryToArray($categoryNames){

        foreach($categoryNames as $categoryName){

            $categories[$categoryName->parent_id][] = $categoryName;
        }
        return $categories;
    }
    public function outTree($parent_id, $level = 0) {
        if (isset($this->categories[$parent_id])) { //Если категория с таким parent_id существует обходим ее
            foreach ($this->categories[$parent_id] as $value) {

                $value->level = $level;
                $this->procesedCategories[] = $value;

                $level++;
                //Рекурсивно вызываем этот же метод, но с новым $parent_id и $level
                $this->outTree($value->id, $level);
                $level--;
            }
        }
        return $this->procesedCategories;
    }
}
//                if($parent_id == 0) {
//                    echo "<li ><a id='$value->id' href='/showArticle/" . $value->id . "'>" . $value->name . "</a></li>";
//                }


//    if($parent_id == $value->parent_id){
//        // если елемент массива подкатегорий первый выводим перед ним тег ul
//        if($value == reset($this->categories[$parent_id])){
//            if($parent_id == 0){
//                echo "<ul class='subcategory'>";
//            }
//            else{
//                echo "<ul id='list_".$value->parent_id."' class='subcategory' style='display:none'>";
//            }
//
//        }
// если елемент массива подкатегорий последний закрываем тег ul
//    if($value == end($this->categories[$parent_id])) {
//        echo "<li style='margin-left:" . ($level * 50) . "px;'
//            onmouseover='javascript:Menu('".$value->id."')'>
//            <a id='$value->id' href='/showArticle/" . $value->id . "'>" . $value->name . "</a>
//          </li></ul>";
//    }
//    else {
//        echo "<li style='margin-left:" . ($level * 50) . "px;'
//            onmouseover='javascript:Menu('".$value->id."')'>
//            <a id='$value->id' href='/showArticle/" . $value->id . "'>" . $value->name . "</a>
//          </li>";
//    }
//}


//                else{
//                    // если елемент массива подкатегорий первый выводим перед ним тег ul
//                    if($value == reset($this->categories[$parent_id])){
//                        echo "<ul id='$value->id' class='subcategory'>";
//                    }
//                    // если елемент массива подкатегорий последний закрываем тег ul
//                    if($value == end($this->categories[$parent_id])) {
//                        echo "<li style='margin-left:" . ($level * 50) . "px;'>
//                            <a href='/showArticle/" . $value->id . "'>" . $value->name . "</a>
//                          </li></ul>";
//                    }
//                    else {
//                        echo "<li style='margin-left:" . ($level * 50) . "px;'>
//                            <a href='/showArticle/" . $value->id . "'>" . $value->name . "</a>
//                          </li>";
//                    }
//                }