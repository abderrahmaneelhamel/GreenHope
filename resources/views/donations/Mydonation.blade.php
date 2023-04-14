<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Welcome to GreenHope</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">an online community for donors from around the world.</p>
                {{-- <a href="/events" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
                    Donate
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a> --}}
                <a href="/events" class="cssbuttons-io-button"> Get started
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                  </div>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img style="width: 413px; height: 310px;" src="./build/assets/Logo-Green-Hope.png" alt="mockup">
            </div>                
        </div>
    </section>
  <div class="bg-gray-50 flex flex-wrap px-16 w-full">
    <div class="pt-5 w-full flex justify-center">
        <p class="max-w-2xl mb-6 font-bold text-green-600 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Your items</p>
    </div>
        <div class="relative w-full">
          <div class="absolute top-0 -left-4 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob "></div>
          <div class="absolute top-0 -right-4 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
          <div class="absolute -bottom-32 left-20 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        <div class="w-full flex flex-wrap">
    <!-- card -->
  @if($donations->count())
        
  @foreach($donations as $key => $donation)
  @if ($donation->To == Auth::user()->id)
  <form action="{{  route('donationGeting') }}" method="POST" class="w-1/3">
      @csrf
  <div class="bg-white m-3 isolate rounded-md object-cover">
      <input type="text" name="id" value="{{ $donation->id }}" class="hidden">
  <abbr style="text-decoration: none" title="take it">
      <button type="submit" class="group w-full relative block bg-black">
              <img
                alt=""
                src="{{ $donation->image }}"
                class="absolute bg-gray-100 inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
              />
            
              <div class="relative w-full p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-medium uppercase tracking-widest text-green-600">
                  {{ $donation->categories->label }}
                </p>
            
                <p class="text-xl font-bold text-white sm:text-2xl">{{ $donation->label }}</p>
            
                <div class="mt-32 sm:mt-48 lg:mt-64">
                  <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                  >
                    <p class="text-sm text-white">
                      {{ $donation->description }}
                    </p>
                  </div>
                </div>
              </div>
    </button></abbr> 
    
  </div>
  </form>
  @endif
  @endforeach
  @endif   
  </div>
  {!! $donations->appends(\Request::except('page'))->render() !!}
  <div class="flex items-end justify-end fixed bottom-0 right-2 mb-4 mr-4 z-10">
    <div>
        <a title="Contact Us" href="/contact" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover bg-white object-center w-full h-full rounded-full" src="../build/assets/Logo-Green-Hope.png"/>
        </a>
    </div>
  </div>
  </div> 
  </div>
  </x-app-layout>