<?php
namespace App\Repositories\admin\tinhtrangdonhang;


use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class tinhtrangdonhangRepository extends BaseRepository implements tinhtrangdonhangRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\tinhtrangdonhang::class;
    }

    public function Tinhtrangdonhang()
    {
        return $this->model->with('chitietdanhmuc','khuyenmai')->whereNull('deleted_at')->get();
    }

    public function Chang()
    {
        # code...
    }

    public function Find($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }

    public function Edit(Request $request,$slug)
    {
        
        return $this->model->where('slug',$slug)
        ->update([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'address' => $request->get('address'),
            'sdt'=> $request->get('sdt'),
            'level_id'=> $request->get('level_id'),
            'slug'=>Str::slug($request->get('name'),'-')
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