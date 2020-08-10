@extends('layouts.frontend')


@section('content')


    <div class="grid grid-cols-10 m-auto mt-20">

        <div class="col-span-4 ">
            <img src="{{asset('images/mail.png')}}" class="object-cover w-3/6 m-auto right-0 " >
        </div>

        <div class="col-span-6">
            <form action="{{route('contact-us')}}" method="post" class="m-auto w-2/5 max-w-lg ">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-3">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Nickname
                        </label>
                        <input name="name" autocomplete="off" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nick" type="text">
                        @error('name')
                        <p class="text-red-400 text-xs italic">{{$message}}</p>
                        @enderror

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-3">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            E-mail
                        </label>
                        <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">

                        @error('email')
                        <p class="text-red-400 text-xs italic">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-3">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Message
                        </label>
                        <textarea autocomplete="off" name="message" class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-38 resize-none" id="message"></textarea>

                        <p class="text-gray-600 text-xs italic">Having a clear & concise message will help Us</p>
                        @error('message')
                        <p class="text-red-400 text-xs italic">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                        <button type="submit" class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                            Send
                        </button>
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            </form>
        </div>
    </div>
@endsection
