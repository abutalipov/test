<?php


namespace app\models;


class News
{

    public $news=[
        ["title"=>"Первая новость", "path"=>"news1"],
        ["title"=>"Вторая новость", "path"=>"news2"],
    ];
    public function getNews($path){
        foreach ($this->news as $newsi){
            if($newsi['path']==$path){
                return $newsi;
            }
        }
        return false;
    }
    public function getAllNews(){
        return $this->news;
    }
}