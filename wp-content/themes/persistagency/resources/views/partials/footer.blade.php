<footer class="page-footer relative bg-bottom bg-repeat-x" style="background-image:url(@asset('images/footer-bg.png'))">
  <div class="container mx-auto">

    <div class="flex flex-col md:flex-row md:pt-16 md:space-x-10 md:space-y-0 px-4 py-8 space-y-10">

      <div class="md:w-1/3 space-y-10"> 
        <a href="{{ home_url('/') }}"
           class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <img src="{{$header_logo_black['url']}}" alt="logo" class="h-auto w-full">
        </a>
      </div>

      <div class="md:w-1/3 space-y-10">
        @php dynamic_sidebar('sidebar-footer1') @endphp
      </div>

      <div class="md:w-1/3 space-y-10">
        @php dynamic_sidebar('sidebar-footer2') @endphp
      </div>

      <div class="md:w-1/3 space-y-10">
        @php dynamic_sidebar('sidebar-footer3') @endphp

        <div class="mt-5">
          <x-social-icons-footer></x-social-icons-footer> 
        </div>

      </div>

    </div>
  </div> 

  <div class="container mb-16 mx-auto px-4">
    <div class="flex justify-between items-center">

      <div class="">
        @php dynamic_sidebar('sidebar-subfooter-left') @endphp
      </div>

      <div class="">
        @php dynamic_sidebar('sidebar-subfooter-right') @endphp
      </div>

    </div>

  </div>

</footer>
