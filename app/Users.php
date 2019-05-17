<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Users extends Model
{
    private $full_name;
    private $email;
    private $password;
    private $phone;
    private $address;
    private $role;

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['full_name', 'email', 'password', 'phone', 'address', 'role'];

    public function setName($full_name)
    {
        $this->full_name = $full_name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPassWord($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function makeObjFromRequest(Request $request)
    {
        $this
            ->setName($request->input('full_name'))
            ->setEmail($request->input('email'))
            ->setPassWord($request->input('password'))
            ->setPhone($request->input('phone'))
            ->setAddress($request->input('address'))
            ->setRole($request->input('role'));

        return $this;
    }
}
