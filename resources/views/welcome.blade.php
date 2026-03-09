<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | Ma. Bea Mae Ynion</title>
  <link rel="icon" href="{{ asset('images/bea.png') }}" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <style>
    * {
        font-family: 'Quicksand', sans-serif;
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Fade in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Fade in from left */
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Fade in from right */
    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Apply fade in to sections */
    section {
        opacity: 0;
        animation: fadeIn 0.8s ease-out forwards;
    }
    
    /* Stagger animation delays for sections */
    section:nth-child(1) { animation-delay: 0s; }
    section:nth-child(2) { animation-delay: 0.1s; }
    section:nth-child(3) { animation-delay: 0.2s; }
    section:nth-child(4) { animation-delay: 0.3s; }
    section:nth-child(5) { animation-delay: 0.4s; }
    section:nth-child(6) { animation-delay: 0.5s; }
    
    /* Smooth transitions for all elements */
    * {
        transition: all 0.3s ease;
    }
    
    /* Hover effects for links */
    a {
        transition: color 0.3s ease, transform 0.3s ease;
    }
    
    a:hover {
        transform: translateY(-2px);
    }
    
    /* Scroll reveal animation */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    
    .scroll-reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
  </style>
  
  <script>
    // Scroll reveal on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Add scroll reveal functionality
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);
        
        // Observe all sections
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            section.classList.add('scroll-reveal');
            observer.observe(section);
        });
    });
  </script>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-white antialiased transition-colors duration-300 min-h-screen" style="background-color: #000000;">

  <!-- Navbar -->
  <nav class="fixed top-0 w-full z-50 bg-gradient-to-r from-gray-900 via-black to-gray-900 backdrop-blur-sm shadow-lg border-b border-gray-700/50">
      <div class="max-w-7xl mx-auto px-6 py-4">
          <div class="flex items-center justify-center gap-8">
              <!-- Centered Navigation Links -->
              <ul class="flex list-none items-center" style="gap: 5rem;">
                  <li>
                      <a href="#home" style="color: #d1d5db; font-weight: 500; font-size: 1.125rem; text-decoration: none; position: relative; transition: color 0.3s; padding-bottom: 5px; display: inline-block;" 
                          onmouseover="this.style.color='#ffffff'; this.querySelector('.underline').style.width='100%'; this.querySelector('.underline').style.left='0'" 
                          onmouseout="this.style.color='#d1d5db'; this.querySelector('.underline').style.width='0'; this.querySelector('.underline').style.left='50%'">
                          Home
                          <span class="underline" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #3b82f6; transition: all 0.3s;"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#about" style="color: #d1d5db; font-weight: 500; font-size: 1.125rem; text-decoration: none; position: relative; transition: color 0.3s; padding-bottom: 5px; display: inline-block;" 
                          onmouseover="this.style.color='#ffffff'; this.querySelector('.underline').style.width='100%'; this.querySelector('.underline').style.left='0'" 
                          onmouseout="this.style.color='#d1d5db'; this.querySelector('.underline').style.width='0'; this.querySelector('.underline').style.left='50%'">
                          About
                          <span class="underline" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #3b82f6; transition: all 0.3s;"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#skills" style="color: #d1d5db; font-weight: 500; font-size: 1.125rem; text-decoration: none; position: relative; transition: color 0.3s; padding-bottom: 5px; display: inline-block;" 
                          onmouseover="this.style.color='#ffffff'; this.querySelector('.underline').style.width='100%'; this.querySelector('.underline').style.left='0'" 
                          onmouseout="this.style.color='#d1d5db'; this.querySelector('.underline').style.width='0'; this.querySelector('.underline').style.left='50%'">
                          Skills
                          <span class="underline" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #3b82f6; transition: all 0.3s;"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#projects" style="color: #d1d5db; font-weight: 500; font-size: 1.125rem; text-decoration: none; position: relative; transition: color 0.3s; padding-bottom: 5px; display: inline-block;" 
                          onmouseover="this.style.color='#ffffff'; this.querySelector('.underline').style.width='100%'; this.querySelector('.underline').style.left='0'" 
                          onmouseout="this.style.color='#d1d5db'; this.querySelector('.underline').style.width='0'; this.querySelector('.underline').style.left='50%'">
                          Projects
                          <span class="underline" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #3b82f6; transition: all 0.3s;"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#contact" style="color: #d1d5db; font-weight: 500; font-size: 1.125rem; text-decoration: none; position: relative; transition: color 0.3s; padding-bottom: 5px; display: inline-block;" 
                          onmouseover="this.style.color='#ffffff'; this.querySelector('.underline').style.width='100%'; this.querySelector('.underline').style.left='0'" 
                          onmouseout="this.style.color='#d1d5db'; this.querySelector('.underline').style.width='0'; this.querySelector('.underline').style.left='50%'">
                          Contact
                          <span class="underline" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #3b82f6; transition: all 0.3s;"></span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- Home Section -->
  <section id="home" class="min-h-screen flex items-center justify-center" style="padding-top: 80px; padding-left: 2rem; padding-right: 2rem;">
      <div style="max-width: 1200px; margin: 0 auto; width: 100%;">
          <!-- Two Column Layout -->
          <div style="display: flex; flex-wrap: wrap; gap: 4rem; align-items: center; justify-content: center;">
              
              <!-- Left Column: Content -->
              <div style="flex: 1; min-width: 300px; text-align: left;">
                  <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem; color: #ffffff;">
                      I'm <span style="color: #3b82f6;">Ma. Bea Mae Ynion</span>
                  </h1>
                  <p style="font-size: 1.5rem; color: #9ca3af; margin-bottom: 2rem;">
                      Aspiring Web Developer | UI/UX Designer
                  </p>
                  <div style="display: flex; gap: 1rem;">
                      <a href="#contact" style="background: #3b82f6; color: white; padding: 0.75rem 2rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; transition: background 0.3s;" onmouseover="this.style.background='#2563eb'" onmouseout="this.style.background='#3b82f6'">
                          Get In Touch
                      </a>
                      <a href="#projects" style="border: 2px solid #3b82f6; color: white; padding: 0.75rem 2rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#3b82f6'" onmouseout="this.style.background='transparent'">
                          View Projects
                      </a>
                  </div>
              </div>
              
              <!-- Right Column: Image -->
              <div style="flex: 1; min-width: 300px; display: flex; justify-content: center; align-items: center;">
                  <div style="width: 400px; height: 400px; border-radius: 50%; overflow: hidden; border: 4px solid #3b82f6; box-shadow: 0 0 30px rgba(59, 130, 246, 0.5);">
                      <img src="{{ asset('images/bea.png') }}" alt="Profile Picture" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
              </div>
              
          </div>
      </div>
  </section>

  <!-- About Section -->
  <section id="about" class="min-h-screen flex items-center justify-center" style="padding: 4rem 2rem; background: #0a0a0a;">
      <div style="max-width: 1200px; margin: 0 auto; width: 100%;">
          <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 3rem; color: #3b82f6; text-align: center;">
              About Me
          </h2>
          
          <!-- About Me Description - Centered -->
          <div style="max-width: 900px; margin: 0 auto 4rem;">
              <p style="font-size: 1.25rem; color: #d1d5db; line-height: 1.8; text-align: center;">
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
          
          <!-- Single Row Layout: Organizations and Experience Side by Side -->
          <div style="display: flex; flex-wrap: wrap; gap: 4rem; justify-content: center;">
              
              <!-- Left: Organizations -->
              <div style="flex: 1; min-width: 400px; max-width: 500px;">
                  <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 2rem; color: #60a5fa; text-align: center;">Organizations</h3>
                  <div style="display: flex; flex-direction: column; gap: 2rem;">
                      <!-- Computer Society -->
                      <a href="https://www.facebook.com/PUPTCS" target="_blank" style="text-decoration: none;">
                          <div style="background: #111; border-radius: 0.5rem; padding: 2rem; border: 1px solid #333; transition: transform 0.3s; text-align: center; cursor: pointer; position: relative;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='#3b82f6'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                              <i class="fas fa-external-link-alt" style="position: absolute; top: 1rem; right: 1rem; color: #60a5fa; font-size: 1rem;"></i>
                              <div style="margin-bottom: 1rem; display: flex; justify-content: center; align-items: center;">
                                  <img src="{{ asset('images/cs.png') }}" alt="Computer Society" style="width: 80px; height: 80px; object-fit: contain;">
                              </div>
                              <h4 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 0.5rem;">Computer Society</h4>
                              <p style="color: #9ca3af;">PUP Taguig Campus</p>
                          </div>
                      </a>
                      
                      <!-- Google Developer Groups -->
                      <a href="https://gdg.community.dev/gdg-on-campus-polytechnic-university-of-the-philippines-manila-philippines/" target="_blank" style="text-decoration: none;">
                          <div style="background: #111; border-radius: 0.5rem; padding: 2rem; border: 1px solid #333; transition: transform 0.3s; text-align: center; cursor: pointer; position: relative;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='#4285f4'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                              <i class="fas fa-external-link-alt" style="position: absolute; top: 1rem; right: 1rem; color: #60a5fa; font-size: 1rem;"></i>
                              <div style="margin-bottom: 1rem; display: flex; justify-content: center; align-items: center;">
                                  <img src="{{ asset('images/gdg.png') }}" alt="Google Developer Groups" style="width: 80px; height: 80px; object-fit: contain;">
                              </div>
                              <h4 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 0.5rem;">Google Developer Groups</h4>
                              <p style="color: #9ca3af;">on Campus PUP</p>
                          </div>
                      </a>
                  </div>
              </div>
              
              <!-- Right: Experience -->
              <div style="flex: 1; min-width: 400px; max-width: 500px;">
                  <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 2rem; color: #60a5fa; text-align: center;">Experience</h3>
                  <div style="position: relative; padding-left: 2.5rem; max-width: 600px; margin: 0 auto;">
                      <!-- Vertical Timeline Line -->
                      <div style="position: absolute; left: 0.4375rem; top: 0.5rem; bottom: 0; width: 2px; background: #60a5fa;"></div>
                      
                      <!-- UI/UX / Frontend Developer -->
                      <div style="position: relative; margin-bottom: 2.5rem;">
                          <!-- Dot -->
                          <div style="position: absolute; left: -2.125rem; top: 0.25rem; width: 14px; height: 14px; background: #60a5fa; border-radius: 50%; border: 3px solid #000; z-index: 1;"></div>
                          <div>
                              <h4 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 0.5rem;">UI/UX | Frontend Developer</h4>
                              <p style="color: #9ca3af; font-weight: 500; margin-bottom: 0.25rem;">PUP Taguig Campus</p>
                              <p style="color: #9ca3af; font-size: 0.875rem;">2025 - 2026</p>
                          </div>
                      </div>
                      
                      <!-- Documentation Assistant & Accreditation Intern -->
                      <div style="position: relative;">
                          <!-- Dot -->
                          <div style="position: absolute; left: -2.125rem; top: 0.25rem; width: 14px; height: 14px; background: #60a5fa; border-radius: 50%; border: 3px solid #000; z-index: 1;"></div>
                          <div>
                              <h4 style="font-size: 1.25rem; font-weight: 600; color: #ffffff; margin-bottom: 0.5rem;">Documentation Assistant & Accreditation Intern</h4>
                              <p style="color: #9ca3af; font-weight: 500; margin-bottom: 0.25rem;">PUP Taguig Campus</p>
                              <p style="color: #9ca3af; font-size: 0.875rem;">2025</p>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="min-h-screen flex items-center justify-center" style="padding: 4rem 2rem;">
      <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
          <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 3rem; color: #3b82f6;">
            Skills, Technologies & Tools
          </h2>
          <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
              <!-- HTML -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-html5" style="font-size: 3rem; color: #e34c26; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">HTML</h3>
              </div>
              
              <!-- CSS -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-css3-alt" style="font-size: 3rem; color: #264de4; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">CSS</h3>
              </div>
              
              <!-- JavaScript -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-js" style="font-size: 3rem; color: #f0db4f; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">JavaScript</h3>
              </div>
              
              <!-- TypeScript -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <svg style="width: 3rem; height: 3rem; margin-bottom: 0.5rem;" viewBox="0 0 24 24" fill="#3178c6">
                      <path d="M0 12v12h24V0H0zm19.341-.956c.61.152 1.074.423 1.501.865.221.236.549.666.575.77.008.03-1.036.73-1.668 1.123-.023.015-.115-.084-.217-.236-.31-.45-.633-.644-1.128-.678-.728-.05-1.196.331-1.192.967a.88.88 0 0 0 .102.45c.16.331.458.53 1.39.933 1.719.74 2.454 1.227 2.911 1.92.51.773.625 2.008.278 2.926-.38.998-1.325 1.676-2.655 1.9-.411.073-1.386.062-1.828-.018-.964-.172-1.878-.648-2.442-1.273-.221-.244-.651-.88-.625-.925.011-.016.11-.077.22-.141.108-.061.511-.294.892-.515l.69-.4.145.214c.202.308.643.731.91.872.766.404 1.817.347 2.335-.118a.883.883 0 0 0 .123-.764c-.138-.404-.473-.631-1.394-1.02-1.643-.693-2.35-1.137-2.833-1.777-.138-.184-.298-.483-.375-.716a3.001 3.001 0 0 1-.094-1.528c.122-.851.631-1.517 1.425-1.872.394-.177 1.056-.311 1.444-.293zM13 11.3V13H8v7H6v-7H1v-1.7c0-.93.01-1.7.02-1.7.008 0 2.7 0 5.98-.002L13 9.6v1.7z"/>
                  </svg>
                  <h3 style="font-size: 1rem; color: #ffffff;">TypeScript</h3>
              </div>
              
              <!-- Angular -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-angular" style="font-size: 3rem; color: #dd0031; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Angular</h3>
              </div>
              
              <!-- Bootstrap -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-bootstrap" style="font-size: 3rem; color: #7952b3; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Bootstrap</h3>
              </div>
              
              <!-- Tailwind CSS -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <svg style="width: 3rem; height: 3rem; margin-bottom: 0.5rem;" viewBox="0 0 24 24" fill="#06b6d4">
                      <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/>
                  </svg>
                  <h3 style="font-size: 1rem; color: #ffffff;">Tailwind CSS</h3>
              </div>
              
              <!-- SCSS -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-sass" style="font-size: 3rem; color: #cc6699; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">SCSS</h3>
              </div>
              
              <!-- Node.js -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-node-js" style="font-size: 3rem; color: #68a063; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Node.js</h3>
              </div>
              
              <!-- Python -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-python" style="font-size: 3rem; color: #3776ab; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Python</h3>
              </div>
              
              <!-- PHP -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-php" style="font-size: 3rem; color: #777bb4; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">PHP</h3>
              </div>
              
              <!-- MySQL -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fas fa-database" style="font-size: 3rem; color: #00758f; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">MySQL</h3>
              </div>
              
              <!-- OAuth -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fas fa-lock" style="font-size: 3rem; color: #3b82f6; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">OAuth</h3>
              </div>
              
              <!-- GitHub Actions -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-github" style="font-size: 3rem; color: #2088ff; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">GitHub Actions</h3>
              </div>
              
              <!-- Figma -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-figma" style="font-size: 3rem; color: #f24e1e; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Figma</h3>
              </div>
              
              <!-- Git -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-git-alt" style="font-size: 3rem; color: #f05032; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Git</h3>
              </div>
              
              <!-- GitHub -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-github" style="font-size: 3rem; color: #ffffff; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">GitHub</h3>
              </div>
              
              <!-- VS Code -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <svg style="width: 3rem; height: 3rem; margin-bottom: 0.5rem;" viewBox="0 0 24 24" fill="#007acc">
                      <path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.276.057L.327 7.261A1 1 0 0 0 .326 8.74L3.899 12 .326 15.26a1 1 0 0 0 .001 1.479L1.65 17.94a.999.999 0 0 0 1.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352zm-5.146 14.861L10.826 12l7.178-5.448v10.896z"/>
                  </svg>
                  <h3 style="font-size: 1rem; color: #ffffff;">VS Code</h3>
              </div>
              
              <!-- Notion -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <svg style="width: 3rem; height: 3rem; margin-bottom: 0.5rem;" viewBox="0 0 24 24" fill="#ffffff">
                      <path d="M4.459 4.208c.746.606 1.026.56 2.428.466l13.215-.793c.28 0 .047-.28-.046-.326L17.86 1.968c-.42-.326-.981-.7-2.055-.607L3.01 2.295c-.466.046-.56.28-.374.466zm.793 3.08v13.904c0 .747.373 1.027 1.214.98l14.523-.84c.841-.046.935-.56.935-1.167V6.354c0-.606-.233-.933-.748-.887l-15.177.887c-.56.047-.747.327-.747.933zm14.337.745c.093.42 0 .84-.42.888l-.7.14v10.264c-.608.327-1.168.514-1.635.514-.748 0-.935-.234-1.495-.933l-4.577-7.186v6.952L12.21 19s0 .84-1.168.84l-3.222.186c-.093-.186 0-.653.327-.746l.84-.233V9.854L7.822 9.76c-.094-.42.14-1.026.793-1.073l3.456-.233 4.764 7.279v-6.44l-1.215-.139c-.093-.514.28-.887.747-.933zM1.936 1.035l13.31-.98c1.634-.14 2.055-.047 3.082.7l4.249 2.986c.7.513.934.653.934 1.213v16.378c0 1.026-.373 1.634-1.68 1.726l-15.458.934c-.98.047-1.448-.093-1.962-.747l-3.129-4.06c-.56-.747-.793-1.306-.793-1.96V2.667c0-.839.374-1.54 1.447-1.632z"/>
                  </svg>
                  <h3 style="font-size: 1rem; color: #ffffff;">Notion</h3>
              </div>
              
              <!-- Trello -->
              <div style="padding: 1.5rem; background: #111; border-radius: 0.5rem; transition: transform 0.3s; width: 120px; display: flex; flex-direction: column; align-items: center;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <i class="fab fa-trello" style="font-size: 3rem; color: #0079bf; margin-bottom: 0.5rem;"></i>
                  <h3 style="font-size: 1rem; color: #ffffff;">Trello</h3>
              </div>
          </div>
      </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="min-h-screen flex items-center justify-center" style="padding: 4rem 2rem; background: #0a0a0a;">
      <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
          <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 3rem; color: #3b82f6;">
              My Projects
          </h2>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; max-width: 1200px; margin: 0 auto;">
              <div style="background: #111; border-radius: 0.5rem; padding: 2rem; border: 1px solid #333; text-align: left; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <div style="width: 100%; height: 25Enrollment Management System
HTML, CSS, JS, PHP, MySQL

Enrollment Management System is a web-based application that streamlines the enrollment process for educational institutions. It allows students to easily register for courses, manage their schedules, and track their academic progress online.0px; border-radius: 0.5rem; overflow: hidden; margin-bottom: 1.5rem; margin-top: 0.5rem;">
                      <img src="{{ asset('images/heybleepi.png') }}" alt="HeyBleepi" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
                  <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 1rem;">HEYBLEEPI</h3>
                  <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1rem;">
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">HTML</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">CSS</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">JS</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">PHP</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">MySQL</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">OAuth</span>

                  </div>
                  <p style="color: #9ca3af; margin-bottom: 1rem; font-size: 0.875rem; line-height: 1.5;">
                    HeyBleepi is a social media-style platform that lets users
                    interact through dynamic posts, real-time comments, and 
                    social engagement tools. With a modern and intuitive interface,
                    it makes connecting online simple and fun.</p>
                  <a href="#" style="color: #3b82f6; text-decoration: none;">View Project →</a>
              </div>
              <div style="background: #111; border-radius: 0.5rem; padding: 2rem; border: 1px solid #333; text-align: left; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <div style="width: 100%; height: 270px; border-radius: 0.5rem; overflow: hidden; margin-bottom: 1.5rem; margin-top: 0.5rem;">
                      <img src="{{ asset('images/ibudget.png') }}" alt="iBudget" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
                  <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 1rem;">iBudget</h3>
                  <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1rem;">
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">Angular</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">TypeScript</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">Node.js</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">MySQL</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">Java (Spring Boot)</span>
                  </div>
                  <p style="color: #9ca3af; margin-bottom: 1rem; font-size: 0.875rem; line-height: 1.5;">iBudget is a modern web application designed to help people, especially students, manage their finances with ease. Built with cutting-edge technologies, it simplifies money management and reduces the time and effort typically associated with budgeting.</p>
                  <a href="#" style="color: #3b82f6; text-decoration: none;">View Github →</a>
              </div>
              <div style="background: #111; border-radius: 0.5rem; padding: 2rem; border: 1px solid #333; text-align: left; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <div style="width: 100%; height: 270px; border-radius: 0.5rem; overflow: hidden; margin-bottom: 1.5rem; margin-top: 0.5rem;">
                      <img src="{{ asset('images/ems.png') }}" alt="Enrollment Management System" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
                  <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 1rem;">Enrollment Management System</h3>
                  <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1rem;">
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">HTML</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">CSS</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">JS</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">PHP</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">MySQL</span>
                  </div>
                  <p style="color: #9ca3af; margin-bottom: 1rem; font-size: 0.875rem; line-height: 1.5;">Enrollment Management System is a web-based application that streamlines the enrollment process for educational institutions. It allows students to easily register for courses, manage their schedules, and track their academic progress online.</p>
                  <a href="#" style="color: #3b82f6; text-decoration: none;">View Project →</a>
              </div>
              <div style="background: #111; border-radius: 0.5rem; padding: 2rem; border: 1px solid #333; text-align: left; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                  <div style="width: 100%; height: 270px; border-radius: 0.5rem; overflow: hidden; margin-bottom: 1.5rem; margin-top: 0.5rem;">
                      <img src="{{ asset('images/servetrack.png') }}" alt="ServeTrack" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
                  <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 1rem;">ServeTrack - Volunteer Management System <span style="color: #6df199; font-size: 0.875rem;">(Ongoing)</span></h3>
                  <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1rem;">
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">Angular</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">TypeScript</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">Node.js</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">MySQL</span>
                      <span style="background: #1e293b; color: #60a5fa; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.75rem;">Laravel</span>
                  </div>
                  <p style="color: #9ca3af; margin-bottom: 1rem; font-size: 0.875rem; line-height: 1.5;">ServeTrack is an innovative web application designed to streamline the management of community service activities. It enables users to efficiently track, organize, and report their community service hours, making it easier to contribute to meaningful causes.</p>
                  <a href="#" style="color: #3b82f6; text-decoration: none;">View Project →</a>
              </div>
          </div>
      </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="min-h-screen flex items-center justify-center" style="padding: 4rem 2rem;">
      <div style="max-width: 1200px; margin: 0 auto; width: 100%;">
          <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 3rem; color: #3b82f6; text-align: center;">
              Get In Touch
          </h2>
          <div style="display: flex; gap: 3rem; align-items: flex-start; flex-wrap: wrap;">
              <!-- Left Side: Contact Info -->
              <div style="flex: 1; min-width: 300px;">
                  <h3 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 1rem;">Let's Connect</h3>
                  <p style="color: #9ca3af; margin-bottom: 2rem; line-height: 1.6;">
                    I'm always open to discussing new projects, creative ideas,
                    or opportunities to be part of your vision.
                  </p>
                  
                  <!-- Email -->
                  <div style="margin-bottom: 2rem;">
                      <div style="display: flex; align-items: center; gap: 1rem;">
                          <div style="width: 50px; height: 50px; background: #1e293b; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                              <i class="fas fa-envelope" style="color: #60a5fa; font-size: 1.25rem;"></i>
                          </div>
                          <div>
                              <h4 style="color: #ffffff; font-weight: 600; margin-bottom: 0.25rem;">Email</h4>
                              <a href="mailto:ynion.mabeamae@gmail.com" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#60a5fa'" onmouseout="this.style.color='#9ca3af'">
                                ynion.mabeamae@gmail.com
                              </a>
                          </div>
                      </div>
                  </div>
                  
                  <!-- Phone -->
                  <div style="margin-bottom: 2rem;">
                      <div style="display: flex; align-items: center; gap: 1rem;">
                          <div style="width: 50px; height: 50px; background: #1e293b; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                              <i class="fas fa-phone" style="color: #60a5fa; font-size: 1.25rem;"></i>
                          </div>
                          <div>
                              <h4 style="color: #ffffff; font-weight: 600; margin-bottom: 0.25rem;">Phone</h4>
                              <a href="tel:+639567409684" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#60a5fa'" onmouseout="this.style.color='#9ca3af'">+63 956-740-9684</a>
                          </div>
                      </div>
                  </div>
                  
                  <!-- Location -->
                  <div style="margin-bottom: 2rem;">
                      <div style="display: flex; align-items: center; gap: 1rem;">
                          <div style="width: 50px; height: 50px; background: #1e293b; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center;">
                              <i class="fas fa-map-marker-alt" style="color: #60a5fa; font-size: 1.25rem;"></i>
                          </div>
                          <div>
                              <h4 style="color: #ffffff; font-weight: 600; margin-bottom: 0.25rem;">Location</h4>
                              <p style="color: #9ca3af; margin: 0;">Taguig City, Metro Manila</p>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Right Side: Contact Form -->
              <div style="flex: 1; min-width: 300px;">
                  <form style="background: #111; padding: 2rem; border-radius: 0.5rem; border: 1px solid #333;">
                      <div style="margin-bottom: 1.5rem;">
                          <label style="display: block; margin-bottom: 0.5rem; color: #d1d5db;">Name</label>
                          <input type="text" name="name" required 
                                  style="width: 100%; padding: 0.75rem; background: #000; border: 1px solid #333; border-radius: 0.375rem; color: #fff;">
                      </div>
                      <div style="margin-bottom: 1.5rem;">
                          <label style="display: block; margin-bottom: 0.5rem; color: #d1d5db;">Email</label>
                          <input type="email" name="email" required 
                                  style="width: 100%; padding: 0.75rem; background: #000; border: 1px solid #333; border-radius: 0.375rem; color: #fff;">
                      </div>
                      <div style="margin-bottom: 1.5rem;">
                          <label style="display: block; margin-bottom: 0.5rem; color: #d1d5db;">Message</label>
                          <textarea name="message" rows="5" required 
                                    style="width: 100%; padding: 0.75rem; background: #000; border: 1px solid #333; border-radius: 0.375rem; color: #fff;"></textarea>
                      </div>
                      <button type="submit" 
                              style="width: 100%; padding: 0.75rem; background: #3b82f6; color: white; border: none; border-radius: 0.375rem; font-weight: 600; cursor: pointer;">
                          Send Message
                      </button>
                  </form>
              </div>
          </div>
      </div>
  </section>

  <!-- Footer -->
  <footer style="padding: 2rem; text-align: center; border-top: 1px solid #333; color: #ffffff;">
      <p>&copy; 2026 Ma. Bea Mae Ynion. All rights reserved.</p>
  </footer>

</body>
</html>