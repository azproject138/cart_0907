@extends('template/layout')
@section('judul')
 Form Login
@endsection
@section('konten')
<form action="{{ url('login') }}" method="POST">
 @csrf
 <table>
<tr>
<td>Username</td>
<td>
<input class="form-control form-user-input" type="text" 
name="username" required="">
 @error('username')
 <span style="color: red">{{ $message }}</span>
 @enderror
</td>
</tr>
<tr>
<td>Password</td>
<td>
<input class="form-control form-user-input" type="password" 
name="password" required="">
</td>
</tr>
<tr>
<td colspan="3">
<input class="btn btn-primary" type="submit" name="submit" 
value="Login">
</td>
</tr>
</table>
</form>
@endsection
@section('script_custom')
@endsection