<?php

namespace TinhPHP\Tool\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToolShortLink extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tool_short_links';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'short_url', 'url', 'views', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function getLinkShortUrlAttribute()
    {
        return base_url('sl/' . $this->short_url);
    }

    /**
     * random string 7 character
     * @param int $limit
     * @return string
     */
    public function generateShortUrl($limit = 7)
    {
        $str = md5(uniqid());
        $str = substr($str, 0, $limit);
        return strtolower($str);
    }
}
