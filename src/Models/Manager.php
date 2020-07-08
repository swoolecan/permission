<?php

declare(strict_types = 1);

namespace Swoolecan\Permission\Models;

//use App\Model\Traits\TraitUser;

class Manager extends Model
{
    //use TraitUser;

    protected $table = 'auth_manager_backend';
    protected $primaryKey = 'id';
    protected $guarded = ['created_at', 'last_login_at', 'updated_at'];
    protected $fillable = [
        'name', 'email', 'mobile', 'password', 'sex', 'real_name', 'signin_num', 'signin_first_at', 'last_at', 'last_ip'
    ];

    public function checkEnable()
    {
        return $this->status == 1;
    }
}
