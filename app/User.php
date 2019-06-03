<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthdate', 'phone', 'neighborhood', 'county', 'user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isProvider(){
        if($this->where('user_type', 'provider')){
            return true;
        }
        return false;
    }

    public function changeToProvider($id){
        $user = User::find($id);
        $user['user_type'] = 'provider';
        $user->save();

        return redirect()->route('profile');

    }

    public function checkIfSubsidiaries(){
        $user = Auth::user();

        $subsidiaries = subsidiaries::select('subsidiaries.*')
        ->join('companies', 'companies.id', '=', 'subsidiaries.company_id')
        ->join('users', 'users.id', '=', 'companies.user_id')
        ->where('users.id', $user['id'])
        ->get();

        $controller = new Controller;

        $error = $controller->hasInput($products);

        return $error;
    }
}
