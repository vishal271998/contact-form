<?php

namespace Vishal\Contactform\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactForms = ContactForm::get();
        return view('vishal.contactform.view.index', compact('contactForms'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vishal.contactform.view.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        ContactForm::create($input);
        return redirect()->route('contact.form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactForm  $cOntactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $cOntactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $cOntactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $cOntactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $cOntactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $cOntactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $cOntactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $cOntactForm)
    {
        //
    }
}
