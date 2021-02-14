@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/store" method="post">
        @csrf
        ชื่อ-สกุล: <input type="text" name="name" required>
        username: <input type="text" name="username" required>
        email: <input type="text" name="email" required>
        password: <input type="text" name="password" required>
        <button type="submit">บันทึก</button>


    </form>

@endsection

