<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsModel;

class NewsController extends Controller
{
    /**
     * news
     */
    private $news;

    public function __construct(NewsModel $news)
    {
        $this->news = $news;
    }

    public function index()
    {
        $posts = $this->news->simplepaginate(3);

        return view('news.index', compact('posts'));
    }

    public function show($id)
    {
        $news = $this->news->find($id);

        $gallery = json_decode($news->gallery);

        return view('news.show', compact('news', 'gallery'));
    }

}
