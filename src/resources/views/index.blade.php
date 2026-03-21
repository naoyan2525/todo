@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="todo__alert">
    @if(session('message'))
    <div class="todo__alert--success">{{ session('message')}}
    </div>
    @endif

    @if ($errors->any())
    <div class="todo__alert--danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
</ul>
</div>
@endif 
</div>

<div class="todo__content">
    <form class="todo__form" action="/todos" method="post">
        @csrf
        <div class="todo__form__item">
            <input class="todo__form__input" type="text" name="content">
            </div>
        <div class="todo__form__button">
            <button class="todo__form__submit" type="submit">作成</button>
        </div>
    </form>

<div class="todo__table">
    <table class="todo__table__list">
        <tr class="todo__table__content">
            <th class="todo__table__header">Todo</th>
        </tr>

@foreach ($todos as $todo)
        <tr class="todo__table__content">
            <td class="todo__table__item">
                <form class="update__form" action="/todos/update" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="update__form__item">
                        <input class="update__form__input" type="text" name="content" value="{{ $todo['content'] }}">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                    </div>
                    <div class="update__form__button">
                        <button class="update__form__submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
           

            <td class="todo__table__item">
                <form class="delete__form" action="/todos/delete" method="POST">
                @method('DELETE')
                @csrf
                    <div class="delete__form__button">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        <button class="delete__form__submit" type="submit">削除</button>
                    </div>
                </form>
           </td>
            @endforeach
        </tr>
    </table>
</div>
</div>
@endsection