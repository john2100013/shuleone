<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the School ERP System page.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolErp()
    {
        return view('services.school-erp');
    }

    /**
     * Display the Coding Classes page.
     *
     * @return \Illuminate\Http\Response
     */
    public function codingClasses()
    {
        return view('services.coding-classes');
    }

    /**
     * Display the E-Learning page.
     *
     * @return \Illuminate\Http\Response
     */
    public function eLearning()
    {
        return view('services.e-learning');
    }

    /**
     * Display the Robotics page.
     *
     * @return \Illuminate\Http\Response
     */
    public function robotics()
    {
        return view('services.robotics');
    }
}
