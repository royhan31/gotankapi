<?php
namespace App\Transformers;

use App\Admin;
use League\Fractal\TransformerAbstract;

class AdminTransformers extends TransformerAbstract
{
    public function transform(Admin $admin)
    {
        return [
            'nama_admin' => $admin->nama_admin,
            'alamat' => $admin->alamat,
            'password' => $admin->password,
            //'registered' => $admin->created_at->diffForHumans(),
        ];
    }
}

?>