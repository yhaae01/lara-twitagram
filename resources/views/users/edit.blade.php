<x-app-layout>
   <x-slot name="header">
      <h1 class="font-semibold">Update Profile</h1>
   </x-slot>
   <x-container>
      <div class="flex justify-center">
         <div class="w-1/2"> 
            @if (session()->has('message'))
               <div class="text-green-500 mb-4 text-center">
                  {{ session('message') }}
               </div>
            @endif
            <x-card>
               <form action="{{ route('profile.update') }}" method="post">
                  @method('put')
                  @csrf
                  <div class="mb-5">
                     <x-label for="username">Username</x-label>
                     <x-input value="{{ old('username', Auth::user()->username) }}" class="my-3 w-full" type="text" name="username" id="username"></x-input>
                     @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <div class="mb-5">
                     <x-label for="email">E-mail</x-label>
                     <x-input value="{{ old('email', Auth::user()->email) }}" class="my-3 w-full" type="email" name="email" id="email"></x-input>
                     @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <div class="mb-5">
                     <x-label for="name">Full Name</x-label>
                     <x-input value="{{ old('name', Auth::user()->name) }}" class="my-3 w-full" type="text" name="name" id="name"></x-input>
                     @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <x-button>Save</x-button>
               </form>
            </x-card>
         </div>
      </div>
   </x-container>
</x-app-layout>