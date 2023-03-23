@extends('app')

@section('title', 'CRUD - OJT')

@section('content')

<div class="bg-gray-900 py-10">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold leading-6 text-white">Users</h1>
        <p class="mt-2 text-sm text-gray-300">A list of all the users in your account including their name, title, email and role.</p>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <a href="/add" class="block rounded-md bg-indigo-500 py-2 px-3 text-center text-sm font-semibold text-white hover:bg-indigo-400 
        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add user</a>
      </div>
    </div>
    <div class="mt-8 flow-root">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <table class="min-w-full divide-y divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">Name</th>
                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-white">Title</th>
                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-white">Email</th>
                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-white">Role</th>
                <th scope="col" class="py-3.5 px-3 text-left text-sm text-center font-semibold text-white">
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-800">
                @foreach($data as $item)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">{{$item->name}}</td>
                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">{{$item->title}}</td>
                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">{{$item->email}}</td>
                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-300">{{$item->role}}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-0">
                          <a href="/edit/{{$item->id}}" class="text-blue-400 hover:text-indigo-300 pr-2">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <a href="/delete/{{$item->id}}" class="text-red-400 hover:text-indigo-300">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop