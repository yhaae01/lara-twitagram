{{-- Status Following Followers --}}
<div class="flex pt-2">
   <a href="{{ route('profile', $user->username) }}" class="text-center ml-5">
      <div class="font-4xl font-semibold">{{ $user->statuses->count() }}</div>
      <div class="text-gray-600">status</div>
   </a>
   <a href="{{ route('profile.following', [$user->username, 'following']) }}" class="text-center ml-5">
   {{-- <a href="{{ route('following.index', [$user->username, 'following']) }}" class="text-center ml-5"> --}}
      <div class="font-4xl font-semibold">{{ $user->follows->count() }}</div>
      <div class="text-gray-600">following</div>
   </a>
   <a href="{{ route('profile.following', [$user->username, 'follower']) }}" class="text-center ml-5">
   {{-- <a href="{{ route('following.index', [$user->username, 'follower']) }}" class="text-center ml-5"> --}}
      <div class="font-4xl font-semibold">{{ $user->followers->count() }}</div>
      <div class="text-gray-600">follower</div>
   </a>
</div>