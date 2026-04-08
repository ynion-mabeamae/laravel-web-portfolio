@extends('layouts.portfolio')

@use('Illuminate\Support\Str')

@if(session('status'))
    <div id="snackbar" class="fixed top-16 right-4 md:top-20 md:right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
        {{ session('status') }}
    </div>
@endif

@section('content')
  <!-- Home Section -->
  <section id="home" class="reveal min-h-screen flex items-center justify-center pt-20 px-8">
    <div class="max-w-7xl mx-auto w-full">
      <div class="flex flex-wrap gap-16 items-center justify-center">
        <div class="flex-1 min-w-[300px] text-center">
          <h1 class="text-5xl font-bold mb-4 text-white">
            I'm <span class="text-blue-500">{{ $profile->name }}</span>
          </h1>
          <p class="text-2xl text-gray-400 mb-8">
            {{ $profile->title }}
          </p>
          <div class="flex gap-4 justify-center">
            <a href="#contact" class="bg-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
              Get In Touch
            </a>
            <a href="#projects" class="border-2 border-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">
              View Projects
            </a>
          </div>
        </div>
        <div class="flex-1 min-w-[300px] flex justify-center items-center">
          <div class="w-[400px] h-[400px] rounded-full overflow-hidden border-4 border-blue-500 shadow-[0_0_30px_rgba(59,130,246,0.5)]">
              <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="Profile Picture" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="min-h-screen flex items-center justify-center py-16 px-8" style="background: #0a0a0a;">
    <div class="max-w-7xl mx-auto w-full">
      <h2 class="text-5xl font-bold mb-12 text-blue-500 text-center">
        About Me
      </h2>
      <div class="max-w-3xl mx-auto mb-16">
        <p class="text-xl text-gray-300 leading-relaxed text-center">
          {{ $profile->description }}
        </p>
      </div>

    <div class="flex flex-wrap gap-16 justify-center">
      <!-- Left: Organizations -->
      <div class="flex-1 min-w-[400px] max-w-[500px]">
        <h3 class="text-4xl font-bold mb-8 text-blue-400 text-center">Organizations</h3>
        <div class="flex flex-col gap-8">
          @foreach($organizations as $org)
            <a href="{{ $org->link }}" target="_blank" class="block no-underline">
              <div class="bg-[#111] rounded-lg p-8 border border-gray-800 transition-transform hover:-translate-y-2 hover:border-blue-500 relative cursor-pointer">
                <i class="fas fa-external-link-alt absolute top-4 right-4 text-blue-400 text-sm"></i>
                <div class="mb-4 flex justify-center items-center">
                  <img src="{{ asset('images/' . $org->logo) }}" alt="{{ $org->name }}" class="w-20 h-20 object-contain">
                </div>
                <h4 class="text-xl font-semibold text-white mb-2 flex justify-center">{{ $org->name }}</h4>
              </div>
            </a>
          @endforeach
        </div>
      </div>
            
      <!-- Right: Experience -->
      <div class="flex-1 min-w-[400px] max-w-[500px]">
        <h3 class="text-4xl font-bold mb-8 text-blue-400 text-center">Experience</h3>
        <div class="relative pl-10 max-w-[600px] mx-auto">
          <div class="absolute left-[0.4375rem] top-2 bottom-0 w-0.5 bg-blue-400"></div>
          
          @foreach($experience as $exp)
            <div class="relative mb-10">
              <div class="absolute -left-[2.50rem] top-1 w-3.5 h-3.5 bg-blue-500 rounded-full border-4 border-black z-10"></div>
              <div>
                <h4 class="text-xl font-semibold text-white mb-2">{{ $exp->title }}</h4>
                <p class="text-gray-400 font-medium mb-1">{{ $exp->company }}</p>
                <p class="text-gray-400 text-sm">{{ $exp->date_from }}{{ $exp->date_to ? ' - ' . $exp->date_to : '' }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section id="skills" class="min-h-screen flex items-center justify-center py-16 px-8">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-8 text-blue-500">Skills, Technologies & Tools</h2>

      <!-- Frontend -->
      @php $frontend = $skills->where('category', 'frontend') @endphp
      @if($frontend->count() > 0)
      <div class="mb-12">
        <h3 class="text-2xl font-bold mb-6 text-blue-400">Frontend</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          @foreach($frontend as $skill)
            <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all flex flex-col items-center justify-center">
              @if(Str::endsWith($skill->icon, '.png'))
                <img src="{{ asset('images/' . $skill->icon) }}" alt="{{ $skill->name }}" style="width: 3rem; height: 3rem;">
              @endif
              <h3 class="text-white mt-2">{{ $skill->name }}</h3>
            </div>
          @endforeach
        </div>
      </div>
      @endif

      <!-- Backend -->
      @php $backend = $skills->where('category', 'backend') @endphp
      @if($backend->count() > 0)
      <div class="mb-12">
        <h3 class="text-2xl font-bold mb-6 text-blue-400">Backend</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          @foreach($backend as $skill)
            <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all flex flex-col items-center justify-center">
              @if(Str::endsWith($skill->icon, '.png'))
                <img src="{{ asset('images/' . $skill->icon) }}" alt="{{ $skill->name }}" style="width: 3rem; height: 3rem;">
              @endif
              <h3 class="text-white mt-2">{{ $skill->name }}</h3>
            </div>
          @endforeach
        </div>
      </div>
      @endif

      <!-- Tools -->
      @php $tools = $skills->where('category', 'tools') @endphp
      @if($tools->count() > 0)
      <div>
        <h3 class="text-2xl font-bold mb-6 text-blue-400">Tools</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          @foreach($tools as $skill)
            <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all flex flex-col items-center justify-center">
              @if(Str::endsWith($skill->icon, '.png'))
                <img src="{{ asset('images/' . $skill->icon) }}" alt="{{ $skill->name }}" style="width: 3rem; height: 3rem;">
              @endif
              <h3 class="text-white mt-2">{{ $skill->name }}</h3>
            </div>
          @endforeach
        </div>
      </div>
      @endif
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="min-h-screen flex items-center justify-center py-16 px-8 bg-[#0a0a0a]">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-bold mb-12 text-blue-500 text-center">My Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
@foreach($projects as $project)
            <div class="bg-[#111] rounded-lg overflow-hidden border border-gray-800 hover:transform hover:-translate-y-2 transition-all">
               <div class="h-70 overflow-hidden">
                  @if($project->image)
                  <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                @else
                  <div class="w-full h-full bg-gray-800 flex items-center justify-center text-gray-500">No Image</div>
                @endif
                </div>
              <div class="p-6">
                <h3 class="text-2xl font-bold text-white mb-3">
                  {{ $project->title }}
                  @if($project->title == 'ServeTrack')
                    <span class="text-green-400 text-sm font-normal ml-2">(Ongoing)</span>
                  @endif
                </h3>
                <div class="flex flex-wrap gap-2 mb-4">
                  @foreach(explode(',', $project->tech_stack) as $tech)
                    <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">{{ trim($tech) }}</span>
                  @endforeach
                </div>
                <p class="text-gray-400 text-sm mb-4">
                  {{ $project->description }}
                </p>
                <a href="{{ $project->github_link }}" target="_blank" class="text-blue-500 hover:text-blue-400 font-medium inline-flex items-center gap-2">
                  View GitHub <span>→</span>
                </a>
              </div>
           </div>
          @endforeach
        </div>
    </div>
  </section>

  <section id="contact" class="min-h-screen flex items-center justify-center py-16 px-4 sm:px-6 md:px-8">
    <div class="max-w-6xl mx-auto w-full">
      <h2 class="text-3xl sm:text-4xl font-bold mb-8 sm:mb-12 text-blue-500 text-center">
          Get In Touch
      </h2>
      
      <div class="flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-12 items-start">
          <!-- Left Side: Contact Info -->
          <div class="flex-1 w-full">
            <p class="text-gray-400 mb-6 sm:mb-8 text-base sm:text-lg leading-relaxed">
              I'm always open to discussing new projects, creative ideas,
              or opportunities to be part of your vision.
            </p>
              
            <!-- Email -->
            <div class="flex items-start gap-3 sm:gap-4 mb-4 sm:mb-6">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-[#1e293b] rounded-lg flex items-center justify-center flex-shrink-0">
                <i class="fas fa-envelope text-blue-400 text-lg sm:text-xl"></i>
              </div>
              <div>
                <h4 class="text-white font-semibold mb-1 text-sm sm:text-base">Email</h4>
                <a href="mailto:ynion.mabeamae@gmail.com" class="text-gray-400 hover:text-blue-400 transition text-sm sm:text-base break-all">
                  ynion.mabeamae@gmail.com
                </a>
              </div>
            </div>
              
            <!-- Phone -->
            <div class="flex items-start gap-3 sm:gap-4 mb-4 sm:mb-6">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-[#1e293b] rounded-lg flex items-center justify-center flex-shrink-0">
                <i class="fas fa-phone text-blue-400 text-lg sm:text-xl"></i>
              </div>
              <div>
                <h4 class="text-white font-semibold mb-1 text-sm sm:text-base">Phone</h4>
                <a href="tel:+639567409684" class="text-gray-400 hover:text-blue-400 transition text-sm sm:text-base">
                  +63 956-740-9684
                </a>
              </div>
            </div>
              
            <!-- Location -->
            <div class="flex items-start gap-3 sm:gap-4 mb-6 sm:mb-8">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-[#1e293b] rounded-lg flex items-center justify-center flex-shrink-0">
                <i class="fas fa-map-marker-alt text-blue-400 text-lg sm:text-xl"></i>
              </div>
              <div>
                <h4 class="text-white font-semibold mb-1 text-sm sm:text-base">Location</h4>
                <p class="text-gray-400 text-sm sm:text-base">Taguig City, Metro Manila</p>
              </div>
            </div>

            <!-- GitHub and LinkedIn - Below Location -->
            <div class="flex items-center gap-4 sm:gap-6 mt-4 sm:mt-6">
              <h4 class="text-white font-semibold text-sm sm:text-base mr-2">Socials:</h4>
              <a href="https://github.com/ynion-mabeamae" target="_blank" 
                class="text-gray-400 hover:text-blue-400 transition transform hover:-translate-y-1">
                <i class="fab fa-github text-2xl sm:text-3xl"></i>
              </a>
              <a href="https://linkedin.com/in/ma-bea-mae-ynion-b8263a357" target="_blank" 
                class="text-gray-400 hover:text-blue-400 transition transform hover:-translate-y-1">
                <i class="fab fa-linkedin text-2xl sm:text-3xl"></i>
              </a>
            </div>
          </div>
          
          <!-- Right Side: Contact Form -->
          <div class="flex-1 w-full">
            <form action="{{ route('contact.store') }}" method="POST" class="bg-[#111] p-4 sm:p-6 md:p-8 rounded-lg border border-gray-800">
              @csrf
              <div class="mb-4 sm:mb-6">
                <label class="block text-gray-300 mb-2 text-sm sm:text-base">Name</label>
                <input type="text" name="name" required 
                        class="w-full px-3 sm:px-4 py-2 sm:py-3 bg-black border border-gray-800 rounded-lg text-white focus:outline-none focus:border-blue-500 transition text-sm sm:text-base">
              </div>
              
              <div class="mb-4 sm:mb-6">
                <label class="block text-gray-300 mb-2 text-sm sm:text-base">Email</label>
                <input type="email" name="email" required 
                        class="w-full px-3 sm:px-4 py-2 sm:py-3 bg-black border border-gray-800 rounded-lg text-white focus:outline-none focus:border-blue-500 transition text-sm sm:text-base">
              </div>
              
              <div class="mb-4 sm:mb-6">
                <label class="block text-gray-300 mb-2 text-sm sm:text-base">Message</label>
                <textarea name="message" rows="5" required 
                          class="w-full px-3 sm:px-4 py-2 sm:py-3 bg-black border border-gray-800 rounded-lg text-white focus:outline-none focus:border-blue-500 transition text-sm sm:text-base"></textarea>
              </div>
              
              <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 sm:py-3 rounded-lg font-semibold hover:bg-blue-600 transition text-sm sm:text-base">
                Send Message
              </button>
            </form>

            @if(session('success'))
              <p class="text-green-500 mt-4">{{ session('success') }}</p>
            @endif
          </div>
      </div>
    </div>
  </section>
@endsection 