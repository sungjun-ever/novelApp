@extends('layouts.app')

@section('container')
    <div class="w-2/3 mx-auto">
        <div class="w-1/3 mx-auto py-32">
            <form action="{{route('register')}}" method="post" class="pt-6 h-2/3 shadow-md">
                @csrf
                <h1 class="py-2 text-center text-2xl">이메일 회원가입</h1>
                <x-forms.input type="email" title="이메일" name="email"></x-forms.input>
                <x-forms.input type="password" title="비밀번호" name="password"></x-forms.input>
                <x-forms.input type="password" title="비밀번호 확인" name="password_confirmation"></x-forms.input>
                <p class="text-center py-4">
                    <button type="submit" class="bg-indigo-600 text-white w-4/12 py-3 rounded-xl text-lg">회원가입</button>
                    <a class="pl-8" href="{{route('index')}}"><button type="button" class="bg-red-600 text-white w-2/12 py-3 rounded-xl text-lg">취소</button></a>
                </p>
            </form>
        </div>
    </div>
@stop
