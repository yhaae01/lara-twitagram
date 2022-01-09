<x-app-layout>
   <x-container>
      <div class="grid grid-cols-3 gap-5">
         <x-following :users="$users"/>
      </div>
      <div class="mt-5">
         {{ $users->links() }}
      </div>
   </x-container>
</x-app-layout>