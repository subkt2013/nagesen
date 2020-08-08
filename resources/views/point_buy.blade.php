@extends('layout.app')

@section('content')

<div class="container">
<form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">ポイントを購入</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1000ポイント</option>
      <option>3000ポイント</option>
      <option>5000ポイント</option>
      <option>10000ポイント</option>
    </select>
  </div>
</form>
<button type="submit" class="btn btn-primary">決済画面へ移動</button>
</div>

@endsection