@extends('partials.layout')
@section('content')
    <button class="border-2 text-white bg-blue-400">Hello</button>
    <div class="inline-flex mt-6">
        <button
            class="rounded-s-sm border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
            View
        </button>

        <button
            class="-ms-px border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
            Edit
        </button>

        <button
            class="-ms-px rounded-e-sm border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
            Delete
        </button>
    </div>

    <button class="btn btn-primary">Click me!</button>

    {{-- Bootstrap 5.3 .btn.btn-primary recreated with Tailwind utilities only --}}
    <div class="mt-6 flex gap-2 bg-white p-6">
        <button
            class="inline-block cursor-pointer rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-center align-middle text-base leading-normal font-normal text-white select-none transition-[color,background-color,border-color,box-shadow] duration-150 ease-in-out hover:border-[#0a58ca] hover:bg-[#0b5ed7] focus-visible:border-[#0a58ca] focus-visible:bg-[#0b5ed7] focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 focus-visible:outline-none active:border-[#0a53be] active:bg-[#0a58ca] disabled:pointer-events-none disabled:opacity-65">
            Primary
        </button>

        <button disabled
            class="inline-block cursor-pointer rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-center align-middle text-base leading-normal font-normal text-white select-none transition-[color,background-color,border-color,box-shadow] duration-150 ease-in-out hover:border-[#0a58ca] hover:bg-[#0b5ed7] focus-visible:border-[#0a58ca] focus-visible:bg-[#0b5ed7] focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 focus-visible:outline-none active:border-[#0a53be] active:bg-[#0a58ca] disabled:pointer-events-none disabled:opacity-65">
            Disabled
        </button>
    </div>
@endsection
