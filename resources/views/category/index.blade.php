@extends('layout.master')

@section('index')
    <h1>หมวดหมู่ข่าว
        <table>
            <thead>
                <tr>
                    <td>ลำดับ</td>
                    <td>ชื่อหมวดหมู่</td>
                    <td>สร้างเมื่อ</td>
                    <td>จัดการ</td>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>แก้ไข | ลบ</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </h1>
@endsection

