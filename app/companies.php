<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\subsidiaries;
use Auth;

class companies extends Model
{
    protected $fillable = [
        'name', 'rfc', 'img', 'user_id'
    ];
    
    public function subsidiary(){
		return $this->belongsTo('App\subsidiaries');
    }

    public function getSubsidiaries(){
    	$user = Auth::user();
        $company = companies::where('user_id', $user['id'])->get()->first();

        return $subsidiaries = subsidiaries::where('company_id', $company['id'])->get();
    }

    public function getCompany(){
    	$user = Auth::user();
        $company = companies::where('user_id', $user['id'])->get()->first();

        return $company;
    }
}
