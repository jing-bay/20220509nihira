<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  
  <link rel="stylesheet" href="css/style.css"/>


  <title>Document</title>
</head>
<body>
  <div class="container">
  <h1 class="title">お問い合わせ</h1>
  <form action="/confirm" class="form h-adr" method="post">
    @csrf
    <span class="p-country-name" style="display:none;">Japan</span>
      <dl class="form_name">
        <dt>お名前<p class="required">※</p></dt>
        <dd><input type="text" name="fullname" class="form_name_input" value="{{ old('fullname')}}"></dd>
        <br>
        <dd class="form_name_example">例）山田太郎</dd>
        @error('fullname') 
        <dd>{{$message}}</dd>
        @enderror
      </dl>
      <dl class="form_gender">
        <dt>性別<p class="required">※</p></dt>
        <dd><input type="radio" name="gender" checked="checked" value=1 {{old('gender') == 1 ? 'checked' : '' }} >男</dd>
        <dd><input type="radio" name="gender" value=2  {{old('gender') == 2 ? 'checked' : '' }} >女</dd>
      </dl>
      <dl class="form_email">
        <dt>メールアドレス<p class="required">※</p></dt>
        <dd><input type="text" name="email" class="form_email_input" value="{{ old('email')}}"></dd>
        <br>
        <dd class="form_mail_example">例）test@example.com</dd>
        @error('email') 
        <dd>{{$message}}</dd>
        @enderror
      </dl>
      <dl class="form_postcode">
        <dt>郵便番号<p class="required">※</p></dt>
        <dd>〒<input type="text" id="postcode" name="postcode" onblur="toHalfWidth(this)" value="{{ old('postcode')}}"class="form_postcode_input p-postal-code"></dd>
        <br>
        <dd class="form_postcode_example">例）123-4567</dd>
        @error('postcode') 
        <dd>{{$message}}</dd>
        @enderror
      </dl>
      <dl class="form_address">
        <dt>住所<p class="required">※</p></dt>
        <dd><input type="text" name="address" value="{{ old('address')}}" class="form_address_input p-region p-locality p-street-address p-extended-address"></dd>
        <br>
        <dd class="form_address_example">例）東京都渋谷区千駄ヶ谷1-2-3</dd>
        @error('address') 
        <dd>{{$message}}</dd>
        @enderror
      </dl>
      <dl class="form_building_name">
        <dt>建物名</dt>
        <dd><input type="text" name="building_name" value="{{ old('building_name')}}" class="form_building_name_input"></dd>
        <br>
        <dd class="form_building_name_example">例）千駄ヶ谷マンション101</dd>
      </dl>
      <dl class="form_opinion">
        <dt>ご意見<p class="required">※</p></dt>
        <dd><textarea name="opinion">{{ old('opinion')}}</textarea></dd>
        @error('opinion') 
        <dd>{{$message}}</dd>
        @enderror
      </dl>

    <input type="submit" class="form_btn" value="確認">
  </form>
  </div>

<script src="/resources/js/contact.js"></script>
<script>
    function toHalfWidth(elm) {
    elm.value = elm.value.replace(/[Ａ-Ｚａ-ｚ０-９！-～]/g, function(s){
      return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
      });
    }
</script>
</body>
</html>