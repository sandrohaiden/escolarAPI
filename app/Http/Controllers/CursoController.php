<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CursoController extends Controller
{
    public function lista(){
		return DB::select('select curso.*, pro.nome as professor, pro.id_profesor from curso 
                            inner join professor pro on curso.id_professor = pro.id_professor');
    }
    
    public function cadastrar(Request $request){
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
        $arr = array('nome'=>$data['nome'], 'data_criacao'=>$data['criacao'], 'id_professor'=>$data['professor']);
        $res = DB::table('curso')->insertGetId($arr);
        return $res;
    }

    public function deletar($id){
        $res = DB::table('curso')->where('id_curso', '=', [$id])->delete();
        return ["status" => ($res)?'ok':'erro'];
    }

    public function atualizar($id, Request $request){
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
        $arr = array('nome'=>$data['nome'], 'data_criacao'=>$data['criacao'], 'id_professor'=>$data['professor']);
        $res = DB::table('curso')
                ->where('id_curso', [$id])
                ->update($arr);
        return ["status" => ($res)?'ok':'erro'];
    }
}
