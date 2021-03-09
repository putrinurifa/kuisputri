<?php
    use App\Models\Flight;

    $flight = Flight::where('number', 'FR 900')->first();

    $freshFlight = $flight->fresh();
    //refresing model
    // re-retireve model from

    $flight = Flight::where('number', 'FR 900')->first();

    $flight->number = 'FR 456';

    $flight->refresh();

    $flight->number; // "FR 900"

    //refresh data dari database

?>