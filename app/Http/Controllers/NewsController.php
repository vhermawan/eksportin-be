<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\LikeNews;

class NewsController extends Controller
{
    public function getNews($category){
        if($category == 'all'){
            $news = News::select('news.*', 'category_news.name as category','cms_users.name as author')
                    ->leftJoin('cms_users', 'news.id_cms_users', '=', 'cms_users.id')
                    ->leftJoin('category_news', 'news.id_category_news', '=', 'category_news.id')
                    ->paginate(9);
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($news),
                'data' => [
                    'news' => $news->toArray()
                ],
            ],200); 
        }else{
            $news = News::select('news.*', 'category_news.name as category','cms_users.name as author')
                    ->leftJoin('cms_users', 'news.id_cms_users', '=', 'cms_users.id')
                    ->leftJoin('category_news', 'news.id_category_news', '=', 'category_news.id')
                    ->where('category_news.id', $category)
                    ->paginate(9);
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($news),
                'data' => [
                    'news' => $news->toArray()
                ],
            ],200); 
        }
    }

    public function getDetailNews($slug){
        $news = News::select('news.*', 'category_news.name as category','cms_users.name as author','cms_users.id')
                ->leftJoin('cms_users', 'news.id_cms_users', '=', 'cms_users.id')
                ->leftJoin('category_news', 'news.id_category_news', '=', 'category_news.id')
                ->where('slug',$slug)
                ->first();
        return response()->json([
            'status' => 'Success',
            'data' => [
                'news' => $news
            ],
        ],200); 
    }

    public function getLastNews(){
        $news = News::select('news.*', 'category_news.name as category','cms_users.name as author','cms_users.id')
                ->leftJoin('cms_users', 'news.id_cms_users', '=', 'cms_users.id')
                ->leftJoin('category_news', 'news.id_category_news', '=', 'category_news.id')
                ->orderBy('news.id', 'desc')
                ->limit(3)
                ->get();
        return response()->json([
            'status' => 'Success',
            'data' => [
                'news' => $news
            ],
        ],200); 
    }
    
    public function getCorelateNews($category){
        $news = News::select('news.*', 'category_news.name as category','cms.users.id')
                ->leftJoin('cms_users', 'news.id_cms_users', '=', 'cms_users.id')
                ->leftJoin('category_news', 'news.id_category_news', '=', 'category_news.id')
                ->where('category_news.id', $category)
                ->paginate(3);
        return response()->json([
            'status' => 'Success',
            'size' => sizeof($news),
            'data' => [
                'news' => $news->toArray()
            ],
        ],200);  
    }

    public function likeNews($id){
        $news = LikeNews::where('id_news',$id)->first();

        if($news == null){
            $likeNews = new LikeNews;
            $likeNews->id_news = $id;
            $likeNews->count = 1;
            $likeNews->save();
            return response()->json([
                'status' => 'Success',
                'data' => [
                    'message' => 'Like news success'
                ],
            ],200);
        }else{
            $news->count = $news->count + 1;
            $news->save();
            return response()->json([
                'status' => 'Success',
                'data' => [
                    'news' => $news
                ],
            ],200); 
        }
    }

    public function getLikeNews($id){
        $news = LikeNews::where('id_news',$id)->first();

        if($news == null){
            return response()->json([
                'status' => 'Success',
                'data' => [
                    'count' => 0,
                ],
            ],200);
        }else{
            return response()->json([
                'status' => 'Success',
                'data' => [
                    'count' => $news->count,
                ],
            ],200);
        } 
    }

    public function unLikeNews($id){
        $news = LikeNews::where('id_news',$id)->first();

        $news->count = $news->count - 1;
        $news->save();
        return response()->json([
            'status' => 'Success',
            'data' => [
                'news' => $news
            ],
        ],200);
    }
}
