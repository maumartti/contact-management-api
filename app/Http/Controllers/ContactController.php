<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use JWTAuth;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate(); // get el user auth

            $contact = new Contact();

            $contact->user_id = $user->id;
            $contact->name = $request->input('name');
            $contact->address = $request->input('address');
            $contact->tel = $request->input('tel');
            $contact->email = $request->input('email');
            $contact->image = $request->input('image');

            $contact->save();

            return response()->json(['message' => 'Contact created successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error', 'details' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $contact = Contact::find($id);
            if (!$contact) {
                return response()->json(['error' => 'Contact not found'], 404);
            }
            $contact->name = $request->input('name');
            $contact->address = $request->input('address');
            $contact->tel = $request->input('tel');
            $contact->email = $request->input('email');
            $contact->image = $request->input('image');
    
            $contact->save();
    
            return response()->json(['message' => 'Contact updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error', 'details' => $e->getMessage()], 500);
        }
    }
    


}
