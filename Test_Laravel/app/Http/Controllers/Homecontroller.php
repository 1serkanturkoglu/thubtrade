<?php

namespace App\Http\Controllers;

use App\haberler;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Input;

class Homecontroller extends Controller
{

    public function get_deneme()
  {
      $adim=Input::get( 'degisken_isim');
      $soyisim= Input::get('degisken_soyisim');

return view('deneme')->with('degisken_isim', $adim)->with('degisken_soyisim', $soyisim);

  }  //



    public function get_form()
    {$toplamda=0;
        return view('form');

    }  //

    public function post_form(Request $request) {

        $isim=$request->isim;
            $email=$request->email;
            $toplam=$isim+$email;
        return view('form')->with('toplamda', $toplam);


    }

    /**
     * @param $isim
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_deneme_isim($isim)
    {

        return view('deneme')->with('degisken_isim', $isim);
    }  //

    public function get_kategori($forum,$php,$framework)
    {

        return view('kategori')->with('forum', $forum)->with('php', $php)->with('framework', $framework);
    }  //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_haberler()

    {
        $haberler=haberler::all();
        return view('haberler')->with('haberler', $haberler);
    }

    public function post_haberler(Request $request){

haberler::create($request->all());
return 'işlem başarılı';
    }
}