<?php

	class PostsController extends AppController {
		public $helpers = array ("Html","Form");
		public $components = array("Session");
		//action
		// /posts/index
		public function index() {
			$todosAsPostagens = $this->Post->find('all');

			//jogar para a view
			$this->set('posts', $todosAsPostagens);
		}

		// /post/view/3
		public function view($id = null) {
			//setar p Post com id 3
			$this->Post->id = $id;

			//procurar no banco o item com id 3
			$p = $this->Post->read();

			//enviando para a VIEW os campos do item
			$this->set('post', $p);
		}

		// post/add
		public function add() {
			//Se for enviado um POST pegar os dados do FORM e savar no banco
			if ($this->request->is('post')) {
				//
				$dadosDoFormulario = $this->request->data;

				//tentar salvar os dados no banco
				//se conseguir salvar , mostrar uma mensagem e redicionar para o INDEX
				if ($this->Post->save($dadosDoFormulario)) {
					//mostrar mensagem
					$this->Session->setFlash("A postagem foi inserida com sucesso!");
					//redicionar para o INDEX
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		public function edit($id = null) {
    		$this->Post->id = $id;

    		if ($this->request->is('get')) {
        		$this->request->data = $this->Post->read();
    		} else {
        		if ($this->Post->save($this->request->data)) {
            		$this->Session->setFlash('Your post has been updated.');
	            	$this->redirect(array('action' => 'index'));
    	    	}
    		}
		}

		public function delete($id) {
    		if (!$this->request->is('post')) {
    	    	throw new MethodNotAllowedException();
		    }
    		if ($this->Post->delete($id)) {
    		    $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
 	       		$this->redirect(array('action' => 'index'));
		    }
		}
	}