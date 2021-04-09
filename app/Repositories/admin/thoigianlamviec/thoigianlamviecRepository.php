<?php
namespace App\Repositories\admin\thoigianlamviec;


use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class thoigianlamviecRepository extends BaseRepository implements thoigianlamviecRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\thoigianlamviec::class;
    }

    public function Thoigianlamviec()
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