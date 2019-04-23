<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Tasks;

use DB;
use Auth;
use Storage;

class TasksController extends Controller
{
    private $task;
    
    public function __construct(Tasks $task){
        $this->task = $task;
    }
    
    public function index() : View
    {
        $tasks = $this->task
                        ->where('tare_user', Auth::user()->id)
                        ->orderBy('tare_venc', 'ASC')
                        ->get();
        return view('home', compact('tasks'));
    }
    
    public function adicionaTask(Request $request){
        $dados = $request->except('_token');
        $task = $this->task->create([
            'tare_user' => Auth::user()->id,
            'tare_titu' => $dados['tare_titu'],
            'tare_desc' => $dados['tare_desc'],
            'tare_venc' => date('Y-m-d', strtotime(str_replace('/', '-',$dados['tare_venc']))),
            'tare_stat' => 1,
            'created_by' => Auth::user()->id
        ]);
        return redirect()->route('tasks.index');
    }
    
    public function atualizaStatus(Request $request)
    {
        $dados = $request->all();
        $id = explode('md_checkbox_', $dados['id'])[1];
        $task = $this->task->findOrFail($id);
        $task->tare_stat = $dados['tipo'];
        $task->updated_by = Auth::user()->id;
        $task->save();
        return response()->json($task);
    }
    
    public function atualizaTask(Request $request)
    {
        $dados = $request->all();
        $task = $this->task->findOrFail($dados['tare_sequ']);
        $task->tare_titu = $dados['tare_titu'];
        $task->tare_venc = date('Y-m-d', strtotime(str_replace('/', '-',$dados['tare_venc'])));
        $task->tare_desc = $dados['tare_desc'];
        $task->updated_by = Auth::user()->id;
        $task->save();
        return response()->json($task);
    }
    
    public function excluiTask(Request $request){
        $dados = $request->all();
        $id = explode('md_checkbox_', $dados['id'])[1];
        $task = $this->task->findOrFail($id);
        $task->delete();
        return response()->json($task);
    }
    
}
