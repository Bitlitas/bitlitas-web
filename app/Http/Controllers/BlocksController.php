<?php

namespace App\Http\Controllers;
use App\Blocks;

class BlocksController extends Controller
{
    public function index()
    {
        $id = $x = 1;

        while($x < 100) {
            $x++;

            $lastBlock = Blocks::orderBy('id', 'desc')->first();

            if ($lastBlock) {
                $id = $lastBlock->block_height + 1;
            }

            $url = "https://explorer.bitlitas.lt/api/blokas/" . $id;

            $json = json_decode(self::loadFile($url), true);

            if (isset($json['data']) && $json['data']) {
                $data = $json['data'];

                if(Blocks::where('block_height', '=', $data['block_height'])->count() < 1) {

                    $amount = $data['txs'][0]['lit_outputs'];

                    Blocks::create(
                        [
                            'block_height' => (int)$data['block_height'],
                            'amount' => $amount,
                            'timestamp' => (int)$data['timestamp']
                        ]
                    );
                } else {
                    dd('Kartojasi');
                }
            } else {
                $sum = round((Blocks::sum('amount') / 1000000000000), 2);
                dd($sum);
            }
        }

        return redirect()->route('blocks');
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
