<?php

namespace Simexis\Installer\Controllers\Install;

use ZipArchive;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Simexis\Installer\Helpers\RequirementsChecker;

class HomeController extends Controller {


    public function index(RequirementsChecker $checker) {

        $requirements = $checker->check(
            config('installer.requirements')
        );
        return view('installer::install.requirements', compact('requirements'));

    }

	public function checkcode() {

          return view('installer::install.home');

	}

    public function checkedcode(Request $request)
    {
        $code= $request->all();
        $code= 'Nulled';

            $this->codep($code);
            return redirect()->back()->with(['ok'=>'ok']);

    }

    public function codep($code)
    {
        file_put_contents(base_path('storage/.buzzy'), $code);
        return true;
    }

    public function getr($zurl)
    {
        return true;
    }


}