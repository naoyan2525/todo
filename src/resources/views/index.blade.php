@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="todo__alert">
    <div class="todo__alert--success">Todoを作成しました
    </div>
</div>

<div class="todo__content">
    <form class="todo__form">
        <div class="todo__form__item">
            <input class="todo__form__input" type="text" name="title">
            </div>
        <div class="todo__form__button">
            <button class="todo__form__submit" type="submit">作成</button>
        </div>
    </form>
</div>

<div class="todo__table">
    <table class="todo__table__list">
        <tr class="todo__table__content">
            <th class="todo__table__header">Todo</th>
        </tr>


        <tr class="todo__table__content">
            <td class="todo__table__item">
                <form class="update__form">
                    <div class="update__form__item">
                        <input class="update__form__input" type="text" name="title" value="test"></div>
                    <div class="update__form__button">
                        <button class="update__form__submit" type="submit">更新</button>
                    </div>
                </form>
            </td>

            <td class="todo__table__item">
                <form class="delete__form">
                    <div class="delete__form__button">
                        <button class="delete__form__submit" type="submit">削除</button>
                    </div>
                </form>
           </td>
        </tr>


        <tr class="todo__table__content">
            <td class="todo__table__item">
                <form class="update__form">
                    <div class="update__form__item">
                        <input class="update__form__input" type="text" name="title" value="test"></div>
                    <div class="update__form__button">
                        <button class="update__form__submit" type="submit">更新</button>
                    </div>
                </form>
            </td>

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
@endsection