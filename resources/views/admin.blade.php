@extends('default')

@section('title', '管理システム')
  
@section('content')
<style>
  svg.w-5.h-5 {
  width: 30px;
  height: 30px;
  }
</style>

<div class="form-group">
  <form action="{{ route('admin') }}" method="GET">
    @csrf
    <table>
      <tr class="form_row">
        <th class="form_title">お名前</p>
        <td>
          <input type="text" class="form_input" name="fullname" value="{{$fullname}}">
        </td>
      </tr>

      <tr class="form_row">
        <th class="form_title">性別</th>
        <td>
          <label class="ECM_RadioInput">
            <input type="radio" name="gender" class="ECM_RadioInput-Input" checked="checked" value="">
            <span class="ECM_RadioInput-DummyInput"></span>
            <span class="ECM_RadioInput-LabelText">全て</span>
          </label>
          <label class="ECM_RadioInput">
            <input type="radio" name="gender" class="ECM_RadioInput-Input" value=1>
            <span class="ECM_RadioInput-DummyInput"></span>
            <span class="ECM_RadioInput-LabelText">男性</span>
          </label>
          <label class="ECM_RadioInput">
            <input type="radio" name="gender" class="ECM_RadioInput-Input" value=2>
            <span class="ECM_RadioInput-DummyInput"></span>
            <span class="ECM_RadioInput-LabelText">女性</span>
          </label>
        </td>
      </tr>

      <tr class="form_row">
        <th class="form_title">登録日</th>
        <td>
          <div style="display:inline-flex">
            <input type="date" name="from" class="form_input" value="{{$from}}">~
            <input type="date" name="until" class="form_input" value="{{$until}}">
          </div>
        </td>
      </tr>

      <tr class="form_row">
        <th class="form_title">メールアドレス</th>
        <td>
          <input type="text" class="form_input" name="email" value="{{$email}}">
        </td>
      </tr>
    </table>
    <div class="submit">
      <input type="submit" class="form_btn" value="検索">
    </div>
  </form>
  <div class="submit">
    <form action="{{ route('reset') }}" method="GET">
      <input type="submit" class="reset_btn" value="リセット">
    </form>
  </div>
</div>

<div class="result">
  
  <div>{{ $items->appends(request()->input())->links('vendor.pagination.tailwind') }}</div>

  <table class="result_list">
    <tr style="border-bottom: solid 1px black;">
      <th class="result_list_item id">ID</th>
      <th class="result_list_item name">お名前</th>
      <th class="result_list_item gender">性別</th>
      <th class="result_list_item email">メールアドレス</th>
      <th class="result_list_item opinion">ご意見</th>
      <th class="result_list_item"></th>
    </tr>

    @foreach ($items as $item)
    <tr>
      <td class="result_list_item id">{{ $item->id }}</td>
      <td class="result_list_item name">{{ $item->fullname }}</td>
      <td class="result_list_item gender">{{ $item->gender }}</td>
      <td class="result_list_item email">{{ $item->email }}</td>
      <td class="result_list_item opinion">{{$item->opinion}}</td>
      <form action="delete"  method="POST">
        @csrf
          <td class="result_list_item">
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="submit" class="delete_btn" value="削除">
          </td>
        </form>
    </tr>
    @endforeach
  </table>
</div>
@endsection