<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $fillable = ['name','description'];

    public $timestamps = false;

    private $name;

    private $description;

    public function setNameCategory($name)
    {
    	$this->name = $name;
    	//return $this;
    }

    public function setDescription($description)
    {
    	$this->description = $description;
    	//return $this;
    }

    public function setValuesCategory(Request $request)
    {
    	$this->setNameCategory($request->name)
     ->setDescription($request->description);
     return $this;
 }
}
