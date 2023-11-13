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
        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|max:12',
            'email' => 'required|email|max:36',
            'image' => 'nullable|string|url|max:400',
        ]);
    
        try {
            $user = JWTAuth::parseToken()->authenticate();
    
            $contact = new Contact();
    
            $contact->user_id = $user->id;
            $contact->fill($validatedData);
    
            $contact->save();

            $user = JWTAuth::user(); // User auth
            $contacts = Contact::where('user_id', $user->id)->get();
    
            return response()->json(['status' => 'success', 'message' => 'Contact created successfully', 'contacts' => $contacts], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error', 'details' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|max:12',
            'email' => 'required|email|max:36',
            'image' => 'nullable|string|url|max:400',
        ]);

        try {
            $contact = Contact::find($id);
            if (!$contact) {
                return response()->json(['error' => 'Contact not found'], 404);
            }
    
            $contact->fill($validatedData);
            $contact->save();
    
            $user = JWTAuth::user(); // User auth
            $contacts = Contact::where('user_id', $user->id)->get();
    
            return response()->json(['status' => 'success', 'message' => 'Contact updated successfully', 'contacts' => $contacts], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error', 'details' => $e->getMessage()], 500);
        }
    }
    
    


}
