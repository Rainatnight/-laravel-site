@extends('layouts.app')

@section('title-block')

Контакты

@endsection


@section('content')

<h1>Страница контактов</h1>
@if($errors->any())
<div class="alert alert-danger">
<ul>
  @foreach ($errors->all() as $error)

    {{ $error }}<br/>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('contact-form')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name"> Введите имя</label>
    <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email"> Введите email</label>
    <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="subject"> Тема сообщения</label>
    <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message"> Cообщениe</label>
    <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
  </div>
<button type="submit" class="btn btn-success">Send</button>
</form>
@endsection
