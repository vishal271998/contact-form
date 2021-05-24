@extends('vishal.contactform.views.app')
@section('content')
    <hr>
    <h4>Contact Forms : </h4>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Message</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contactForms as $contactForm)
            <tr>
                <td>{{ $contactForm->name }}</td>
                <td>{{ $contactForm->phone }}</td>
                <td>{{ $contactForm->message }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
