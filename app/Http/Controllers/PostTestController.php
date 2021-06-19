<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTestRequest;

class PostTestController extends Controller
{
    /**
     * 入力フォームの表示
     *
     * @return view
     */
    public function input()
    {
        return view('validationTests.input');
    }

    /**
     * postされたデータの取得
     *
     * @return redirect
     */
    public function post(PostTestRequest $postTestRequest)
    {
        return redirect(route('display'));
    }

    /**
     * postされたデータの表示
     *
     * @return view
     */
    public function display()
    {
        return view('validationTests.display');
    }
}
