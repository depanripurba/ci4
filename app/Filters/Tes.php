<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Tes implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->loginstatus)
	    {
	    	echo "invalid";
	        return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
	    }
        // Do something here
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}