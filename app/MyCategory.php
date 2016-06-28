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