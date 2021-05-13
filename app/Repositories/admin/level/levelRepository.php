<?php
namespace App\Repositories\admin\level;


use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class levelRepository extends BaseRepository implements levelRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\level::class;
    }

    public function Level()
    {
        return $this->model->select('id','level_ten','mota','level_slug')->whereNull('deleted_at')->get();
    }

    public function Find($slug)
    {
        return $this->model->where('level_slug',$slug)->first();
    }

    public function Edit(Request $request,$slug)
    {
        return $this->model->where('level_slug',$slug)
        ->update([
            'level_ten' => $request->get('level_ten'),
            'mota'=> $request->get('mota'),
            'level_slug'=>Str::slug($request->get('level_ten'),'-')
        ]);
    }

    public function Delete($slug)
    {
        return  $this->model->where('level_slug', $slug)->delete();
    }
}