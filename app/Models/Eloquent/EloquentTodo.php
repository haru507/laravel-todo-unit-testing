<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Todo Eloquentモデル
 *
 * @mixin IdeHelperEloquentTodo
 */
class EloquentTodo extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * モデルに関連づけるテーブル
     *
     * @var string
     */
    protected $table = 'todos';

    /**
     * テーブルに関連する主キー
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'isCompleted'
    ];
}
