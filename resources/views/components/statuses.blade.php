@foreach ($statuses as $status)
   <x-card>
      <div class="flex">
         <div class="flex-shrink-0 mr-3">
            <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ $status->user->name }}">
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
   </x-card>
@endforeach