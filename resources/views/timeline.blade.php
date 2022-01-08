<x-app-layout>
   <x-container>
      <div class="grid grid-cols-12 gap-6">
         <div class="col-span-8">
            <h1 class="font-semibold mb-4">All Status</h1>
            <div class="space-y-6">
               <div class="border rounded-xl p-5 space-y-5">
                  @foreach ($statuses as $status)
                     <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                           <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}">
                        </div>
                        <div>
                           <div class="font-semibold">
                              {{ $status->user->name }}
                           </div>
                           <div class="leading-relaxed">
                              {{ $status->body }}
                           </div>
                           <div class="text-gray-500 text-sm">
                              {{ $status->created_at->diffForHumans() }}
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
         <div class="col-span-4">
            <h1 class="font-semibold mb-4">Recent Follow</h1>
            <div class="border p-5 rounded-xl">
               <div class="space-y-5">
                  @foreach (Auth::user()->follows()->limit(5)->get() as $user)
                     <div class="flex items-center">
                        <div class="flex-shrink-0 mr-3">
                           <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150" alt="{{ $user->name }}">
                        </div>
                        <div>
                           <div class="font-semibold">
                              {{ $user->name }}
                           </div>
                           <div class="text-gray-500 text-sm">
                              {{ $user->pivot->created_at->diffForHumans() }}
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </x-container>
</x-app-layout>