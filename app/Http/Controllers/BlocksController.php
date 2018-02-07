<?php

namespace App\Http\Controllers;
use App\Blocks;
use App\Statistic;

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

            if (true == false && isset($json['data']['block_height']) && $json['data']['block_height']) {
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
                }
            } else {
                $sum = round((Blocks::sum('amount') / 1000000000000), 2);

                self::addToTable($sum, 'mined');

                $url = "https://explorer.bitlitas.lt/api/networkinfo";
                $json = json_decode(self::loadFile($url), true);
                $hash_rate = $json['data']['hash_rate'];
                $difficulty = $json['data']['difficulty'];

                self::addToTable($hash_rate, 'hash_rate');
                self::addToTable($difficulty, 'difficulty');

                dd($sum);
            }
        }

        return redirect()->route('blocks');
    }

    private function addToTable($value, $stat) {
        if(Statistic::where('stat', '=', $stat)->count() < 1) {
            Statistic::create(
                [
                    'stat' => $stat,
                    'value' => $value,
                ]
            );
        } else {
            Statistic::where('stat', $stat)
                ->update(['value' => $value]);
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
