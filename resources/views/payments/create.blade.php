@extends('layouts.app')

@section('content')
    <div class="container">
        <form 
            action="/payments"
            method="POST"
        >
            @csrf

            <button 
                type="submit"
                class="btn btn-primary"
            >
                Make Payment
            </button>
        </form>
    </div>
@endsection