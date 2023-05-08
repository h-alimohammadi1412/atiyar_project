<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['img','title','description','body','parent_id','link','en_name','status','search_url'];
    public static function getCategories(){
        $categories =['0'=>'دسته والد'];
        $categoryParent = self::with('getChild.getChild')->where('parent_id' ,0)->get();

        foreach($categoryParent as $value1){
            $categories[$value1->id] = $value1->title;
            foreach ($value1->getChild as $key => $value2) {
                $categories[$value2->id] = ' - - '. $value2->title;
                foreach ($value2->getChild as $key => $value3) {
                    $categories[$value3->id] = ' - - - '. $value3->title;
                }
            }
        }
        return $categories;
        
    }
    
    public function getChild(){
        return $this->hasMany(Category::class,'parent_id','id');
    }

}
