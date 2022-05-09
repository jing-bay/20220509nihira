@extends('default')

@section('title', '内容確認')
  
@section('content')
  <form action="/thanks" class="h-adr" method="post">
    <div class="form">
      @csrf
      <span class="p-country-name" style="display:none;">Japan</span>
      
      <dl class="row">
        <dt class="cell form_title">お名前</dt>
        <dd class="form_content cell">
          {{$inputs['fullname']}}
        </dd>
        <dd>
          <input type="hidden" name="fullname" value="{{$inputs['fullname']}}">
        </dd>
      </dl>
      
      <dl class="row">
        <dt class="cell form_title">性別</dt>
        <dd class="form_content cell">{{$inputs['gender']}}</dd>
        <dd>
          <input type="hidden" name="gender" value="{{$inputs['gender']}}">
        </dd>
      </dl>
      
      <dl class="row">
        <dt class="cell form_title">メールアドレス</dt>
        <dd class="form_content cell">{{$inputs['email']}}</dd>
        <dd>
          <input type="hidden" name="email" value="{{$inputs['email']}}">
        </dd>
      </dl>

      <dl class="row">
        <dt class="cell form_title">郵便番号</dt>
        <dd class="form_content cell">{{$inputs['postcode']}}</dd>
        <dd>
          <input type="hidden" name="postcode" value="{{$inputs['postcode']}}">
        </dd>
      </dl>
      
      <dl class="row">
        <dt class="cell form_title">住所</dt>
        <dd class="form_content cell">{{$inputs['address']}}</dd>
        <dd>
        <input type="hidden" name="address" value="{{$inputs['address']}}">
        </dd>
      </dl>
      
      <dl class="row">
        <dt class="cell form_title">建物名</dt>
        <dd class="form_content cell">{{$inputs['building_name']}}</dd>
        <dd>
          <input type="hidden" name="building_name" value="{{$inputs['building_name']}}">
        </dd>
      </dl>
      
      <dl class="row">
        <dt class="cell form_title">ご意見</dt>
        <dd class="form_content cell">{{$inputs['opinion']}}</dd>
        <dd>
            <input type="hidden" name="opinion" value="{{$inputs['opinion']}}">
        </dd>
      </dl>
    </div>
    <div class="submit">
      <input type="submit" class="form_btn" value="送信">
    </div>
    <div class="submit">
      <button type="submit" class="reset_btn" name='back' value="back">修正する</button>
    </div>
  </form>
@endsection