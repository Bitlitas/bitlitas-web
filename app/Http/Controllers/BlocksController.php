<?php

namespace App\Http\Controllers;
use App\Blocks;

class BlocksController extends Controller
{
    public function index()
    {
        $lastBlock = Blocks::latest()->first();

        $id = 1;

        if($lastBlock) {
            $id = $lastBlock->block_height + 1;
        }

        $url = "https://explorer.bitlitas.lt/api/blokas/" . $id;

        $json = json_decode(self::loadFile($url), true);

        if(isset($json['data']) && $json['data']) {
            $data = $json['data'];
            $amount = $data['txs'][0]['lit_outputs'];

            Blocks::create(
                [
                    'block_height' => (int)$data['block_height'],
                    'amount' => $amount,
                    'timestamp' => (int)$data['timestamp']
                ]
            );

            return redirect()->route('blocks');
        } else {
            dd('Done');
        }
    }


    private function loadFile($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}
