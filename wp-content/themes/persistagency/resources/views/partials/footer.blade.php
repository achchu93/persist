<footer class="bg-gray-700 text-white dummy">
  <div class="container mx-auto">

    <div class="flex flex-col md:flex-row items-center justify-center px-5 py-8 space-y-10 md:space-y-0 md:space-x-10">

      <div class="md:w-1/3"> 
        <a href="{{ home_url('/') }}"
           class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <img src="{{$header_logo_option['url']}}" alt="logo" class="h-auto w-full">
        </a>
        <div class="mt-5">
          <x-social-icons-footer></x-social-icons-footer> 
        </div>
      </div>

      <div class="text-sm sm:ml-4 sm:pl-4  sm:py-2 sm:mt-0 mt-4">
        @php dynamic_sidebar('sidebar-footer') @endphp
      </div>
    </div>
  </div> 
</footer>
