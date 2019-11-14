<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['author_name','author_email_address','author_phone_number','author_facebook','author_twitter','author_instagram','author_address','author_image'];
    public static function newAuthorInfo($request){
        $author = Author::find($request->id);
        $image = $request->file('author_image');
        if($image){
            $imageName = str_random('2'). $image->getClientOriginalName();
            $dir = "Gallery-image/author-image";
            unlink($author->author_image);
            $image->move($dir,$imageName);
            $author->author_image                   = $dir.'/'.$imageName;
        }

        $author->author_name                    = $request->author_name;
        $author->author_email_address           = $request->author_email_address;
        $author->author_phone_number            = $request->author_phone_number;
        $author->author_facebook                = $request->author_facebook;
        $author->author_twitter                 = $request->author_twitter;
        $author->author_instagram               = $request->author_instagram;
        $author->author_address                 = $request->author_address;
        $author->save();
    }
}
