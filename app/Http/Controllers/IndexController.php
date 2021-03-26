<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Embed\Embed;
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

    public function showGallery($slug){
        return view('gallery', [
            'gallery' => $this->db->collection('galleries')->document($slug)->snapshot(),
        ]);
    }

    public function show()
    {
        return view('welcome', [
            'newslist' => $this->db->collection('news')->documents()->rows(),
            'linkslist' => $this->db->collection('links')->documents()->rows(),
            'teammembers' => $this->db->collection('teammembers')->orderBy('created_at')->documents()->rows(),
            'reports' => $this->db->collection('reports')->documents()->rows(),
            'rules' => $this->db->collection('rules')->documents()->rows(),
            'contacts' => $this->db->collection('contacts')->documents()->rows(),
            'galleries' => $this->db->collection('galleries')->documents()->rows(),
        ]);
    }

    public function showMemberDetail($doc_id){
        return view('detail', [
            'teammember' => $this->db->collection('teammembers')->document($doc_id)->snapshot(),
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
