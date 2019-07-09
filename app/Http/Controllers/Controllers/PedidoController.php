<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //ATRIBUTOS
	private $pedido;
    private $totalPage = 3;

    //CONSTRUTOR
    public function __construct(pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    //METODO INDEX
    public function index()
    {
        $title = 'Home pedidos';
		
		$pedidos = $this->pedido->all();
        
        //$pedidos = $this->pedido->paginate($this->totalPage);
        
        return view('painel.pedidos.index', compact('pedidos', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar de pedido";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('painel.pedidos.create-edit', compact('categorys', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pedidoFormRequest $request)
    {
        /*
        dd($request->all());//PEGA TODOS OS CAMPOS
        
        dd($request->only(['name', 'number']));//PEGA ESTES CAMPOS DENTRO DO ARRAY
        
        dd($request->except(['token', 'category']));//PEGA TODOS OS CAMPOS EXCETO CAMPOS DENTRO DO ARRAY
        
        dd($request->input('name'));//PEGA CAMPO NOME
        */
        /* CASO ALGUM CAMPO ESTEJA VAZIO COMO O ACTIVE
        if(!isset($dataForm['active']))
        {
            $dataForm['active'] = 0;
        }
        else
        {
            $dataForm['active'] = 1;
        }
         */
        
        $dataForm = $request->except('_token');
        
        /* MENSAGENS PERSONALIZADAS ANT, MUDOU PARA A CLASSE pedidoFORMREQUEST
        $messages = [
            
            'name.required'     => 'O campo nome é obrigatório!',
            'number.numeric'    => 'O campo número só aceita caracteres numéricos!',
            'number.required'   => 'o campo número é de preenchimento obrigatório!',
        ];
        */
        
        //METODO ANTERIOR DE GRAVAR NO BANCO COM RETORNO DE MENSAGEM
        //$this->validate($request, $this->pedido->rules); UM JEITO DE FAZER
        /*
        $validate = validator($dataForm, $this->pedido->rules, $messages);
        
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        */
        //METODO ANTERIOR DE GRAVAR NO BANCO COM RETORNO DE MENSAGEM
        
        $insert = $this->pedido->create($dataForm);
        
        if($insert)
        {
            //return redirect('/painel/pedidos') ESTA LINHA JA RESOLVERIA
            return redirect()->route('pedidos.index'); //MELHOR JEITO DE FAZER
        }
        else
        {
            //return redirect()->route('pedidos.create'); OUTRO JEITO
            return redirect()->back(); //RETORNA PARA ONDE VEIO
        }
        
        
    }//STORE

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = $this->pedido->find($id);
        
        $title = "Deletar pedido: {$pedido->name}";
        
        return view('painel.pedidos.show', compact('pedido', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = $this->pedido->find($id);
        
        $title = "Editar pedido: {$pedido->name}";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('painel.pedidos.create-edit', compact('categorys', 'title', 'pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(pedidoFormRequest $request, $id)
    {
        //RECUPERA TODOS OS DADOS DO FORMULARIO
        $dataForm = $request->all();
        
        //RECUPERA O pedido QUE EU QUERO EDITAR
        $pedido = $this->pedido->find($id);
        
        //EDITA O pedido JÁ COM A VERIFICAÇÃO DEITA PELO pedidoDATACORMREQUEST
        $update = $pedido->update($dataForm);
        
        if($update)
        {
            return redirect()->route('pedidos.index');
        }
        else
        {
            return redirect()->route('pedidos.edit', $id)->with(['errors' => 'falha ao editar!']);
        }
    }//UPDATE

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = $this->pedido->find($id);
        
        $delete = $pedido->delete();
                
        if($delete)
        {
            return redirect()->route('pedidos.index');
        }
        else
        {
            return redirect()->route('pedidos.show', $id)->with(['errors' => 'falha ao deletar!']);
        }
    }

    public function tests()
    {
        //return 'METODO TESTS';
        //INSERIR
        /*
          $insert = $this->pedido->insert([
          'name' => 'Nome do pedido 2',
          'number' => 123456,
          'active' => false,
          'category' => 'eletronicos',
          'description' => 'Descrição vem aqui',
          ]);

          if ($insert)
          {
          return "pedido inseridoc om sucesso";
          }
          else
          {
          return 'erro ao inserir o pedido';
          }
         */
        //INSERIR
        //dd($prod);
        //
        //UPDATE
        /*
        $prod = $this->pedido->where('number', 123456)->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        
        $prod = $this->pedido->find(2);

        $update = $prod->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        if ($update) {
            return "pedido alterado com sucesso";
        } else {
            return 'erro ao alterar o pedido';
        }
        //UPDATE
         * 
         */
        
        //DELETE
        //$delete = $this->pedido->where('number', 123456)->delete(); //DELETA pedido 2
        
        $delete = $this->pedido->destroy(2); //DELETA pedido 2
        
        if ($delete) {
            return "pedido deletado com sucesso";
        } else {
            return 'erro ao deletar o pedido';
        }
        
        //$prod = $this->pedido->destroy([1,2,3]); //DELETA ARRAY DE pedidoS
	}
}
