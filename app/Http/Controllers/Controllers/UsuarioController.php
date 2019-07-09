<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    private $usuario;
    private $totalPage = 3; //Paginação
    
    //CONSTRUTOR
    function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    
    public function index()
    {
        $title = 'Home Usuarios';
        
        $usuarios = $this->usuario->all();
        
        //$usuarios = $this->usuario->paginate($this->totalPage); PAGINACAO
        
        return view('usuarios.index', compact('usuarios', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar de Usuario";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('usuarios.create-edit', compact('categorys', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');
        
        $insert = $this->usuario->create($dataForm);
        
        if($insert)
        {
            //return redirect('/painel/produtos') ESTA LINHA JA RESOLVERIA
            return redirect()->route('usuarios.index'); //MELHOR JEITO DE FAZER
        }
        else
        {
            //return redirect()->route('produtos.create'); OUTRO JEITO
            return redirect()->back(); //RETORNA PARA ONDE VEIO
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this->usuario->find($id);
        
        $title = "Deletar produto: {$usuario->name}";
        
        return view('painel.usuarios.show', compact('usuario', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuario->find($id);
        
        $title = "Editar usuario: {$usuario->name}";
        
        //$categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('usuarios.create-edit', compact('categorys', 'title', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //RECUPERA TODOS OS DADOS DO FORMULARIO
        $dataForm = $request->all();
        
        //RECUPERA O PRODUTO QUE EU QUERO EDITAR
        $usuario = $this->usuario->find($id);
        
        //EDITA O PRODUTO JÁ COM A VERIFICAÇÃO DEITA PELO usuarioDATACORMREQUEST
        $update = $usuario->update($dataForm);
        
        if($update)
        {
            return redirect()->route('produtos.index');
        }
        else
        {
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'falha ao editar!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuario->find($id);
        
        $delete = $usuario->delete();
                
        if($delete)
        {
            return redirect()->route('produtos.index');
        }
        else
        {
            return redirect()->route('produtos.show', $id)->with(['errors' => 'falha ao deletar!']);
        }
    }

    public function tests()
    {
        //return 'METODO TESTS';
        //INSERIR
        /*
          $insert = $this->usuario->insert([
          'name' => 'Nome do produto 2',
          'number' => 123456,
          'active' => false,
          'category' => 'eletronicos',
          'description' => 'Descrição vem aqui',
          ]);

          if ($insert)
          {
          return "Produto inseridoc om sucesso";
          }
          else
          {
          return 'erro ao inserir o produto';
          }
         */
        //INSERIR
        //dd($prod);
        //
        //UPDATE
        /*
        $prod = $this->usuario->where('number', 123456)->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        
        $prod = $this->usuario->find(2);

        $update = $prod->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        if ($update) {
            return "Produto alterado com sucesso";
        } else {
            return 'erro ao alterar o produto';
        }
        //UPDATE
         * 
         */
        
        //DELETE
        //$delete = $this->usuario->where('number', 123456)->delete(); //DELETA PRODUTO 2
        
        $delete = $this->usuario->destroy(2); //DELETA PRODUTO 2
        
        if ($delete) {
            return "Produto deletado com sucesso";
        } else {
            return 'erro ao deletar o produto';
        }
        
        //$prod = $this->usuario->destroy([1,2,3]); //DELETA ARRAY DE PRODUTOS
        
    }//TESTS
}
