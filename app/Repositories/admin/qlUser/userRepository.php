<?php
namespace App\Repositories\admin\qlUser;


use App\Repositories\BaseRepository;

class userRepository extends BaseRepository implements userRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function getUser()
    {
        return $this->model->select('name','email','address','sdt','level_id')->get();
    }
}