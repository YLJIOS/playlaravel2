<?php
/**
 * Created by PhpStorm.
 * User: yaolianjie
 * Date: 2017-11-29
 * Time: 13:21
 */

namespace App\Http\Controllers;


class UserCenterController extends Controller
{
    /**
     * PersonalCenterController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * show user center homepage
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('user_center');
    }
}