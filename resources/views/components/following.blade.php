@foreach ($users as $user)
   <x-card>
      <div class="flex items-center">
         <div class="flex-shrink-0 mr-3">
            <a href="{{ route('following.store', $user) }}">
               <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ $user->name }}">
            </a>
         </div>
         <div>
            <a href="{{ route('following.store', $user) }}" class="font-semibold">
               {{ $user->name }}
            </a>
            @if (request()->routeIs('users.index'))
               <form action="{{ route('following.store', $user) }}" method="post" class="inline">
                  @csrf
                  @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                     <button type="submit" class="flex-shrink-0 inline-flex items-center px-2 py-1 ml-3 bg-sky-500 border border-transparent rounded-md font-semibold text-sm text-white tracking-widest hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150">Unfollow</button>
                     @else
                     <button type="submit" class="flex-shrink-0 inline-flex items-center px-2 py-1 ml-3 bg-sky-500 border border-transparent rounded-md font-semibold text-sm text-white tracking-widest hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150">Follow</button>
                  @endif
               </form>
            @endif
            <div class="text-gray-500 text-sm">
               {{ $user->username }}
            </div>
         </div>
      </div>
   </x-card>
@endforeach