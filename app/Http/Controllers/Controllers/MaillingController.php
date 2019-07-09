<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //ATRIBUTOS
	private $mailling;
    private $totalPage = 3;

    //CONSTRUTOR
    public function __construct(mailling $mailling)
    {
        $this->mailling = $mailling;
    }

    //METODO INDEX
    public function index()
    {
        $title = 'Home maillings';
		
		$maillings = $this->mailling->all();
        
        //$maillings = $this->mailling->paginate($this->totalPage);
        
        return view('painel.maillings.index', compact('maillings', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar de mailling";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('painel.maillings.create-edit', compact('categorys', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(maillingFormRequest $request)
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
        
        /* MENSAGENS PERSONALIZADAS ANT, MUDOU PARA A CLASSE maillingFORMREQUEST
        $messages = [
            
            'name.required'     => 'O campo nome é obrigatório!',
            'number.numeric'    => 'O campo número só aceita caracteres numéricos!',
            'number.required'   => 'o campo número é de preenchimento obrigatório!',
        ];
        */
        
        //METODO ANTERIOR DE GRAVAR NO BANCO COM RETORNO DE MENSAGEM
        //$this->validate($request, $this->mailling->rules); UM JEITO DE FAZER
        /*
        $validate = validator($dataForm, $this->mailling->rules, $messages);
        
        
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        */
        //METODO ANTERIOR DE GRAVAR NO BANCO COM RETORNO DE MENSAGEM
        
        $insert = $this->mailling->create($dataForm);
        
        if($insert)
        {
            //return redirect('/painel/maillings') ESTA LINHA JA RESOLVERIA
            return redirect()->route('maillings.index'); //MELHOR JEITO DE FAZER
        }
        else
        {
            //return redirect()->route('maillings.create'); OUTRO JEITO
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
        $mailling = $this->mailling->find($id);
        
        $title = "Deletar mailling: {$mailling->name}";
        
        return view('painel.maillings.show', compact('mailling', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mailling = $this->mailling->find($id);
        
        $title = "Editar mailling: {$mailling->name}";
        
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        
        return view('painel.maillings.create-edit', compact('categorys', 'title', 'mailling'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(maillingFormRequest $request, $id)
    {
        //RECUPERA TODOS OS DADOS DO FORMULARIO
        $dataForm = $request->all();
        
        //RECUPERA O mailling QUE EU QUERO EDITAR
        $mailling = $this->mailling->find($id);
        
        //EDITA O mailling JÁ COM A VERIFICAÇÃO DEITA PELO maillingDATACORMREQUEST
        $update = $mailling->update($dataForm);
        
        if($update)
        {
            return redirect()->route('maillings.index');
        }
        else
        {
            return redirect()->route('maillings.edit', $id)->with(['errors' => 'falha ao editar!']);
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
        $mailling = $this->mailling->find($id);
        
        $delete = $mailling->delete();
                
        if($delete)
        {
            return redirect()->route('maillings.index');
        }
        else
        {
            return redirect()->route('maillings.show', $id)->with(['errors' => 'falha ao deletar!']);
        }
    }

    public function tests()
    {
        //return 'METODO TESTS';
        //INSERIR
        /*
          $insert = $this->mailling->insert([
          'name' => 'Nome do mailling 2',
          'number' => 123456,
          'active' => false,
          'category' => 'eletronicos',
          'description' => 'Descrição vem aqui',
          ]);

          if ($insert)
          {
          return "mailling inseridoc om sucesso";
          }
          else
          {
          return 'erro ao inserir o mailling';
          }
         */
        //INSERIR
        //dd($prod);
        //
        //UPDATE
        /*
        $prod = $this->mailling->where('number', 123456)->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        
        $prod = $this->mailling->find(2);

        $update = $prod->update([
            'name' => 'Update Teste',
            'number' => 123111231,
            'active' => true,
        ]);
        if ($update) {
            return "mailling alterado com sucesso";
        } else {
            return 'erro ao alterar o mailling';
        }
        //UPDATE
         * 
         */
        
        //DELETE
        //$delete = $this->mailling->where('number', 123456)->delete(); //DELETA mailling 2
        
        $delete = $this->mailling->destroy(2); //DELETA mailling 2
        
        if ($delete) {
            return "mailling deletado com sucesso";
        } else {
            return 'erro ao deletar o mailling';
        }
        
        //$prod = $this->mailling->destroy([1,2,3]); //DELETA ARRAY DE maillingS
	}
}
