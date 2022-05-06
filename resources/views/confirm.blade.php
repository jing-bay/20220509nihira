<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <h1 class="title">お問い合わせ</h1>
  <form action="/thanks" class="form h-adr" method="post">
    @csrf
    <span class="p-country-name" style="display:none;">Japan</span>
      <dl class="form_name">
        <dt>お名前</dt>
        <dd class="form_name_input">{{$inputs['fullname']}}
        </dd>
        <dd>
          <input type="hidden" name="fullname" value="{{$inputs['fullname']}}">
        </dd>
      </dl>
      <dl class="form_gender">
      <dt>性別</dt>
      <dd>
        {{$inputs['gender']}}
      </dd>
      <dd>
        <input type="hidden" name="gender" value="{{$inputs['gender']}}">
      </dd>
      </dl>
      <dl class="form_email">
        <dt>メールアドレス</dt>
        <dd class="form_email_input">{{$inputs['email']}}</dd>
        <dd>
          <input type="hidden" name="email" value="{{$inputs['email']}}">
        </dd>
      </dl>
      <dl class="form_postcode">
        <dt>郵便番号</dt>
        <dd class="form_postcode_input">{{$inputs['postcode']}}</dd>
        <dd>
          <input type="hidden" name="postcode" value="{{$inputs['postcode']}}">
        </dd>
      </dl>
      <dl class="form_address">
        <dt>住所</dt>
        <dd class="form_address_input">{{$inputs['address']}}</dd>
        <dd>
          <input type="hidden" name="address" value="{{$inputs['address']}}">
        </dd>
      </dl>
      <dl class="form_building_name">
        <dt>建物名</dt>
        <dd class="form_building_name_input">{{$inputs['building_name']}}</dd>
        <dd>
          <input type="hidden" name="building_name" value="{{$inputs['building_name']}}">
        </dd>
      </dl>
      <dl class="form_opinion">
        <dt>ご意見</dt>
        <dd>{{$inputs['opinion']}}</dd>
        <dd>
            <input type="hidden" name="opinion" value="{{$inputs['opinion']}}">
        </dd>
      </dl>

      <input type="submit" class="form_btn" value="送信">
      <button type="submit" name='back' value="back">修正する</button>
      </form>
  </div>

</body>
</html>