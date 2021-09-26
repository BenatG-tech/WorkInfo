<?php

namespace App\Controllers;

use App\Models\CalendarioModel;
use App\Models\CalendarioNoLaboralModel;

class CalendarioController extends BaseController
{
	/**public function index()
	{
		return view('calendario');
		//return redirect()->to(base_url('/calendario'));
	}*/

	public function index()
	{
		$calendario = new CalendarioModel();
		$calendarioNoLaboral = new CalendarioNoLaboralModel();
		$data['calendario'] = $calendario->where('anno', date('Y'))->findAll();
		$data['calendarioNoLaboral'] = $calendarioNoLaboral->where('anno', date('Y'))->findAll();
		
		return view('calendario', $data);
	}

}
