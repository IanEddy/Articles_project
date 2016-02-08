<?php namespace App\Http\Controllers;

use App\Tasks;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller {

	public function index(){

		$task = Tasks::all();
		return view('pages.index')->with('tasks',$task);
	}

}
