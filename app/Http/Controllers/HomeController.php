<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function dosenHome(): View
    {
        return view('dosenHome');
    }

    public function mahasiswaHome(): View
    {
        return view('mahasiswaHome');
    }

    public function tendikHome(): View
    {
        return view('tendikHome');
    }

    public function adminAkademikHome(): View
    {
        return view('adminAkademikHome');
    }

    public function adminKeuanganHome(): View
    {
        return view('adminKeuanganHome');
    }

    public function direkturHome(): View
    {
        return view('direkturHome');
    }

    public function wakilDirektur1Home(): View
    {
        return view('wakilDirektur1Home');
    }

    public function wakilDirektur2Home(): View
    {
        return view('wakilDirektur2Home');
    }

    public function wakilDirektur3Home(): View
    {
        return view('wakilDirektur3Home');
    }

    public function adminLPPMHome(): View
    {
        return view('adminlppmHome');
    }

    public function superadminHome(): View
    {
        return view('superadminHome');
    }

    public function adminSDMHome(): View
    {
        return view('adminSDMHome');
    }

    public function adminHome(): View
    {
        return view('adminHome');
    }

    public function index(): View
    {
    return view('home');
    }

    public function managerHome(): View
    {
    return view('managerHome');
    }
}
