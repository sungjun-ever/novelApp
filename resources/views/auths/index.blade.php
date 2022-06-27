@extends('layouts.app')

@section('container')
    <div class="border border-black w-2/3 py-64 mx-auto">
        <div class="w-2/3 mx-auto">
            <span class="text-3xl">로그인</span>
            <div class="flex border">
                <div class="flex-1">
                    <form class="mx-2 my-4" action="{{route('login')}}" method="POST">
                        @csrf
                        <p><input class="border border-black h-10 w-full rounded-md pl-2" type="text" name="userID" placeholder="아이디"></p>
                        <p class="pt-8"><input class="border border-black h-10 w-full rounded-md pl-2" type="text" name="password" placeholder="비밀번호"></p>
                        <p class="pt-3"><input class="bg-indigo-600 hover:bg-indigo-700 py-2 w-full rounded-md text-white text-xl" type="submit" value="로그인"></p>
                    </form>
                </div>
                <div class="flex-1 text-center my-auto">
                    <p><a href="{{route('auths.register')}}"><button class="bg-indigo-600 hover:bg-indigo-700 py-1 w-2/3 rounded-md text-white text-xl">회원가입</button></a></p>
                    <p class="pt-6"><a href="#"><button class="bg-indigo-600 hover:bg-indigo-700 py-1 w-2/3 rounded-md text-white text-xl">아이디/비밀번호 찾기</button></a></p>
                </div>
            </div>
        </div>
    </div>
@stop
