@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <p class="header-fixed">FashionablyLate</p>
    <h1 class="title">Confirm</h1>

    <div class="contact-form">

        <form action="/thanks" method="post">
            @csrf

            <table class="confirm-table">

                <tr>
                    <th>お名前</th>
                    <td>
                        {{ $inputs['last_name'] }} {{ $inputs['first_name'] }}

                        <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
                        <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
                    </td>
                </tr>

                <tr>
                    <th>性別</th>
                    <td>
                        @if ($inputs['gender'] == 1)
                            男性
                        @elseif($inputs['gender'] == 2)
                            女性
                        @else
                            その他
                        @endif

                        <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
                    </td>
                </tr>

                <tr>
                    <th>メールアドレス</th>
                    <td>
                        {{ $inputs['email'] }}
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                    </td>
                </tr>

                <tr>
                    <th>電話番号</th>
                    <td>
                        {{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}

                        <input type="hidden" name="tel1" value="{{ $inputs['tel1'] }}">
                        <input type="hidden" name="tel2" value="{{ $inputs['tel2'] }}">
                        <input type="hidden" name="tel3" value="{{ $inputs['tel3'] }}">
                    </td>
                </tr>

                <tr>
                    <th>住所</th>
                    <td>
                        {{ $inputs['address'] }}
                        <input type="hidden" name="address" value="{{ $inputs['address'] }}">
                    </td>
                </tr>

                <tr>
                    <th>建物名</th>
                    <td>
                        {{ $inputs['building'] }}
                        <input type="hidden" name="building" value="{{ $inputs['building'] }}">
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        @php
                            $categoryNames = [
                                1 => '商品のお届けについて',
                                2 => '商品の交換について',
                                3 => '商品トラブル',
                                4 => 'ショップへのお問い合わせ',
                                5 => 'その他',
                            ];
                        @endphp

                        {{ $categoryNames[$inputs['category_id']] }}
                        <input type="hidden" name="category_id" value="{{ $inputs['category_id'] }}">
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        {{ $inputs['detail'] }}
                        <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">
                    </td>
                </tr>

            </table>

            <div class="confirm-buttons">
                <button type="button" onclick="history.back()">修正する</button>
                <button type="submit">送信する</button>
            </div>

        </form>

    </div>
@endsection
