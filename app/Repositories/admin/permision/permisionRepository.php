<?php
namespace App\Repositories\admin\permision;


use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class permisionRepository extends BaseRepository implements permisionRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\permision::class;
    }

    public function Permision()
    {
        return $this->model->select('permison_ten','slug')->whereNull('deleted_at')->get();
    }

    public function Find($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }

    public function Edit(Request $request,$slug)
    {
        
        return $this->model->where('slug',$slug)
        ->update([
            'permison_ten' => $request->get('permison_ten'),
            'slug'=>Str::slug($request->get('permison_ten'),'-')
        ]);
        
    }

    public function Delete($slug)
    {
        
        return  $this->model->where('slug', $slug)->delete();
        
    }

    // public function getEdit($slug)
    // {
    //     if(!$this->model->getfind($slug)){
    //         return 
    //     }
    //     return $this->model->with('level')->whereNull('deleted_at')->get();

    // }
}