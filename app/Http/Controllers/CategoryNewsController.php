<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryNewsController extends Controller{

    protected $news = [
        [
            'id' => 1,
            'title' => 'Новость номер 1',
            'text'  => 'Описание новости номер 1'
        ],
        [
            'id' => 2,
            'title' => 'Новость номер 2',
            'text'  => 'Описание новости номер 2'
        ],
        [
            'id' => 3,
            'title' => 'Новость номер 3',
            'text'  => 'Описание новости номер 3'
        ],
    ];

    public function category(){
        return view('category.index');
    }

    public function sport(){
        return view('category.sport', ['news' => $this->news]);
    }
    public function medic(){
        return view('category.medic', ['news' => $this->news]);
    }
    public function lifehacks(){
        return view('category.lifehacks', ['news' => $this->news]);
    }
    public function builder(){
        return view('category.builder', ['news' => $this->news]);
    }

    public function openNews($id){
        return 'Вы открыли новость №'.$id;
    }
}
