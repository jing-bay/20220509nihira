@extends('default')

@section('title', 'お問い合わせ')

@section('content')

  <form action="/confirm" class="h-adr" method="post">
    <div class="form">
      @csrf
      <span class="p-country-name" style="display:none;">Japan</span>
      <dl class="row">
        <dt class="cell form_title">お名前<span class="required">※</span></dt>
        <dd class="cell">
          <div class="input">
            <input type="text" name="fullname" class="form_input" value="{{ old('fullname')}}">
          </div>
          <p class="example">例）山田太郎</p>
          @error('fullname') 
          <p class="error_message">{{$message}}</p>
          @enderror
        </dd>
      </dl>

      <dl class="row">
        <dt class="cell form_title">性別<span class="required">※</span></dt>
        <dd class="cell">
          <label class="ECM_RadioInput">
            <input type="radio" class="ECM_RadioInput-Input" name="gender" checked="checked" value=1 {{old('gender') == 1 ? 'checked' : '' }} >
            <span class="ECM_RadioInput-DummyInput"></span>
            <span class="ECM_RadioInput-LabelText">男性</span>
          </label>
          <label class="ECM_RadioInput">
            <input type="radio" class="ECM_RadioInput-Input" name="gender" value=2  {{old('gender') == 2 ? 'checked' : '' }} >
            <span class="ECM_RadioInput-DummyInput"></span>
            <span class="ECM_RadioInput-LabelText">女性</span>
          </label>
        </dd>
      </dl>
        
      <dl class="row">
        <dt class="cell form_title">メールアドレス<span class="required">※</span></dt>
        <dd class="cell">
          <div class="input">
            <input type="text" name="email" class="form_input" value="{{ old('email')}}">
          </div>
          <p class="example">例）test@example.com</p>
          @error('email') 
          <p class="error_message">{{$message}}</p>
          @enderror
        </dd>
      </dl>

      <dl class="row">
        <dt class="cell form_title">郵便番号<span class="required">※</span></dt>
        <dd class="cell">
          <div class="form_postal_input">
            <span class="postal_mark">〒</span>
            <input type="text" id="postcode" name="postcode" onblur="toHalfWidth(this)" value="{{ old('postcode')}}"class="p-postal-code">
          </div>
          <p class="example">例）123-4567</p>
          @error('postcode') 
          <p class="error_message">{{$message}}</p>
          @enderror
        </dd>
      </dl>

      <dl class="row">
        <dt class="cell form_title">住所<span class="required">※</span></dt>
        <dd class="cell">
          <div class="input">
            <input type="text" name="address" value="{{ old('address')}}" class="form_input p-region p-locality p-street-address p-extended-address">
          </div>
          <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          @error('address') 
          <p class="error_message">{{$message}}</p>
          @enderror
        </dd>
      </dl>

      <dl class="row">
        <dt class="cell form_title">建物名</dt>
        <dd class="cell">
          <div class="input">
            <input type="text" name="building_name" value="{{ old('building_name')}}" class="form_input">
          </div>
          <p class="example">例）千駄ヶ谷マンション101</p>
        </dd>
      </dl>

      <dl class="opinion_row">
        <dt class="cell form_opinion_title">ご意見<span class="required">※</span></dt>
        <dd class="cell">
          <textarea name="opinion" class="form_opinion_input">{{ old('opinion')}}</textarea>
          @error('opinion') 
          <p class="error_message">{{$message}}</p>
          @enderror
        </dd>
      </dl>
    </div>
    <div class="submit">
      <input type="submit" class="form_btn" value="確認">
    </div>
  </form>

  <script src="{{ asset('/js/contact.js') }}"></script>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
@endsection