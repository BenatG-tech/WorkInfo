<?php

namespace App\Controllers;

use App\Models\CalendarioModel;
use App\Models\RegistroDiarioModel; //CREAR

class RegistroDiarioController extends BaseController
{
	/**public function index()
	{
		return view('registro_diario');
	}*/

	public function index()
	{
		$calendario = new CalendarioModel();
		$data['calendario'] = $calendario->where('mes', date('n'))->findAll();
		
		return view('registro_diario', $data);


		/**$usuarios = new UsuarioModel();
		$noticias = new NoticiaModel();
		$data['usuarios'] = $usuarios->findAll();

		if (count($_POST) != 0) {
			$usuario = new UsuarioModel();
			if (sizeof($_POST) == 1) {
				//Comprobar que el/la usuario/a no tiene noticias publicadas
				$keys = array_keys($_POST);
				$id_usuario = substr($keys[0], 3);
				$not = $noticias->where('usuarios_id', $id_usuario)->findAll();
				if ($not['0'] == Null) {
					$usuario->delete($_POST[$keys[0]]);
				}
			} else {
				$datos = [
					'Usuario' => trim($this->request->getPost('usuarioUsuario')),
					'Contrasena' => trim($this->request->getPost('contrasenaUsuario')),
					'Email' =>trim($this->request->getPost('emailUsuario'))
				];
				if ($this->request->getPost('idUsuario') != Null) {
					$usuario->update($this->request->getPost('idUsuario'), $datos);
				} else {
					$usuario->insert($datos);
				}
			}
			return redirect()->to(base_url('/admin/usuarios'));
		}
		return view('admin_usuarios', $data);*/
	}



	
}
