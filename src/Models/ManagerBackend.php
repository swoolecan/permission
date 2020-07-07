<?php

declare(strict_types = 1);

namespace App\Model\Passport;

use App\Model\Traits\TraitUser;

class ManagerBackend extends Model
{
    use TraitUser;

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
