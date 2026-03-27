@extends('layouts.portfolio')

@section('content')
  <!-- Home Section -->
  <section id="home" class="reveal min-h-screen flex items-center justify-center pt-20 px-8">
    <div class="max-w-7xl mx-auto w-full">
      <div class="flex flex-wrap gap-16 items-center justify-center">
        <div class="flex-1 min-w-[300px] text-center">
          <h1 class="text-5xl font-bold mb-4 text-white">
            I'm <span class="text-blue-500">Ma. Bea Mae Ynion</span>
          </h1>
          <p class="text-2xl text-gray-400 mb-8">
            Aspiring Web Developer | UI/UX Designer
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
              <img src="{{ asset('images/bea.png') }}" alt="Profile Picture" class="w-full h-full object-cover">
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
          I am a graduating student from Polytechnic University of the
          Philippines – Taguig Campus, aspiring to become a Web Developer.
          I am passionate about creating modern, responsive, and user-friendly
          websites, and I enjoy turning ideas into reality through clean code
          and creative design. With a strong foundation in both front-end
          and back-end technologies, I strive to build web applications
          that not only look visually appealing but also deliver seamless
          and efficient user experiences.
        </p>
      </div>

      <div class="flex flex-wrap gap-16 justify-center">
        <div class="flex-1 min-w-[400px] max-w-[500px]">
          <h3 class="text-4xl font-bold mb-8 text-blue-400 text-center">Organizations</h3>
          <div class="flex flex-col gap-8">
            <!-- Computer Society -->
            <a href="https://www.facebook.com/PUPTCS" target="_blank" class="block no-underline">
              <div class="bg-[#111] rounded-lg p-8 border border-gray-800 transition-transform hover:-translate-y-2 hover:border-blue-500 relative cursor-pointer">
                <i class="fas fa-external-link-alt absolute top-4 right-4 text-blue-400 text-sm"></i>
                <div class="mb-4 flex justify-center items-center">
                  <img src="{{ asset('images/cs.png') }}" alt="Computer Society" class="w-20 h-20 object-contain">
                </div>
                <h4 class="text-xl font-semibold text-white mb-2">Computer Society</h4>
                <p class="text-gray-400">PUP Taguig Campus</p>
              </div>
            </a>
              
            <!-- Google Developer Groups -->
            <a href="https://gdg.community.dev/gdg-on-campus-polytechnic-university-of-the-philippines-manila-philippines/" target="_blank" class="block no-underline">
              <div class="bg-[#111] rounded-lg p-8 border border-gray-800 transition-transform hover:-translate-y-2 hover:border-blue-500 relative cursor-pointer">
                <i class="fas fa-external-link-alt absolute top-4 right-4 text-blue-400 text-sm"></i>
                <div class="mb-4 flex justify-center items-center">
                  <img src="{{ asset('images/gdg.png') }}" alt="Google Developer Groups" class="w-20 h-20 object-contain">
                </div>
                <h4 class="text-xl font-semibold text-white mb-2">Google Developer Groups</h4>
                <p class="text-gray-400">on Campus PUP</p>
              </div>
            </a>
           </div>
        </div>
          
        <!-- Right: Experience -->
        <div class="flex-1 min-w-[400px] max-w-[500px]">
          <h3 class="text-4xl font-bold mb-8 text-blue-400 text-center">Experience</h3>
          <div class="relative pl-10 max-w-[600px] mx-auto">
            <!-- Vertical Timeline Line -->
            <div class="absolute left-[0.4375rem] top-2 bottom-0 w-0.5 bg-blue-400"></div>
              
            <!-- UI/UX / Frontend Developer -->
            <div class="relative mb-10">
              <div class="absolute -left-[2.50rem] top-1 w-3.5 h-3.5 bg-blue-500 rounded-full border-4 border-black z-10"></div>
              <div>
                <h4 class="text-xl font-semibold text-white mb-2">UI/UX | Frontend Developer</h4>
                <p class="text-gray-400 font-medium mb-1">PUP Taguig Campus</p>
                <p class="text-gray-400 text-sm">2025 - 2026</p>
              </div>
            </div>
              
            <!-- Documentation Assistant & Accreditation Intern -->
            <div class="relative">
              <div class="absolute -left-[2.50rem] top-1 w-3.5 h-3.5 bg-blue-500 rounded-full border-4 border-black z-10"></div>
              <div>
                <h4 class="text-xl font-semibold text-white mb-2">Documentation Assistant & Accreditation Intern</h4>
                <p class="text-gray-400 font-medium mb-1">PUP Taguig Campus</p>
                <p class="text-gray-400 text-sm">2025</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="skills" class="min-h-screen flex items-center justify-center py-16 px-8">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-8 text-blue-500">Skills, Technologies & Tools</h2>

      <!-- Frontend -->
      <div class="mb-12">
        <h3 class="text-2xl font-bold mb-6 text-blue-400">Frontend</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-html5 text-4xl text-[#e34c26] mb-2"></i>
            <h3 class="text-white">HTML</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-css3-alt text-4xl text-[#264de4] mb-2"></i>
            <h3 class="text-white">CSS</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-js text-4xl text-[#f0db4f] mb-2"></i>
            <h3 class="text-white">JavaScript</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="#3178c6">
              <path d="M0 12v12h24V0H0zm19.341-.956c.61.152 1.074.423 1.501.865.221.236.549.666.575.77.008.03-1.036.73-1.668 1.123-.023.015-.115-.084-.217-.236-.31-.45-.633-.644-1.128-.678-.728-.05-1.196.331-1.192.967a.88.88 0 0 0 .102.45c.16.331.458.53 1.39.933 1.719.74 2.454 1.227 2.911 1.92.51.773.625 2.008.278 2.926-.38.998-1.325 1.676-2.655 1.9-.411.073-1.386.062-1.828-.018-.964-.172-1.878-.648-2.442-1.273-.221-.244-.651-.88-.625-.925.011-.016.11-.077.22-.141.108-.061.511-.294.892-.515l.69-.4.145.214c.202.308.643.731.91.872.766.404 1.817.347 2.335-.118a.883.883 0 0 0 .123-.764c-.138-.404-.473-.631-1.394-1.02-1.643-.693-2.35-1.137-2.833-1.777-.138-.184-.298-.483-.375-.716a3.001 3.001 0 0 1-.094-1.528c.122-.851.631-1.517 1.425-1.872.394-.177 1.056-.311 1.444-.293zM13 11.3V13H8v7H6v-7H1v-1.7c0-.93.01-1.7.02-1.7.008 0 2.7 0 5.98-.002L13 9.6v1.7z"/>
            </svg>
            <h3 class="text-white">TypeScript</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-angular text-4xl text-[#dd0031] mb-2"></i>
            <h3 class="text-white">Angular</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-bootstrap text-4xl text-[#7952b3] mb-2"></i>
            <h3 class="text-white">Bootstrap</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="#06b6d4">
              <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/>
            </svg>
            <h3 class="text-white">Tailwind CSS</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-sass text-4xl text-[#cc6699] mb-2"></i>
            <h3 class="text-white">SCSS</h3>
          </div>
        </div>
      </div>

      <!-- Backend -->
      <div class="mb-12">
        <h3 class="text-2xl font-bold mb-6 text-blue-400">Backend</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-node-js text-4xl text-[#68a063] mb-2"></i>
            <h3 class="text-white">Node.js</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-python text-4xl text-[#3776ab] mb-2"></i>
            <h3 class="text-white">Python</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-php text-4xl text-[#777bb4] mb-2"></i>
            <h3 class="text-white">PHP</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fas fa-database text-4xl text-[#00758f] mb-2"></i>
            <h3 class="text-white">MySQL</h3>
          </div>
        </div>
      </div>

      <!-- Tools -->
      <div>
        <h3 class="text-2xl font-bold mb-6 text-blue-400">Tools</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fas fa-lock text-4xl text-blue-500 mb-2"></i>
            <h3 class="text-white">OAuth</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-github text-4xl text-[#2088ff] mb-2"></i>
            <h3 class="text-white">GitHub Actions</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-figma text-4xl text-[#f24e1e] mb-2"></i>
            <h3 class="text-white">Figma</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-git-alt text-4xl text-[#f05032] mb-2"></i>
            <h3 class="text-white">Git</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-github text-4xl text-white mb-2"></i>
            <h3 class="text-white">GitHub</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="#007acc">
              <path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.276.057L.327 7.261A1 1 0 0 0 .326 8.74L3.899 12 .326 15.26a1 1 0 0 0 .001 1.479L1.65 17.94a.999.999 0 0 0 1.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352zm-5.146 14.861L10.826 12l7.178-5.448v10.896z"/>
            </svg>
            <h3 class="text-white">VS Code</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="#ffffff">
              <path d="M4.458 4.208c.746.606 1.026.56 2.428.466l13.215-.793c.28 0 .047-.28-.046-.326L17.86 1.968c-.42-.326-.981-.7-2.055-.607L3.01 2.295c-.466.046-.56.28-.374.466zm.793 3.08v13.904c0 .747.373 1.027 1.214.98l14.523-.84c.841-.046.935-.56.935-1.167V6.354c0-.606-.233-.933-.748-.887l-15.177.887c-.56.047-.747.327-.747.933zm14.337.745c.093.42 0 .84-.42.888l-.7.14v10.264c-.608.327-1.168.514-1.635.514-.748 0-.935-.234-1.495-.933l-4.577-7.186v6.952L12.21 19s0 .84-1.168.84l-3.222.186c-.093-.186 0-.653.327-.746l.84-.233V9.854L7.822 9.76c-.094-.42.14-1.026.793-1.073l3.456-.233 4.764 7.279v-6.44l-1.215-.139c-.093-.514.28-.887.747-.933zM1.936 1.035l13.31-.98c1.634-.14 2.055-.047 3.082.7l4.249 2.986c.7.513.934.653.934 1.213v16.378c0 1.026-.373 1.634-1.68 1.726l-15.458.934c-.98.047-1.448-.093-1.962-.747l-3.129-4.06c-.56-.747-.793-1.306-.793-1.96V2.667c0-.839.374-1.54 1.447-1.632z"/>
            </svg>
            <h3 class="text-white">Notion</h3>
          </div>
          <div class="bg-[#111] p-4 rounded-lg border border-gray-700 hover:border-blue-500 hover:transform hover:-translate-y-1 transition-all">
            <i class="fab fa-trello text-4xl text-[#0079bf] mb-2"></i>
            <h3 class="text-white">Trello</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="min-h-screen flex items-center justify-center py-16 px-8 bg-[#0a0a0a]">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-bold mb-12 text-blue-500 text-center">My Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Project 1: HEYBLEEPI -->
          <div class="bg-[#111] rounded-lg overflow-hidden border border-gray-800 hover:transform hover:-translate-y-2 transition-all">
            <div class="h-70 overflow-hidden">
              <img src="{{ asset('images/heybleepi.png') }}" alt="HEYBLEEPI" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-white mb-3">HEYBLEEPI</h3>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">HTML</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">CSS</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">JS</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">PHP</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">MySQL</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">OAuth</span>
              </div>
              <p class="text-gray-400 text-sm mb-4">
                HeyBleepi is a social media-style platform that lets users
                interact through dynamic posts, real-time comments, and 
                social engagement tools. With a modern and intuitive interface,
                it makes connecting online simple and fun.
              </p>
              <a href="https://github.com/PUP-BSIT/project-club-404.git"
                 target="_blank" class="text-blue-500 hover:text-blue-400 font-medium inline-flex items-center gap-2">
                View Github <span>→</span>
              </a>
            </div>
          </div>

          <!-- Project 2: iBudget -->
          <div class="bg-[#111] rounded-lg overflow-hidden border border-gray-800 hover:transform hover:-translate-y-2 transition-all">
            <div class="h-70 overflow-hidden">
              <img src="{{ asset('images/ibudget.png') }}" alt="iBudget" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-white mb-3">iBudget</h3>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Angular</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">TypeScript</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Node.js</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">MySQL</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Spring Boot</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Google OAuth</span>
              </div>
              <p class="text-gray-400 text-sm mb-4">
                iBudget is a modern web application designed to help
                people, especially students, manage their finances with ease.
                Built with cutting-edge technologies, it simplifies money
                management and reduces the time and effort typically associated with budgeting.
              </p>
              <a href="https://github.com/PUP-BSIT/project-appvengers.git"
                 target="_blank" class="text-blue-500 hover:text-blue-400 font-medium inline-flex items-center gap-2">
                View GitHub <span>→</span>
              </a>
            </div>
          </div>

          <!-- Project 3: Enrollment Management System -->
          <div class="bg-[#111] rounded-lg overflow-hidden border border-gray-800 hover:transform hover:-translate-y-2 transition-all">
            <div class="h-70 overflow-hidden">
              <img src="{{ asset('images/ems.png') }}" alt="Enrollment Management System" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-white mb-3">Enrollment Management System</h3>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">HTML</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">CSS</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">JS</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">PHP</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">MySQL</span>
              </div>
              <p class="text-gray-400 text-sm mb-4">
                Enrollment Management System is a web-based application
                that streamlines the enrollment process for educational institutions.
                It allows students to easily register for courses, manage
                their schedules, and track their academic progress online.
              </p>
              <a href="https://github.com/ynion-mabeamae/DBA_Student_Enrollment_System.git"
                 target="_blank" class="text-blue-500 hover:text-blue-400 font-medium inline-flex items-center gap-2">
                View GitHub <span>→</span>
              </a>
            </div>
          </div>

          <!-- Project 4: ServeTrack -->
          <div class="bg-[#111] rounded-lg overflow-hidden border border-gray-800 hover:transform hover:-translate-y-2 transition-all">
            <div class="h-70 overflow-hidden">
              <img src="{{ asset('images/servetrack.png') }}" alt="ServeTrack" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-white mb-3">
                ServeTrack 
                <span class="text-green-400 text-sm font-normal ml-2">(Ongoing)</span>
              </h3>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Angular</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">TypeScript</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Node.js</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">MySQL</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Laravel</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">SMS</span>
                <span class="bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full text-xs">Facebook API</span>
              </div>
              <p class="text-gray-400 text-sm mb-4">
                ServeTrack is an innovative web application designed to
                streamline the management of community service activities.
                It enables users to efficiently track, organize, and report
                their community service hours, making it easier to contribute to meaningful causes.
              </p>
              <a href="https://github.com/PUPT-Quantum-Leap/capstone-nlcom-volunteer-management-system.git"
                 target="_blank" class="text-blue-500 hover:text-blue-400 font-medium inline-flex items-center gap-2">
                View GitHub <span>→</span>
              </a>
            </div>
          </div>
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
            <form class="bg-[#111] p-4 sm:p-6 md:p-8 rounded-lg border border-gray-800">
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
          </div>
      </div>
    </div>
  </section>
@endsection 