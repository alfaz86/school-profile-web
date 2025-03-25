@extends('layouts.app')

@section('content')
    <!-- Contact Form -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <form class="rounded px-20 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <div class="flex flex-wrap -mx-3 mb-6 items-start">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block text-gray-700 text-sm mb-2" for="name">
                                Nama
                            </label>
                            <input
                                class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                                id="name" placeholder="Nama" type="text" />
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block text-gray-700 text-sm mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                                id="email" placeholder="emailkamu@gmail.com" type="email" />
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="phone">
                        No Telp
                    </label>
                    <input
                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                        id="phone" placeholder="+62" type="text" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="message">
                        Isi Pesan
                    </label>
                    <textarea
                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                        id="message" placeholder="Pesan kamu." rows="4">
        </textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold w-40 py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </section>
    {{-- Maps --}}
    <section class="pb-8">
        <div class="container mx-auto px-6">
            <div class="flex justify-center">
                <img src="{{ asset('images/Screenshot (1) 1.png') }}" alt="maps" class="w-931px h-479px">
            </div>
        </div>
    </section>
@endsection
