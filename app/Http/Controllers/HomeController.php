<?php

namespace App\Http\Controllers;

use App\Statistic;
use App\Blocks;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $money = Statistic::get()->where('stat', '=', 'mined')->first();
        $hashRate = Statistic::get()->where('stat', '=', 'hash_rate')->first();
        $difficulty = Statistic::get()->where('stat', '=', 'difficulty')->first();
        $lastBlock = Blocks::orderBy('id', 'desc')->first();

        if ($money->value > 999 && $money->value <= 999999) {
            $moneyResult = floor($money->value / 1000) . ' tūkst.';
        } elseif ($money->value > 999999) {
            $moneyResult = floor($money->value / 1000000) . ' mln.';
        } else {
            $moneyResult = $money->value;
        }

        $moneyPercent = round(($money->value / 18300000) * 100, 1);

        if ($hashRate->value > 999 && $hashRate->value <= 999999) {
            $hashResult = floor($hashRate->value / 1000) . ' kH/s';
        } elseif ($hashRate->value > 999999) {
            $hashResult = floor($hashRate->value / 1000000) . ' mH/s';
        } else {
            $hashResult = $hashRate->value;
        }

        return view(
            'welcome',
            [
                'money' => $moneyResult,
                'moneyPercent' => $moneyPercent,
                'lastBlockAmount' => $lastBlock->amount / 1000000000000,
                'lastBlockHeight' => $lastBlock->block_height,
                'hashRate' => $hashResult,
                'difficulty' => $difficulty->value,
            ]
        );
    }
}
