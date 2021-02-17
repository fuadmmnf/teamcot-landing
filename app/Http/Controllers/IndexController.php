<?php

namespace App\Http\Controllers;

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
}
