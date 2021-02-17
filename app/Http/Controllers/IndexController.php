<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;

class IndexController extends Controller
{
    private $db;

    /**
     * IndexController constructor.
     * @param $db
     */
    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(base_path() . '/teamcotFirebase.json');
        $this->db = $factory->createFirestore()->database();
    }


    public function show()
    {
        return view('welcome', [
            'newslist' => $this->db->collection('news')->documents()->rows(),
            'teammembers' => $this->db->collection('teammembers')->documents()->rows(),
            'reports' => $this->db->collection('reports')->documents()->rows(),
            'rules' => $this->db->collection('rules')->documents()->rows(),
            'contacts' => $this->db->collection('contacts')->documents()->rows(),
        ]);
    }

    public function saveMessage(){
        $this->db->collection('messages')->add([
            'name' => request('name'),
            'email'=> request('email'),
            'message'=> request('message'),
            'created_at' => Carbon::now()->setTimezone('Asia/Dhaka')
        ]);

        session()->flash('message', "Your response was saved");

        return redirect()->back();
    }
}
