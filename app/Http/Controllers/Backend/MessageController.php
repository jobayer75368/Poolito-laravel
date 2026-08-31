<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('backend.message.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['string', 'max:255'],
            'message' => ['required', 'string'],
        ]);
        Message::create($validateData);
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

    public function show($id)
    {

        $message = Message::findOrFail($id);
        return view('backend.message.show', compact('message'));
    }

    public function destroy($id)
    {

        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.message.index')->with('success', 'Message deleted successfully!');
    }
}
