<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    //
    protected $fillable = ['body', 'image'];
    
    
    public function getBodyHtmlAttribute($value)
    {
        return Markdown::convertToHtml(e($this->body));
    }
    
    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }
    
}
