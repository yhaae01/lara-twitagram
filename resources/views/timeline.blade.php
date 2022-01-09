<x-app-layout>
   <x-container>
      <div class="grid grid-cols-12 gap-6">
         <div class="col-span-8">
            <h1 class="font-semibold mb-4">Create a Status</h1>
            <x-card>
               <form action="{{ route('statuses.store') }}" method="post">
                  @csrf
                  <div class="flex">
                     <div class="flex-shrink-0 mr-3">
                        <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ Auth::user()->name }}">
                     </div>
                     <div class="w-full">
                        <div class="leading-relaxed">
                           <textarea name="body" id="body" placeholder="What is your mind ?" rows="5" class="form-textarea w-full border-gray-300 rounded-lg resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200"></textarea>
                        </div>
                        <div class="mt-2 text-right">
                           <x-button>Post</x-button>
                        </div>
                     </div>
                  </div>
               </form>
            </x-card>
            <h1 class="font-semibold mb-4 mt-4">All Status</h1>
            <div class="space-y-6 mb-4">
               <div class="space-y-5">
                  <x-statuses :statuses="$statuses"></x-statuses>
               </div>
            </div>
         </div>

         <div class="col-span-4">
            <h1 class="font-semibold mb-4">Recent Follow</h1>
            <x-card>
               <div class="space-y-5">
                  <x-following :users="Auth::user()->follows()->limit(5)->get()"></x-following>
               </div>
            </x-card>
         </div>
         
      </div>
   </x-container>
</x-app-layout>