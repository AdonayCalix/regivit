<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScreenFormController extends Controller
{
    public function savePersonalData(Request $request)
    {
            $user_document = new UserDocument;
            $user_document->document_id = 2;
            $user_document->users_id = auth()->user()->id;
            $user_document->path = $this->saveSignature($request->data_uri);
            $user_document->status = 1;
            if ($user_document->save()) {
                $revision = new Revision;
                $revision->form = 2;
                $revision->status = 1;
                $revision->users_id = auth()->user()->id;
                return response()->json(['status' => $revision->save()]);
            }

    }

    public function saveSignature($data_uri)
    {

        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);
        $file_name = mt_rand() . time() . auth()->user()->id . '.png';
        file_put_contents(public_path() . '/uploades/' . $file_name, $decoded_image);

        return $file_name;
    }
}
