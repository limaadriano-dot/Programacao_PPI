<?php 
require_once __DIR__ . '/../models/tarefas.php';
class TarefasController {

    private $tarefaModel;

    public function __construct(){
        $this->tarefaModel = new Tarefa();
    }

    #Criar
    public function criar(){
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
         $this->tarefaModel->criar($_POST['descricao']);   
        }

        header("Location: index.php");
        
    }
    #Excluir

    public function excluir(){
        if(isset($_POST['delete'])){
            $this->tarefaModel->excluir($_GET['delete']);
        }
        header("Location: index.php"); 
    }

}


?>