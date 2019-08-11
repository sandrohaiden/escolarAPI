<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AlunoController extends Controller
{
    public function lista(){
		return DB::select('select * from aluno');
    }
    
    public function cadastrar(Request $request){
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
        $arr = array('nome'=>$data['nome'], 'data_criacao'=>$data['criacao'], 'id_curso'=>$data['curso'],
                    'data_nascimento'=>$data['nascimento'], 'logradouro'=>$data['logradouro'],
                    'numero'=>$data['numero'], 'bairro'=>$data['bairro'], 'cidade'=>$data['cidade'],
                    'estado'=>$data['estado'], 'cep'=>$data['cep']);
        $res = DB::table('aluno')->insertGetId($arr);
        return $res;
    }

    public function deletar($id){
        $res = DB::table('curso')->where('id_curso', '=', [$id])->delete();
        return ["status" => ($res)?'ok':'erro'];
    }

    public function atualizar($id, Request $request){
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
        $arr = array('nome'=>$data['nome'], 'data_criacao'=>$data['criacao'], 'id_curso'=>$data['curso'],
                    'data_nascimento'=>$data['nascimento'], 'logradouro'=>$data['logradouro'],
                    'numero'=>$data['numero'], 'bairro'=>$data['bairro'], 'cidade'=>$data['cidade'],
                    'estado'=>$data['estado'], 'cep'=>$data['cep']);

        $res = DB::table('aluno')
                ->where('id_aluno', [$id])
                ->update($arr);
        return ["status" => ($res)?'ok':'erro'];
    }
}
