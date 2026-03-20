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
                <form class="update__form">
                    <div class="update__form__item">
                        <input class="update__form__input">{{ $todo['content'] }}</input>
                    </div>
                    <div class="update__form__button">
                        <button class="update__form__submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            @endforeach

            <td class="todo__table__item">
                <form class="delete__form">
                    <div class="delete__form__button">
                        <button class="delete__form__submit" type="submit">削除</button>
                    </div>
                </form>
           </td>
        </tr>
    </table>
</div>
</div>
@endsection