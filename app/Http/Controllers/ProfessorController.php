<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfessorController extends Controller
{
    public function lista(){
		return DB::select('select * from professor');
    }
    
    public function cadastrar(Request $request){
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
        $res = DB::table('professor')->insertGetId(['nome'=>$data['nome'], 'data_nascimento'=>$data['nascimento']]);
        return $res;
    }

    public function deletar($id){
        $res = DB::table('professor')->where('id_professor', '=', [$id])->delete();
        return ["status" => ($res)?'ok':'erro'];
    }

    public function atualizar($id, Request $request){
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
        $arr = array('nome'=>$data['nome'], 'data_nascimento'=>$data['nascimento']);
        $res = DB::table('professor')
                ->where('id_professor', [$id])
                ->update($arr);
        return ["status" => ($res)?'ok':'erro'];
    }
}
