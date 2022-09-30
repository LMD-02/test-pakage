<?php
namespace minhduc\test\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        $color =   str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        $color = '#'.$color;
        return view('test::test.index',[
            'color' => $color,
        ]);
    }

}
