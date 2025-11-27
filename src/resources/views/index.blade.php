@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <p class="header-fixed">FashionablyLate</p>
    <h1 class="title">Contact</h1>
    <div class="wrap">
        <form action="/confirm" method="post">
            @csrf

            <div class='contact-form'>


                <div class='form-last-name form-row'>
                    <label>お名前（姓）</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" required>

                    @error('last_name')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>


                <div class='form-first-name form-row'> <label>お名前（名）</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}"required>

                    @error('first_name')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                <div class='form-gender form-row'>
                    <label>性別</label>
                    <label>
                        <input type="radio" name="gender" value="1" {{ old('gender', 1) == 1 ? 'checked' : '' }}> 男性
                    </label>

                    <label>
                        <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}> 女性
                    </label>

                    <label>
                        <input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }}> その他
                    </label>


                    @error('gender')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>


                <div class='form-email form-row'>
                    <label>メールアドレス</label>
                    <input type="email" name="email" value="{{ old('email') }}" required>

                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                <div class='form-tel form-row'>
                    <label>電話番号</label>
                    <input type="text" name="tel1" value="{{ old('tel1') }}" required> -
                    <input type="text" name="tel2" value="{{ old('tel2') }}" required> -
                    <input type="text" name="tel3" value="{{ old('tel3') }}" required>


                    @error('tel1')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    @error('tel2')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    @error('tel3')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                <div class='form-address form-row'>
                    <label>住所</label>
                    <input type="text" name="address" value="{{ old('address') }}" required>

                    @error('address')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                <div class='form-building form-row'>
                    <label>建物名</label>
                    <input type="text" name="building">
                </div>

                <div class='form-category form-row'>
                    <label>お問い合わせの種類</label>
                    <select name="category_id" required>
                        <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>商品のお届けについて</option>
                        <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>商品の交換について</option>
                        <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>商品トラブル</option>
                        <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                        <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>その他</option>
                    </select>

                    @error('category_id')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                <div class='form-detail form-row'>
                    <label>お問い合わせ内容</label>
                    <textarea name="detail" required>{{ old('detail') }}</textarea>

                    @error('detail')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                <button type="submit">確認画面</button>



            </div>
        </form>
    @endsection
