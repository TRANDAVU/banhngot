<?php
namespace App\Repositories\admin\qlUser;


use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class userRepository extends BaseRepository implements userRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function User()
    {
        return $this->model->with('level')->whereNull('deleted_at')->orderBy('id','desc')->get();
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