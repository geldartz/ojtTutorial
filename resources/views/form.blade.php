@extends('app')

@section('title', 'CRUD FORM - OJT')

@section('content')
<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">{{ isset($user) ? 'Update' : 'Add' }}  User</h2>
  </div>
  <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form class="space-y-6" action="{{isset($user) ? url('/update-data') : url('/save-data')}}" method="POST">
      @csrf
      @if(isset($user))
        @method('PUT')
      @endif
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <input type="hidden" name="user_id" value="{{ isset($user) ? $user->id : old('name') }}">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-1">
            <input id="name" name="name" type="text"  value="{{ isset($user) ? $user->name : old('name') }}" class="@error('name') text-red-900 placeholder-red-700 border border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-1">
            <input id="title" name="title" type="text"  value="{{ isset($user) ? $user->title : old('title') }}" class="@error('title') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" value="{{ isset($user) ? $user->email : old('email') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
          <div class="mt-1">
          <select id="role" name="role" value="{{ old('role') }}" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <option selected value="" disabled>Select Role</option>      
                <option {{isset($user) && $user->role == "frontend" ? "selected" : "" }} value="frontend">Frontend Developer</option>
                <option {{isset($user) && $user->role == "backend" ? "selected" : "" }} value="backend">Backend Developer</option>
                <option {{isset($user) && $user->role == "fullstack" ? "selected" : "" }} value="fullstack">Fullstack Developer</option>
            </select>
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold 
              text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
              focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              {{isset($user) ? 'Update' : 'Save'  }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


@stop