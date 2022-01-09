<x-app-layout>
   <div class="border-b -mt-8 py-10">
      <x-container>
         <div class="flex justify-center -ml-5">
            <div class="flex-shrink-0 mr-3">
               <img class="rounded-full w-25 h-25 border-2 border-sky-500 p-1" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
            </div>
            <div>
               <h1 class="font-semibold mb-3 ml-5 mt-3 ">
                  {{ $user->name }}
                  {{-- @if (Auth::user()->isNot($user))
                  <form action="{{ route('following.store', $user) }}" method="post" class="inline">
                     @csrf
                     @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                        <button type="submit" class="flex-shrink-0 inline-flex items-center px-2 py-1 ml-3 bg-sky-500 border border-transparent rounded-md font-semibold text-sm text-white tracking-widest hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150">Unfollow</button>
                        @else
                        <button type="submit" class="flex-shrink-0 inline-flex items-center px-2 py-1 ml-3 bg-sky-500 border border-transparent rounded-md font-semibold text-sm text-white tracking-widest hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150">Follow</button>
                     @endif
                  </form>
                  @else
                     <a href="{{ route('profile.edit') }}" class="flex-shrink-0 inline-flex items-center px-2 py-1 ml-3 border border-black rounded-md font-semibold text-sm text-black tracking-widest hover:bg-gray-200 focus:outline-none focus:border-gray-700 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Edit Profile</a>
                  @endif --}}
               </h1>
               
               <x-statistic :user="$user"/>

            </div>
         </div>
      </x-container>
   </div>

   <x-container>
      <div class="grid grid-cols-3 gap-5 my-5">
         <x-following :users="$follows"></x-following>
      </div>
   </x-container>
</x-app-layout>