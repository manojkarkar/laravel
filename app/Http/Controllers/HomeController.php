<?php 
namespace App\Http\Controllers;
use illuminate\Http\Request;

/**
 * 
 */
class HomeController extends Controller
{

	public function index(){
    echo "This Is Our First Controller";

	}

	public function call(){
		$users=["Sanjay","Amit","Aman","Gopal"];
		$name="Mohinudddin Is Very Good developer";
    //return view("call",array("users"=>$users,"name"=>$name));
		// return view("call",compact("users","name"));

		// return view("call")->with(["users"=>$users, "name"=>$name]);

		return view('call')->withName($name)->withusers($users);
	}
	
}

?>	