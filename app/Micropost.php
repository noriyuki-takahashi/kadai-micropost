<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    /**
     * 多対多の関係を正確に記述するため...
     * belongsToMany(関連づけるモデル名, 使用する中間テーブル名, 中間テーブルに保存されている自分のidのカラム名, 中間テーブルに保存されている関係先のidのカラム名);
     */
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites',  'micropost_id', 'user_id')->withTimestamps();
    }
}
