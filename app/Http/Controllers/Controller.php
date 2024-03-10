<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()]);
        }

        \Illuminate\Support\Facades\Mail::to($request->email)->send(new \App\Mail\Email());
        return response()->json(["message" => "Email sent"]);
    }
}

