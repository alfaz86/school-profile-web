@extends('layouts.app')

@section('content')
    <!-- Contact Form -->
    <section class="pt-8">
        <div class="container mx-auto px-4">
            <form class="rounded px-10 md:px-20 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <div class="flex flex-wrap -mx-3 mb-6 items-start">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block text-gray-700 text-xs lg:text-base mb-2" for="name">
                                Nama
                            </label>
                            <input
                                class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-xs lg:text-base text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                                id="name" placeholder="Nama" type="text" />
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block text-gray-700 text-xs lg:text-base mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-xs lg:text-base text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                                id="email" placeholder="emailkamu@gmail.com" type="email" />
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs lg:text-base mb-2" for="phone">
                        No Telp
                    </label>
                    <input
                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-xs lg:text-base text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                        id="phone" placeholder="+62" type="text" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs lg:text-base mb-2" for="message">
                        Isi Pesan
                    </label>
                    <textarea
                        class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-xs lg:text-base text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                        id="message" placeholder="Tulis pesan Anda di sini..." rows="4"></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-xs lg:text-base  text-white font-bold w-40 py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </section>
    {{-- Maps --}}
    <section class="pb-12 px-4 lg:px-8">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex justify-center">
                <div class="w-full aspect-w-16 aspect-h-9 md:aspect-w-2 md:aspect-h-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.308728756083!2d107.9371624!3d-6.7159827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69297798edc86d%3A0xad0346beb9a791b1!2sSDN%20BOJONGLOA%20I!5e0!3m2!1sen!2sid!4v1712238400000!5m2!1sen!2sid"
                        class="w-full h-64 sm:h-80 md:h-96 lg:h-[479px]" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
