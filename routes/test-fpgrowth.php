<?php

use App\Models\Dataset;
use App\Models\Transaction;
use EnzoMC\PhpFPGrowth\FPGrowth;
use Illuminate\Support\Facades\Route;

function frequency($transactions)
{
    $frequency = [];

    foreach ($transactions as $transaction) {
        foreach ($transaction as $item) {
            if (!isset($frequency[$item])) {
                $frequency[$item] = 1;
            } else {
                $frequency[$item]++;
            }
        }
    }

    return $frequency;
}


});
