<?php

namespace App\Http\Controllers;

use App\Mail\AlertArrosage;
use App\Mail\AlertEclairage;
use App\Mail\AlertSecurite;
use App\Model\Acidity;
use App\Model\Humidity;
use App\Model\Security;
use App\Model\Temperature;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{


    public function tempMax(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->temp_max =(double) $request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }
    public function humMax(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->hum_max =(double) $request->get('q');
            $property->save();
        }
        return ['s' => 1];

    }
    public function aciMax(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->aci_max = (double) $request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }
    public function lightMax(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->light_max = (double) $request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }
    public function distMax(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->dist_max = (double)$request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }

    public function arrosageAuto(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->arrosage_auto = (int)$request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }

    public function flagArrosage(Request $request) {
        if (isset($request->q)) {


            $property = User::all()->first()->property;
            try {
                if ($property->flag_arrosage !=1 && ((int)$request->get('q')==1) )
                    Mail::send(new AlertArrosage($property->user_id));
            }
            catch (\Exception $e) {
            }

            $property->flag_arrosage = ((int)$request->get('q'));
            $property->save();
        }
        return ['s' => 1];
    }

    public function eclairageAuto(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->eclairage_auto = (int) $request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }

    public function flagEclairage(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;

            try {
                if ($property->flag_eclairage !=1 && ((int)$request->get('q')==1) )
                    Mail::send(new AlertEclairage($property->user_id));
            }
            catch (\Exception $e) {
            }
            $property->flag_eclairage = ((int)$request->get('q'));
            $property->save();
        }
        return ['s' => 1];
    }

    public function securityAuto(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;
            $property->security_auto = (int) $request->get('q');
            $property->save();
        }
        return ['s' => 1];
    }

    public function flagSecurity(Request $request) {
        if (isset($request->q)) {
            $property = User::all()->first()->property;

            if ((int)$request->get('q')==1 && $property->security_flag==0) {
                Security::create([
                    'user_id'=> $property->user_id
                ]);

                try {
                    Mail::send(new AlertSecurite($property->user_id));
                }
                catch (\Exception $e) {
                }
            }

            $property->security_flag = (int)$request->get('q');
            $property->save();

        }
        return ['s' => 1];
    }

    public function temp(Request $request) {
        if (isset($request->q)) {
            $user = User::all()->first();
            Temperature::create([
                'value' => (double) $request->get('q'),
                'user_id' => $user->id
            ]);
        }
        return ['s' => 1];
    }

    public function hum(Request $request) {
        if (isset($request->q)) {
            $user = User::all()->first();
            Humidity::create([
                'value' => (double) $request->get('q'),
                'user_id' => $user->id
            ]);
        }
        return ['s' => 1];
    }

    public function aci(Request $request) {
        if (isset($request->q)) {
            $user = User::all()->first();
            Acidity::create([
                'value' => (double) $request->get('q'),
                'user_id' => $user->id
            ]);
        }
        return ['s' => 1];
    }
}
