<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;
use App\Models\user_skill;
use App\Models\User;


class UserSkillController extends Controller
{
    public function index(){
        $user=user::all();

        foreach($user as $ammar){
            echo $ammar->id . ' ';
            echo $ammar->name  ;
            $skill=user_skill::all()->where('user_id',$ammar->id);
            foreach($skill as $val){
                echo $val->skill->name. '<br>';
            }
        }
    }


    public function username($user_name){
        $name_user=user::all()->where('name',$user_name)->first();
        $user= user_skill::all()->where('user_id',$name_user->id);

        foreach($user as $ammar){

            echo $user_name . '    ' . $ammar->skill->name  .'    ';
        }
    }


    public function skillid($skill_id ){
        $skill=skill::all()->where('id',$skill_id)->first();
        $user= user_skill::all()->where('skill_id',$skill->id);
        foreach($user as $ammar){
            echo $skill->name . '    ' . $ammar->user->name  .'    ';
        }
    }

}
