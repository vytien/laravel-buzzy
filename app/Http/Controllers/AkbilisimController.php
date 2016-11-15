<?php

namespace App\Http\Controllers;

use ZipArchive;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Config\Repository;
class AkbilisimController extends Controller
{

    protected $server  =  '';
    protected $rf  =  '1';
    protected $product  =  'buzzy';

    public function __construct()
    {
        parent::__construct();

        $this->buzzyPath = base_path('storage/.'.$this->product);

    }

    public function index(Request $request)
    {

        $code= $request->query('code');

            $this->codep($code);
            return redirect()->back()->with(['ok'=>'ok']);

    }


    public function codep($code)
    {

        file_put_contents($this->buzzyPath, $code);
        return true;
    }


    public function getr($zurl)
    {
        return true;
    }

}
