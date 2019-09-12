<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{

	//Constructで処理するパターン
        public function __construct()
        {
            $this->middleware('user');
        }

    /*
     * サンプル
     * @param boolean  hogehoge
     * @return hogehoge
    */
    public function index(Request $req)
    {

    //AppID
    $appid = 'dj00aiZpPVRQWjJ3NUpKUjYzSyZzPWNvbnN1bWVyc2VjcmV0Jng9NzA-';

    function escapestring($str) {
    	return htmlspecialchars($str, ENT_QUOTES);
    }
    if (isset($_POST['sentence'])) {
    	$sentence = mb_convert_encoding($_POST['sentence'], 'utf-8', 'auto');
    }
    else {
    	$sentence = "";
    }
    if (isset($_POST['ma_response'])) {
    	$ma_response = join(",", array_values($_POST['ma_response']));
    	$arr_response = $_POST['ma_response'];
    }
    else {
    	$ma_response = "";
    	$arr_response = array();
    }
    if (isset($_POST['ma_filter'])) {
    	$ma_filter = join("|", array_values($_POST['ma_filter']));
    	$arr_filter = $_POST['ma_filter'];
    }
    else {
    	$ma_filter = "";
    	$arr_filter = array();
    }

    //API
    $url = "http://jlp.yahooapis.jp/MAService/V1/parse?appid=".$appid."&results=ma";
    $url .= "&sentence=".urlencode($sentence);
    $xml  = simplexml_load_file($url);
    foreach ($xml->ma_result->word_list->word as $cur){echo escapestring($cur->surface)." | "; }


    //API2
    $url = "http://jlp.yahooapis.jp/MAService/V1/parse?appid=".$appid."&results=ma";
    if ($ma_response != "") { $url .= "&ma_response=".$ma_response;          }
    if ($ma_filter   != "") { $url .= "&ma_filter="  .urlencode($ma_filter); }
    $url .= "&sentence=".urlencode($sentence);
    $xml  = simplexml_load_file($url);
    foreach ($xml->ma_result->word_list->word as $cur){
        echo "<tr>\n";
        if (isset($arr_response[0]) && $arr_response[0] != "") { echo "<td>".escapestring($cur->surface )."</td>"; }
        if (isset($arr_response[1]) && $arr_response[1] != "") { echo "<td>".escapestring($cur->reading )."</td>"; }
        if (isset($arr_response[2]) && $arr_response[2] != "") { echo "<td>".escapestring($cur->pos     )."</td>"; }
        if (isset($arr_response[3]) && $arr_response[3] != "") { echo "<td>".escapestring($cur->baseform)."</td>"; }
        if (isset($arr_response[4]) && $arr_response[4] != "") { echo "<td>".escapestring($cur->feature )."</td>"; }
        echo "</tr>\n";
    }


	return view('front.site.dashboard.index');
	//return view('front.site.user.index');

    }
    //

}
