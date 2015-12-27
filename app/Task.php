<?php

namespace App;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'content', 'finish_time'];
    protected $dates = ['finish_time'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public  function scopeLike($query, $field, $value){
        return $query->where($field, 'LIKE', "%$value%");
    }

    public function setFinishTimeAttribute($date)
    {
//        $this->attributes['finish_time'] = Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $this->attributes['finish_time'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
