<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //ATRIBUTOS
    private $produto;
    private $totalPage = 3;

    //CONSTRUTOR
    public function __construct(produto $produto)
    {
        $this->produto = $produto;
    }

    //METODO INDEX
    public function index()
    {
        $title = 'Home produtos';
		
		$produtos = $this->produto->all();
        
        //$produtos = $this->produto->paginate($this->totalPage);
        
        return view('painel.produtos.index', compact('produtos', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar de produto";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('painel.produtos.create-edit', compact('categorys', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(produtoFormRequest $request)
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
        
        /* MENSAGENS PERSONALIZADAS ANT, MUDOU PARA A CLASSE produtoFORMREQUEST
        $messages = [
            
            'name.required'     => 'O campo nome é obrigatório!',
            'number.numeric'    => 'O campo número só aceita caracteres numéricos!',
            'number.required'   => 'o campo número é de preenchimento obrigatório!',
        ];
        */
        
        //METODO ANTERIOR DE GRAVAR NO BANCO COM RETORNO DE MENSAGEM
        //$this->validate($request, $this->produto->rules); UM JEITO DE FAZER
        /*
        $validate = validator($dataForm, $this->produto->rules, $messages);
        
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        */
        //METODO ANTERIOR DE GRAVAR NO BANCO COM RETORNO DE MENSAGEM
        
        $insert = $this->produto->create($dataForm);
        
        if($insert)
        {
            //return redirect('/painel/produtos') ESTA LINHA JA RESOLVERIA
            return redirect()->route('produtos.index'); //MELHOR JEITO DE FAZER
        }
        else
        {
            //return redirect()->route('produtos.create'); OUTRO JEITO
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
        $produto = $this->produto->find($id);
        
        $title = "Deletar produto: {$produto->name}";
        
        return view('painel.produtos.show', compact('produto', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->produto->find($id);
        
        $title = "Editar produto: {$produto->name}";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('painel.produtos.create-edit', compact('categorys', 'title', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(produtoFormRequest $request, $id)
    {
        //RECUPERA TODOS OS DADOS DO FORMULARIO
        $dataForm = $request->all();
        
        //RECUPERA O PRODUTO QUE EU QUERO EDITAR
        $produto = $this->produto->find($id);
        
        //EDITA O PRODUTO JÁ COM A VERIFICAÇÃO DEITA PELO produtoDATACORMREQUEST
        $update = $produto->update($dataForm);
        
        if($update)
        {
            return redirect()->route('produtos.index');
        }
        else
        {
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'falha ao editar!']);
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
        $produto = $this->produto->find($id);
        
        $delete = $produto->delete();
                
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
          $insert = $this->produto->insert([
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
        $prod = $this->produto->where('number', 123456)->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        
        $prod = $this->produto->find(2);

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
        //$delete = $this->produto->where('number', 123456)->delete(); //DELETA PRODUTO 2
        
        $delete = $this->produto->destroy(2); //DELETA PRODUTO 2
        
        if ($delete) {
            return "Produto deletado com sucesso";
        } else {
            return 'erro ao deletar o produto';
        }
        
        //$prod = $this->produto->destroy([1,2,3]); //DELETA ARRAY DE PRODUTOS
        
    }//TESTS
}
