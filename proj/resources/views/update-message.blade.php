@extends('layouts.app')

@section('title-block')

Обновление записи

@endsection


@section('content')

<h1>Обновление записи</h1>

<form action="{{ route('contact-update-submit' , $data->id) }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name"> Введите имя</label>
    <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email"> Введите email</label>
    <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter your email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="subject"> Тема сообщения</label>
    <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Enter subject" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message"> Cообщениe</label>
    <textarea name="message" id="message" class="form-control" placeholder="Enter your message">{{ $data->message }}</textarea>
  </div>
<button type="submit" class="btn btn-success">Обновить</button>
</form>
@endsection
