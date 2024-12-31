<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use App\Jobs\dataPersonJob;

class DataPersonController extends Controller
{
    function index()
    {
        $starttime = microtime(true);

        // $job = new dataPersonJob();
        // dispatch(new dataPersonJob($this));
        dispatch(new dataPersonJob());

        // $this->dispatch($job);

        $endtime = microtime(true);
        $timediff = $endtime - $starttime;
        $hasil = "Halaman diproses dalam " . sprintf('%0.2f', $timediff) . " detik";
        return view('data_person', compact('hasil'));
    }
}