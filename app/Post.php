<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    //
    
    
    public function getBodyHtmlAttribute($value){
        return Markdown::convertToHtml(e($this->body));
    }
}
