@extends('layouts.admin')
@section('admin-content')
<!-- Content -->
<div class="w-full lg:ps-64">
<div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
<!-- Card -->
<div class="flex flex-col" x-data="{ modalOpen: false }">
<div class="-m-1.5 overflow-x-auto">
<div class="p-1.5 min-w-full inline-block align-middle">
<div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden  ">
<!-- Header -->
<div
class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 ">
<div>
<h2 class="text-xl font-semibold text-gray-800 ">
Users
</h2>
<p class="text-sm text-gray-600 ">
Add users, edit and more.
</p>
</div>

<div>
<div class="inline-flex gap-x-2">
<a href="#"
class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none    ">
View all
</a>
</div>
</div>
</div>
<!-- End Header -->




<!-- Table -->
<table class="min-w-full divide-y divide-gray-200 ">
<thead class="bg-gray-50 ">
<tr>
<th scope="col" class="ps-6 py-3 text-start">
<label for="hs-at-with-checkboxes-main" class="flex">
<input type="checkbox"
class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none     "
id="hs-at-with-checkboxes-main">
<span class="sr-only">Checkbox</span>
</label>
</th>


<th scope="col" class="px-6 py-3 text-start">
<div class="flex items-center gap-x-2">
<span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
ID
</span>
</div>
</th>

<th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
<div class="flex items-center gap-x-2">
<span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
Firstname
</span>
</div>
</th>

<th scope="col" class="px-6 py-3 text-start">
<div class="flex items-center gap-x-2">
<span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
Lastname
</span>
</div>
</th>

<th scope="col" class="px-6 py-3 text-start">
<div class="flex items-center gap-x-2">
<span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
Email
</span>
</div>
</th>


<th scope="col" class="px-6 py-3 text-start">
<div class="flex items-center gap-x-2">
<span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
Created
</span>
</div>
</th>



<th scope="col" class="px-6 py-3 flex justify-end  text-right">
<div class="flex items-center gap-x-2">
<span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
View
</span>
</div>
</th>
</tr>
</thead>

<tbody class="divide-y divide-gray-200">
@foreach ($users as $user)
<tr x-data="{open: false}">
<td class="size-px whitespace-nowrap">
<div class="ps-6 py-3">
<label for="hs-at-with-checkboxes-1" class="flex">
<input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
<span class="sr-only">Checkbox</span>
</label>
</div>
</td>
<td class="size-px whitespace-nowrap">
<div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
<div class="flex items-center gap-x-3">
<div class="size-[38px] rounded-full bg-blue-700 text-white flex justify-center items-center font-semibold">
{{ strtoupper(substr($user->firstname, 0, 1)) }}{{ strtoupper(substr($user->lastname, 0, 1)) }}
</div>                                                                  
<div class="grow">
<span class="block text-sm font-semibold text-gray-800">{{$user->firstname}} {{$user->lastname}}</span>
<span class="block text-sm text-gray-500">{{$user->email}}</span>
</div>
</div>
</div>
</td>
<td class="h-px w-72 whitespace-nowrap">
<div class="px-6 py-3">
<span class="block text-sm font-semibold text-gray-800">
{{$user->firstname}}
</span>
</div>
</td>
<td class="size-px whitespace-nowrap">
<div class="px-6 py-3">
{{$user->lastname}}

{{-- <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
<svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
Active
</span> --}}
</div>
</td>
<td class="size-px whitespace-nowrap">
<div class="px-6 py-3">
{{$user->email}}
</div>
</td>
<td class="size-px whitespace-nowrap">
<div class="px-6 py-3">
<span class="text-sm text-gray-500">
{{$user->created_at->format('M d, Y')}}
</span>
</div>
</td>
<td class="size-px whitespace-nowrap">
<div class="px-6 py-1.5">
<button @click="open = true"  class="inline-flex items-center gap-x-1 text-sm  bg-blue-500 text-white px-2 py-1 rounded-md focus:outline-none focus:underline font-medium" >
View
</button>
</div>

<!-- Modal -->
<template x-if="true">
<div 
x-show="open" 
class="fixed inset-0 bg-gray-900 bg-opacity-20 flex items-center justify-center z-50"
x-transition:enter="ease-out duration-300"
x-transition:enter-start="opacity-0 scale-90"
x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="ease-in duration-200"
x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-90">

    <div class="mx-10 w-full md:w-auto">
    <div class="bg-white rounded-lg shadow-lg p-2  w-full sm:max-w-full  relative  flex flex-col justify-center">
    <div class="flex justify-between py-2 px-4 ">
    <h2 class="text-lg font-semibold text-gray-800">User Information</h2>
    <button 
    @click="open = false" 
    class=" text-gray-400 hover:text-gray-600">
    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
    </button>
    </div>
    <hr>

    <div class=" whitespace-normal mt-1 w-full ">
    <div class="flex flex-col md:flex-row items-center gap-y-2 gap-x-2 px-1  w-full">
    <div class="flex flex-col gap-y-1 w-full">
    <label for="firstname" class="text-xs lg:text-sm">First Name</label>
    <input type="text" class="text-gray-500 rounded-md border border-gray-200 shadow-md" name="firstname" id="firstname" value="{{$user->firstname}}">
    </div>
    <div class="flex flex-col gap-y-1 w-full">
    <label for="lastname" class="text-xs lg:text-sm">Last Name</label>
    <input type="text" class="text-gray-500 rounded-md border border-gray-200 shadow-md" name="lastname" id="lastname" value="{{$user->lastname}}">
    </div>
    </div>

    <div class="flex flex-col md:flex-row  items-center gap-y-2 gap-x-2  px-1 mt-4 w-full">
    <div class="flex flex-col gap-y-1 w-full">
    <label for="email" class="text-xs lg:text-sm">Email  Address</label>
    <input type="text" class="text-gray-500 rounded-md border border-gray-200 shadow-md" name="email" id="email" value="{{$user->email}}">
    </div>
    <div class="flex flex-col gap-y-1 w-full">
    <label for="phone_number" class="text-xs lg:text-sm">Phone Number</label>
    <input type="text" class="text-gray-500 rounded-md border border-gray-200 shadow-md" name="phone_number" id="phone_number"
     value="{{$user->phone_number}}">
    </div>
    </div>
    </div>

    <div class="flex items-center gap-x-2 mx-2 mt-4">
    <div class="flex flex-col gap-y-1 w-full">
    <label for="created_at" class="text-xs lg:text-sm">Date Created</label>
    <input type="text" disabled class="text-gray-500 rounded-md border border-gray-200 shadow-md" name="phone_number" id="created_at" value="{{$user->created_at->format('M d, Y')}}">
    </div>
    </div>

    <div class="mt-4 flex w-full py-2 px-4">
    <button 
    @click="open = false" 
    class="w-full px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 focus:outline-none">
    Close
    </button>
    <button 
    @click="alert('Action Confirmed!')" 
    class="w-full ml-2 px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-700 focus:outline-none">
    Delete
    </button>
    </div>
    </div>
    </div>

</div>
</template>


<!--End of Modal -->


</td>
</tr>
@endforeach

</tbody>
</table>
<!-- Table -->


<div
class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">
<div>

</div>

<div>
{{-- {{ $users->links() }} --}}

</div>
</div>

</div>
</div>
</div>
</div>
<!-- Card End -->
</div>
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
@endsection
