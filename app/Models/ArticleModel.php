<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function getAll() {
        $all = DB::table('article')->get();
        return $all;
    }

    public static function save($data) {
        $save = DB::table('article')->insert($data);
        return $save;
    }

    public static function findArticleById($id) {
        $item = DB::table('article')->where('id',$id)->get();
        return $item;
    }

    public static function delete($id) {
        $item = DB::table('article')
                ->where('id',$id)
                ->delete();
        return $item;
    }

    public static function update($id,$request) {
        $item = DB::table('article')
                ->where('id',$id)
                ->update([
                    'isi' => $request['isi'],
                    'judul' => $request['judul'],
                    'slug' => $request['slug'],
                ]);
         return $item;
    }
}
