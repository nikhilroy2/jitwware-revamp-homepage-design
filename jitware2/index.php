<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jitware | Webdesign, SEO & AI-oplossingen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.03);
        }
        
        .service-card:hover .service-icon {
            transform: rotate(5deg) scale(1.1);
        }
        
        .service-icon {
            transition: all 0.3s ease;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .result-item::before {
            content: "✓";
            color: #10b981;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        .logo-hover {
            transition: all 0.3s ease;
            filter: grayscale(100%);
            opacity: 0.7;
        }
        .logo-hover:hover {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.05);
        }
        .testimonial-card {
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        }
        .testimonial-card:hover {
            box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.1);
            transform: translateY(-5px);
        }


    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20 items-center">
      <!-- logo -->
      <div class="flex-shrink-0 flex items-center">
        <span class="text-indigo-600 font-bold text-2xl">Jitware</span>
      </div>

      <!-- desktop menu -->
      <div class="hidden md:block">
        <div class="ml-10 flex items-center space-x-8">
          <a href="#diensten" class="text-gray-700 hover:text-indigo-600 px-3 py-2 font-medium">Diensten</a>
          <a href="#cases" class="text-gray-700 hover:text-indigo-600 px-3 py-2 font-medium">Cases</a>
          <a href="/blog" class="text-gray-700 hover:text-indigo-600 px-3 py-2 font-medium">Blog</a>
          <a href="#over-ons" class="text-gray-700 hover:text-indigo-600 px-3 py-2 font-medium">Over ons</a>
          <a href="#contact" class="bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition">Contact</a>
        </div>
      </div>

      <!-- mobile toggle button -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- mobile menu (hidden by default) -->
  <div id="mobile-menu" class="md:hidden hidden flex-col space-y-2 px-4 pb-6 bg-white shadow-inner">
    <a href="#diensten" class="block text-gray-700 hover:text-indigo-600">Diensten</a>
    <a href="#cases" class="block text-gray-700 hover:text-indigo-600">Cases</a>
    <a href="/blog" class="block text-gray-700 hover:text-indigo-600">Blog</a>
    <a href="#over-ons" class="block text-gray-700 hover:text-indigo-600">Over ons</a>
    <a href="#contact" class="block bg-indigo-600 text-white px-4 py-2 rounded-full text-center hover:bg-indigo-700">Contact</a>
  </div>
</nav>



    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Meer klanten dankzij strategische zichtbaarheid</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">Wij combineren webdesign, SEO en AI om jouw bedrijf online te laten groeien</p>
                    <div class="flex flex-col sm:flex-row gap-4 py-2">
                        <a href="#contact" class="bg-white text-indigo-600 px-8 py-4 rounded-full font-bold text-center hover:bg-gray-100 transition hover-scale">Vraag gratis analyse aan</a>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 py-2">
                        <a href="#cases" class="bg-transparent border-2 border-white px-8 py-4 rounded-full font-bold text-center hover:bg-white hover:bg-opacity-10 transition hover-scale">Bekijk succescases</a>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 py-2">
                        <a href="/meer-klanten" class="bg-transparent border-2 border-white px-8 py-4 rounded-full font-bold text-center hover:bg-white hover:bg-opacity-10 transition hover-scale">Ik wil meer klanten</a>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 py-2">
                        <a href="/ai/ai-oplossingen" class="bg-transparent border-2 border-white px-8 py-4 rounded-full font-bold text-center hover:bg-white hover:bg-opacity-10 transition hover-scale">AI oplossingen</a>
                    </div>


                </div>
                <div class="md:w-1/2 md:pl-12">
                    <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                        <div class="video-container">
                            <img src="bestanden/performance-dashboard-2.png" alt="Performance dashboard" class="w-full h-auto">
                        </div>
                        <div class="p-6 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="font-bold text-gray-800">Dashboard klant </h3>
                                    <p class="text-sm text-gray-600">Resultaten laatste maanden</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-green-600 font-bold text-xl">+247%</p>
                                    <p class="text-xs text-gray-600">organisch verkeer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Niches Section -->
     <!--
    <section class="py-8 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center items-center gap-4">
                <span class="text-gray-600">Ontdek oplossingen voor:</span>
                <div class="relative group">
                    <button class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-indigo-600 transition-colors">
                        <span>Schoonheidssalon</span>
                        <i class="fas fa-chevron-down text-sm transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2">Schoonheidssalon</h3>
                            <ul class="space-y-2">
                                <li><a href="/schoonheidssalon/seo" class="text-gray-600 hover:text-indigo-600 block">SEO voor schoonheidssalons</a></li>
                                <li><a href="/schoonheidssalon/website" class="text-gray-600 hover:text-indigo-600 block">Website voor schoonheidssalons</a></li>
                                <li><a href="/schoonheidssalon/online-booking" class="text-gray-600 hover:text-indigo-600 block">Online afspraken systeem</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <button class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-indigo-600 transition-colors">
                        <span>Kapper</span>
                        <i class="fas fa-chevron-down text-sm transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2">Kapper</h3>
                            <ul class="space-y-2">
                                <li><a href="/kapper/seo" class="text-gray-600 hover:text-indigo-600 block">SEO voor kappers</a></li>
                                <li><a href="/kapper/website" class="text-gray-600 hover:text-indigo-600 block">Website voor kappers</a></li>
                                <li><a href="/kapper/online-booking" class="text-gray-600 hover:text-indigo-600 block">Online afspraken systeem</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <button class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-indigo-600 transition-colors">
                        <span>Schoonmaakbedrijf</span>
                        <i class="fas fa-chevron-down text-sm transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2">Schoonmaakbedrijf</h3>
                            <ul class="space-y-2">
                                <li><a href="/schoonmaak/seo" class="text-gray-600 hover:text-indigo-600 block">SEO voor schoonmaakbedrijven</a></li>
                                <li><a href="/schoonmaak/website" class="text-gray-600 hover:text-indigo-600 block">Website voor schoonmaakbedrijven</a></li>
                                <li><a href="/schoonmaak/offerte-systeem" class="text-gray-600 hover:text-indigo-600 block">Online offerte systeem</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="/bedrijven" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center gap-1">
                    Bekijk alle bedrijven
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>
    </section>
    -->

    <!-- Social Proof -->

 <!-- Social Proof Section -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Rating Badge -->
            <div class="text-center mb-16 animate-fade-in" style="animation-delay: 0.1s;">
                <div class="inline-flex items-center bg-indigo-100 text-indigo-700 px-6 py-3 rounded-full shadow-sm">
                    <i class="fas fa-star mr-2 text-yellow-400"></i>
                    <span class="font-bold">Gemiddeld 4.9/5</span>
                    <span class="mx-2 text-indigo-300">|</span>
                    <span>45+ tevreden klanten</span>
                    <i class="fas fa-heart ml-2 text-red-400"></i>
                </div>
            </div>

            <!-- Trusted By Section -->
            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12 px-4">
                    <div class="logo-hover">
                        <a href="https://www.dedoncker.be"
                        <span class="text-gray-700 text-lg font-medium hover:text-indigo-600 transition-colors">De Doncker</span> </a>
                    </div>
                    <div class="logo-hover">
                         <a href="https://www.ds-cleaning.be"
                        <span class="text-gray-700 text-lg font-medium hover:text-indigo-600 transition-colors">DS Cleaning</span></a>
                    </div>
                    <div class="logo-hover">
                         <a href="https://www.vissershofmere.be"
                        <span class="text-gray-700 text-lg font-medium hover:text-indigo-600 transition-colors">Vissershof</span></a>
                    </div>
                    <div class="logo-hover">
                         <a href="https://www.otentik-wellness.be"
                        <span class="text-gray-700 text-lg font-medium hover:text-indigo-600 transition-colors">Otentik Wellness</span></a>
                    </div>
                    <div class="logo-hover">
                         <a href="https://www.bvconell.be/"
                        <span class="text-gray-700 text-lg font-medium hover:text-indigo-600 transition-colors">Conell BV</span></a>
                    </div>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="mt-20 max-w-4xl mx-auto animate-fade-in" style="animation-delay: 0.3s;">
                <div class="testimonial-card bg-white p-8 rounded-xl border border-gray-100 relative">
                    <div class="absolute -top-4 -left-4 w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-quote-left text-indigo-400"></i>
                    </div>
                    <div class="flex flex-col md:flex-row items-start gap-6">
                        <img class="photo w-12 h-12 rounded-full object-cover" src="bestanden/klanten/reviews/ann.png" 
                             alt="Ann L. - Otentik Wellness" 
                             class="w-16 h-16 rounded-full object-cover ring-4 ring-indigo-50 shadow-sm">
                        <div class="flex-1">
                            <div class="flex mb-3">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                            <p class="text-gray-600 mb-4 italic leading-relaxed">
                                "Jens is een zeer geduldige en hulpvaardige kerel om mee samen te werken. Niets is teveel voor hem. 
                                Altijd bereikbaar en werkt snel! Topkerel! Bedankt Jens!"
                                <span class="block mt-2 text-indigo-400">💙 Fan van Jens 💙</span>
                            </p>
                            <div class="flex items-center">
                                <div class="h-px bg-gray-200 flex-1 mr-4"></div>
                                <p class="font-bold text-gray-700">Ann L.</p>
                                <span class="mx-2 text-gray-400">|</span>
                                <p class="text-gray-500">Otentik Wellness</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial Navigation Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <button class="w-3 h-3 rounded-full bg-indigo-300"></button>
                    <button class="w-3 h-3 rounded-full bg-indigo-100"></button>
                    <button class="w-3 h-3 rounded-full bg-indigo-100"></button>
                </div>
            </div>
        </div>
    </section>






    <!-- Expertises -->
    <section id="diensten" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Onze expertises</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Alles wat je nodig hebt voor digitale groei, onder één dak</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-search service-icon text-indigo-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">SEO & webdesign</h3>
                        <p class="text-gray-600 mb-6">We zorgen dat je site gevonden wordt én converteert. Van technische optimalisatie tot gebruiksvriendelijke interfaces.</p>
                        <a href="#" class="text-indigo-600 font-medium inline-flex items-center hover:text-indigo-800">
                            Meer over web & SEO
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="bg-gray-50 px-8 py-4">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Technische SEO-audit</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Conversie-optimalisatie</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Responsief webdesign</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-video service-icon text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Video & grafisch ontwerp</h3>
                        <p class="text-gray-600 mb-6">Trek aandacht en bouw merkherkenning op. Van professionele bedrijfsvideo's tot visuele identiteit.</p>
                        <a href="#" class="text-purple-600 font-medium inline-flex items-center hover:text-purple-800">
                            Bekijk video & designwerk
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="bg-gray-50 px-8 py-4">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Bedrijfsvideo's</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Logo & huisstijl</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Social media content</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-robot service-icon text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">AI-oplossingen</h3>
                        <p class="text-gray-600 mb-6">Automatiseer, schaal en innoveer met onze AI-integraties. Bespaar tijd en verhoog je productiviteit.</p>
                        <a href="https://www.jitware.be/tools/" class="text-blue-600 font-medium inline-flex items-center hover:text-blue-800">
                            Ontdek AI-tools
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="bg-gray-50 px-8 py-4">
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>AI-analyse</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Content generatie</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span>Generative Engine Optimization (GEO) & SGE</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results -->
    <section class="py-20 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Resultaten waar het écht om draait</h2>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">We meten ons succes aan de hand van jouw groei</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-scale">
                    <div class="text-5xl font-bold mb-4">+75%</div>
                    <h3 class="text-xl font-semibold mb-3">Meer bezoekers</h3>
                    <p class="opacity-90">Gemiddelde stijging in organisch verkeer binnen 6 maanden voor onze SEO-klanten</p>
                </div>
                
                <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-scale">
                    <div class="text-5xl font-bold mb-4">Positie 1-3</div>
                    <h3 class="text-xl font-semibold mb-3">In Google</h3>
                    <p class="opacity-90">Van pagina 4 naar top 3 voor belangrijke zoektermen dankzij onze strategie</p>
                </div>
                
                <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-scale">
                    <div class="text-5xl font-bold mb-4">5% - 20%</div>
                    <h3 class="text-xl font-semibold mb-3">Meer conversies</h3>
                    <p class="opacity-90">Dankzij betere landingspagina's en gebruikerservaringen</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Cases -->
    <section id="cases" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Zij groeiden dankzij onze aanpak – jij straks ook?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Echte resultaten voor echte bedrijven</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">

                            <!-- Case 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition hover-scale">
                    <img src="cases/dakwerken-vandendriessche/homepagina-dakwerken-vandendriessche.PNG" alt="Case study" class="w-full h-34 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">SEO + Website</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dakwerken Van den Driessche</h3>
                        <p class="text-gray-600 mb-4">Website + Lokale SEO strategie </p>
                        <p class="text-gray-700 mb-4"><strong>Van pagina 10 naar positie 2 in Google.</strong> Een spectaculaire stijging in vindbaarheid met een verdrievoudiging van aanvragen voor "dakwerken Aalst"</p>
                        <a href="https://www.dakwerken-vandendriessche.be" target="_blank"  class="text-purple-600 font-medium inline-flex items-center hover:text-purple-800">
                            Bekijk website
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="/seo/positie-91-naar-positie-2" target="_blank"  class="text-purple-600 font-medium inline-flex items-center hover:text-purple-800">
                            Bekijk case
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
    
                                
                <!-- Case 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition hover-scale">
                    <img src="bestanden/klanten/dedoncker/dedoncker-website-homepagina.PNG" alt="Case study" class="w-full h-34 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">SEO + Redesign</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">De Doncker</h3>
                        <p class="text-gray-600 mb-4">Van een verouderde trage website </p>
                        <p class="text-gray-700 mb-4">naar een moderne geoptimaliseerde website</p>
                        <a href="https://www.dedoncker.be" target="_blank"  class="text-purple-600 font-medium inline-flex items-center hover:text-purple-800">
                            Bekijk website
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="/cases/website-seo-de-doncker" target="_blank"  class="text-purple-600 font-medium inline-flex items-center hover:text-purple-800">
                            Bekijk case
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Case 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition hover-scale">
                    <img src="bestanden/klanten/otentik/otentik-website-homepagina.PNG" alt="Case study" class="w-full h-34 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">SEO + Boekingsmodule</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Otentik Wellness</h3>
                        <p class="text-gray-600 mb-4">+230% bezoekers in 3 maanden</p>
                        <p class="text-gray-700 mb-4">SEO + herontwerp website met online reserveringssysteem</p>
                        <a href="https://www.otentik-wellness.be" target="_blank" class="text-indigo-600 font-medium inline-flex items-center hover:text-indigo-800">
                            Bekijk website
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
   
                <!-- Case 2 -->
                 <!--
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition hover-scale">
                    <img src="bestanden/klanten/slotenmaker/slotenmaker-website-homepagina.PNG" alt="Case study" class="w-full h-34 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">SEO + AI</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Slotenmaker De Rass</h3>
                        <p class="text-gray-600 mb-4">Van 7 naar 18 aanvragen per maand</p>
                        <p class="text-gray-700 mb-4">Lokale SEO + regionale SEO + AI strategie/ optimalisaties</p>
                        <a href="https://www.slotenmakerderass.be" target="_blank"  class="text-purple-600 font-medium inline-flex items-center hover:text-purple-800">
                            Bekijk website
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
    -->

            </div>
            
            <div class="text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 hover-scale">
                    Bekijk alle succescases
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>




    <!-- Blog -->
    <section id="blog" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Laatste inzichten & tips</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Blijf op de hoogte van digitale trends en strategieën</p>
            </div>
            
            <div id="blog-posts-container" class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Blog posts will be loaded here via JavaScript -->
            </div>

            <div class="text-center">
                <a href="/blog" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 hover-scale">
                    Bekijk alle blogs
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>





<!-- AI Section met Laatste Prompt -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-2 md:gap-12 items-start">
      
      <!-- Linkerkant: AI uitleg -->
      <div class="mb-12 md:mb-0">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Slimmer groeien met AI</h2>
        <p class="text-xl text-gray-600 mb-8">Onze geavanceerde AI-oplossingen helpen je tijd te besparen, processen te automatiseren en betere resultaten te behalen.</p>

        <ul class="space-y-4 mb-8">
          <li class="flex items-start">
            <div class="flex-shrink-0 bg-blue-100 rounded-full p-2 mr-4">
              <i class="fas fa-comments text-blue-600"></i>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 mb-1">AI data analyses</h3>
              <p class="text-gray-600">Ondersteuning die leert van jouw data</p>
            </div>
          </li>
          <li class="flex items-start">
            <div class="flex-shrink-0 bg-blue-100 rounded-full p-2 mr-4">
              <i class="fas fa-pen-fancy text-blue-600"></i>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 mb-1">AI-copy voor landingspagina's</h3>
              <p class="text-gray-600">Geoptimaliseerde teksten die converteren</p>
            </div>
          </li>
          <li class="flex items-start">
            <div class="flex-shrink-0 bg-blue-100 rounded-full p-2 mr-4">
              <i class="fas fa-film text-blue-600"></i>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 mb-1">AI optimalisaties</h3>
              <p class="text-gray-600">Kijk waar de pijnpunten liggen en optimaliseer deze</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Rechterkant: Laatste Prompt -->
<div class="bg-white border border-blue-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
  <div class="p-4 bg-gradient-to-r from-blue-100 to-blue-200 border-b border-blue-300 flex justify-between items-center">
    <p id="prompt-titel" class="text-base font-medium text-blue-800">...</p>
    <button onclick="copyPrompt()" class="text-blue-700 hover:text-white transition-colors bg-blue-200 px-3 py-2 rounded-lg border border-blue-300 hover:bg-blue-500 hover:border-blue-600">
      <i class="far fa-copy"></i> <span class="text-xs ml-1">COPY</span>
    </button>
  </div>
  <pre id="prompt-inhoud" class="p-4 text-blue-800 text-left text-sm max-h-80 overflow-auto font-mono bg-blue-50 hover:bg-blue-100 transition cursor-pointer" onclick="copyPrompt()">...</pre>
  <div class="p-4 text-center border-t border-blue-200">
    <a href="ai/prompts/prompt-library" class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-medium inline-flex items-center border border-blue-300 hover:bg-blue-500 hover:text-white hover:border-blue-600">
      Bekijk prompt library
      <i class="fas fa-arrow-right ml-2 text-sm"></i>
    </a>
    <p class="text-blue-600 text-xs mt-2">500+ prompts beschikbaar</p>
  </div>
</div>


    </div>
  </div>
</section>





    
    <!-- Tools -->
    <section id="tools" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">(gratis) Tools</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Verhoog je efficiëntie met onze gratis tools</p>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Voor tools op maat kan u ons steeds vrijblijvend contacteren</p>
            </div>
            
            <div id="tools-posts-container" class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Blog posts will be loaded here via JavaScript -->
            </div>

            <div class="text-center">
                <a href="/tools" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 hover-scale">
                    Bekijk alle tools
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Finances -->
    <section id="finances" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Financiële inzichten</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Blijf op de hoogte van de laatste financiële trends en analyses</p>
            </div>
            
            <div id="finances-posts-container" class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Financial articles will be loaded here via JavaScript -->
            </div>

            <div class="text-center">
                <a href="/financien" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 hover-scale">
                    Bekijk alle financiële artikelen
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>


<section id="kennis" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kennis en inzichten</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Verdiep je in samenvattingen, verkooptechnieken en slim bedrijfsbeheer</p>
    </div>

    <div class="grid md:grid-cols-3 gap-10 mb-12">
      <div id="kolom-samenvattingen"></div>
      <div id="kolom-verkoop"></div>
      <div id="kolom-bedrijfsvoeren"></div>
    </div>
  </div>
</section>






    <!-- About Us -->
    <section id="over-ons" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">


                <div class="md:w-1/3 mb-12 md:mb-0 md:pr-12">
                    <div class="relative">
                        <img src="bestanden/jitware/jens-eigenaar-jitware.png" alt="Jitware team" class="rounded-lg shadow-xl">
                        <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-user-tie text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-800">Jens Van den Eeckhout</p>
                                    <p class="text-sm text-gray-600">Oprichter & SEO expert</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Wie we zijn & waarom we dit doen</h2>
                    <p class="text-gray-600 mb-6">Bij Jitware geloven we dat elk bedrijf verdient om gevonden te worden. Opgericht in 2021 en inmiddels uitgegroeid tot een team van freelanders, combineren we creativiteit met data-gedreven strategieën om meetbare resultaten te leveren.</p>
                    <p class="text-gray-600 mb-8">Onze aanpak is gebaseerd op transparantie, samenwerking en een diep begrip van jouw unieke uitdagingen. We zijn niet alleen je digitale partner, maar een verlengstuk van je team dat meedenkt in kansen en oplossingen.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="bg-indigo-600 text-white px-8 py-4 rounded-full font-bold text-center hover:bg-indigo-700 transition hover-scale">Maak kennis met ons team</a>
                        <a href="/contact" class="bg-white border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full font-bold text-center hover:bg-gray-100 transition hover-scale">
                            <i class="fas fa-play-circle mr-2"></i>
                            Contacteer ons
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Klaar om meer bezoekers te krijgen?</h2>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Laten we samenwerken aan jouw digitale groei</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                    <div class="md:flex">

                        <div class="md:w-1/2 p-10 text-gray-900">
                            <form action="https://api.web3forms.com/submit" method="POST">

                        <input type="hidden" name="access_key" value="988965d3-e66c-4e18-8668-aadc7e44652e" />
                        <input type="hidden" name="subject" value="Jitware homepagina contact" />
                        <input type="hidden" name="from_name" value="Jitware" />
                        <input type="hidden" name="redirect" value="https://jitware.be/bedankt.html" /> 
                                <div class="mb-6">
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Naam *</label>
                                    <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600" required>
                                </div>
                                
                                <div class="mb-6">
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email *</label>
                                    <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600" required>
                                </div>
                                
                                <div class="mb-6">
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Telefoon</label>
                                    <input type="tel" name="phone" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                                </div>
                                
                                <div class="mb-6">
                                    <label for="message" class="block text-gray-700 font-medium mb-2">Hoe kunnen we je helpen? *</label>
                                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600" required></textarea>
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <button type="submit" class="bg-indigo-600 text-white px-8 py-4 rounded-full font-bold hover:bg-indigo-700 transition hover-scale">
                                        Vraag een gratis strategiegesprek aan
                                    </button>
                                    <button type="submit" class="bg-white border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition hover-scale">
                                        Offerte aanvragen
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="md:w-1/2 bg-indigo-700 p-10">
                            <h3 class="text-2xl font-bold mb-6">Neem contact op</h3>
                            
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-indigo-600 rounded-full p-3 mr-4">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Adres</h4>
                                        <p class="opacity-90">Prinsdaal 63, 9420 Erpe-Mere</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-indigo-600 rounded-full p-3 mr-4">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Email</h4>
                                        <p class="opacity-90">info@jitware.be</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-indigo-600 rounded-full p-3 mr-4">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Telefoon</h4>
                                        <p class="opacity-90">04 72 85 49 46</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-10">
                                <h4 class="font-bold mb-4">Volg ons</h4>
                                <div class="flex space-x-4">
                                    <a href="https://www.linkedin.com/in/jensvandeneeckhout/" class="bg-indigo-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-500 transition">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="www.instagram.com/jitware" class="bg-indigo-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-500 transition">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com/@Jitware_inc" class="bg-indigo-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-500 transition">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <!--
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">DigiGroei</h3>
                    <p class="text-gray-400">Jouw partner in digitale groei. Webdesign, SEO, video en AI-oplossingen onder één dak.</p>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Navigatie</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#diensten" class="text-gray-400 hover:text-white transition">Diensten</a></li>
                        <li><a href="#cases" class="text-gray-400 hover:text-white transition">Cases</a></li>
                        <li><a href="#blog" class="text-gray-400 hover:text-white transition">Blog</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Diensten</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">SEO & webdesign</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Video & grafisch ontwerp</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">AI-oplossingen</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Conversie-optimalisatie</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Online strategie</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Contact</h4>
                    <address class="not-italic text-gray-400">
                        <p class="mb-2">Digitalestraat 42</p>
                        <p class="mb-2">2000 Antwerpen</p>
                        <p class="mb-2">België</p>
                        <p class="mb-4">info@digigroei.be</p>
                        <p>BTW: BE0123.456.789</p>
                    </address>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-800">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    
                    <div class="text-gray-400 text-sm">
                        <div class="flex flex-wrap gap-4">
                            <a href="#" class="hover:text-white transition">Privacybeleid</a>
                            <a href="#" class="hover:text-white transition">Cookiebeleid</a>
                            <a href="#" class="hover:text-white transition">Algemene voorwaarden</a>
                            <span>© 2023 DigiGroei. Alle rechten voorbehouden.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
-->
    <script>

          // mobile menu toggle
  document
    .getElementById('mobile-menu-button')
    .addEventListener('click', function () {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });


        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Simple testimonial slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const testimonials = [
                {
                    quote: "Jens is een zeer geduldige en hulpvaardige kerel om mee samen te werken. Niets is teveel voor hem. Altijd bereikbaar en werkt snel! Topkerel! Bedankt Jens!",
                    author: "Ann L.",
                    company: "Otentik Wellness",
                    rating: 5,
                    emoji: "💙 Fan van Jens 💙",
                    image: "bestanden/klanten/reviews/ann.png"

                },
                {
                    quote: "Uitzonderlijke service en aandacht voor detail. Jens heeft ons bedrijf geholpen met het aanleveren van een nieuwe website en is op zoek gegaan naar potentieel nieuwe klanten voor ons bedrijf en leverde alles op tijd en binnen budget.",
                    author: "Sam V",
                    company: "Conell BV",
                    rating: 5,
                    emoji: "🚀 Aanrader!",
                    image: "bestanden/klanten/reviews/sam.jpg"
                },
                {
                    quote: "Professionele aanpak en altijd bereid om zich extra in te zetten. Onze website is nu beter dan ooit dankzij Jens zijn expertise.",
                    author: "Femke VDD",
                    company: "Dakwerken Van den Driessche",
                    rating: 5,
                    emoji: "✨ Geweldig werk!",
                    image: "bestanden/klanten/reviews/femke.jpg"
                }
            ];
            
            let currentTestimonial = 0;
            const dots = document.querySelectorAll('.flex.justify-center.mt-8 button');
            
            function updateTestimonial(index) {
                const testimonial = testimonials[index];
                const card = document.querySelector('.testimonial-card');
                
                // Fade out
                card.style.opacity = 0;
                
                setTimeout(() => {
                    // Update content
                    const stars = card.querySelectorAll('.fa-star');
                    stars.forEach((star, i) => {
                        if (i < testimonial.rating) {
                            star.classList.add('text-yellow-400');
                        } else {
                            star.classList.remove('text-yellow-400');
                            star.classList.add('text-gray-300');
                        }
                    });
                    
                    card.querySelector('p.text-gray-600').innerHTML = 
                        `"${testimonial.quote}" <span class="block mt-2 text-indigo-400">${testimonial.emoji}</span>`;
                    
                    card.querySelector('p.font-bold').textContent = testimonial.author;
                    card.querySelector('p.text-gray-500').textContent = testimonial.company;
                
                    card.querySelector('img.photo').src = testimonial.image;
                    
                    // Update active dot
                    dots.forEach((dot, i) => {
                        if (i === index) {
                            dot.classList.remove('bg-indigo-100');
                            dot.classList.add('bg-indigo-300');
                        } else {
                            dot.classList.remove('bg-indigo-300');
                            dot.classList.add('bg-indigo-100');
                        }
                    });
                    
                    // Fade in
                    card.style.opacity = 1;
                }, 300);
            }
            
            // Add click events to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentTestimonial = index;
                    updateTestimonial(currentTestimonial);
                });
            });
            
            // Auto-rotate testimonials
            setInterval(() => {
                currentTestimonial = (currentTestimonial + 1) % testimonials.length;
                updateTestimonial(currentTestimonial);
            }, 5000);
        });

        // Fetch and display blog posts
        fetch('blog/blogs.json')
            .then(response => response.json())
            .then(data => {
                // Sort by date (newest first) and take only the first 3
                const latestBlogs = data
                    .sort((a, b) => new Date(b.datum) - new Date(a.datum))
                    .slice(0, 3);

                const container = document.getElementById('blog-posts-container');

                latestBlogs.forEach((blog, index) => {
                    const postElement = document.createElement('article');
                    postElement.className = `blog-card bg-white rounded-xl shadow-md overflow-hidden fade-in`;
                    postElement.style.animationDelay = `${index * 0.1}s`;

                    let imageHtml = '';
                    if (blog.foto) {
                        imageHtml = `
                            <div class="h-48 overflow-hidden">
                                <img src="${blog.foto}" alt="${blog.titel}" class="w-full h-full object-cover">
                            </div>
                        `;
                    }

                    let tagsHtml = '';
                    if (blog.tags && blog.tags.length > 0) {
                        tagsHtml = `
                            <div class="flex flex-wrap gap-2 mt-3">
                                ${blog.tags.map(tag => `
                                    <span class="text-xs px-2 py-1 bg-gray-100 rounded-full text-gray-600">${tag}</span>
                                `).join('')}
                            </div>
                        `;
                    }

                    postElement.innerHTML = `
                        <a href="${blog.url}">
                            ${imageHtml}
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h2 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">${blog.titel}</h2>
                                    <span class="text-sm text-gray-500 whitespace-nowrap ml-2">${new Date(blog.datum).toLocaleDateString('nl-NL', { year: 'numeric', month: 'long', day: 'numeric' })}</span>
                                </div>
                                ${blog.beschrijving ? `<p class="text-gray-600 mt-2">${blog.beschrijving}</p>` : ''}
                                ${tagsHtml}
                                <div class="mt-4">
                                    <span class="text-blue-500 font-medium hover:text-blue-700 transition-colors inline-flex items-center">
                                        Lees meer <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    `;

                    container.appendChild(postElement);
                });
            })
            .catch(error => console.error('Error loading blog posts:', error));

            // Add fade-in animation styles
            const style = document.createElement('style');
            style.textContent = `
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                .fade-in {
                    animation: fadeIn 0.6s ease-out forwards;
                }
                .blog-card {
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                .blog-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                }
            `;
            document.head.appendChild(style);

        // Fetch and display tools
        fetch('tools/tools.json')
            .then(response => response.json())
            .then(data => {
                // Sort by date (newest first) and take only the first 3
                const latestTools = data
                    .sort((a, b) => new Date(b.datum) - new Date(a.datum))
                    .slice(0, 3);

                const container = document.getElementById('tools-posts-container');

                latestTools.forEach((tool, index) => {
                    const toolElement = document.createElement('article');
                    toolElement.className = `tool-card bg-white rounded-xl shadow-md overflow-hidden fade-in`;
                    toolElement.style.animationDelay = `${index * 0.1}s`;

                    let imageHtml = '';
                    if (tool.foto) {
                        imageHtml = `
                            <div class="h-48 overflow-hidden">
                                <img src="${tool.foto}" alt="${tool.titel}" class="w-full h-full object-cover">
                            </div>
                        `;
                    }

                    let tagsHtml = '';
                    if (tool.tags && tool.tags.length > 0) {
                        tagsHtml = `
                            <div class="flex flex-wrap gap-2 mt-3">
                                ${tool.tags.map(tag => `
                                    <span class="text-xs px-2 py-1 bg-gray-100 rounded-full text-gray-600">${tag}</span>
                                `).join('')}
                            </div>
                        `;
                    }

                    toolElement.innerHTML = `
                        <a href="${tool.url}">
                            ${imageHtml}
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h2 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">${tool.titel}</h2>
                                    <span class="text-sm text-gray-500 whitespace-nowrap ml-2">${new Date(tool.datum).toLocaleDateString('nl-NL', { year: 'numeric', month: 'long', day: 'numeric' })}</span>
                                </div>
                                ${tool.beschrijving ? `<p class="text-gray-600 mt-2">${tool.beschrijving}</p>` : ''}
                                ${tagsHtml}
                                <div class="mt-4">
                                    <span class="text-blue-500 font-medium hover:text-blue-700 transition-colors inline-flex items-center">
                                        Gebruik tool <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    `;

                    container.appendChild(toolElement);
                });
            })
            .catch(error => console.error('Error loading tools:', error));

            // Add tool card specific styles
            const toolStyles = document.createElement('style');
            toolStyles.textContent = `
                .tool-card {
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                .tool-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                }
            `;
            document.head.appendChild(toolStyles);

        // Fetch and display financial articles
        fetch('financien/financien.json')
            .then(response => response.json())
            .then(data => {
                // Sort by date (newest first) and take only the first 3
                const latestFinances = data
                    .sort((a, b) => new Date(b.datum) - new Date(a.datum))
                    .slice(0, 3);

                const container = document.getElementById('finances-posts-container');

                latestFinances.forEach((finance, index) => {
                    const financeElement = document.createElement('article');
                    financeElement.className = `finance-card bg-white rounded-xl shadow-md overflow-hidden fade-in`;
                    financeElement.style.animationDelay = `${index * 0.1}s`;

                    let imageHtml = '';
                    if (finance.foto) {
                        imageHtml = `
                            <div class="h-48 overflow-hidden">
                                <img src="${finance.foto}" alt="${finance.titel}" class="w-full h-full object-cover">
                            </div>
                        `;
                    }

                    let tagsHtml = '';
                    if (finance.tags && finance.tags.length > 0) {
                        tagsHtml = `
                            <div class="flex flex-wrap gap-2 mt-3">
                                ${finance.tags.map(tag => `
                                    <span class="text-xs px-2 py-1 bg-gray-100 rounded-full text-gray-600">${tag}</span>
                                `).join('')}
                            </div>
                        `;
                    }

                    financeElement.innerHTML = `
                        <a href="${finance.url}">
                            ${imageHtml}
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h2 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">${finance.titel}</h2>
                                    <span class="text-sm text-gray-500 whitespace-nowrap ml-2">${new Date(finance.datum).toLocaleDateString('nl-NL', { year: 'numeric', month: 'long', day: 'numeric' })}</span>
                                </div>
                                ${finance.beschrijving ? `<p class="text-gray-600 mt-2">${finance.beschrijving}</p>` : ''}
                                ${tagsHtml}
                                <div class="mt-4">
                                    <span class="text-blue-500 font-medium hover:text-blue-700 transition-colors inline-flex items-center">
                                        Lees meer <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    `;

                    container.appendChild(financeElement);
                });
            })
            .catch(error => console.error('Error loading financial articles:', error));

            // Add finance card specific styles
            const financeStyles = document.createElement('style');
            financeStyles.textContent = `
                .finance-card {
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                .finance-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                }
            `;
            document.head.appendChild(financeStyles);
            
        // < ?php include 'footer.html'; ?> -->



function copyPrompt() {
    const promptContent = document.getElementById('prompt-inhoud').textContent;
    navigator.clipboard.writeText(promptContent).then(() => {
      const copyBtn = document.querySelector('[title="Copy to clipboard"]');
      copyBtn.innerHTML = '<i class="fas fa-check text-green-400"></i> <span class="text-xs ml-1">COPIED!</span>';
      setTimeout(() => {
        copyBtn.innerHTML = '<i class="far fa-copy"></i> <span class="text-xs ml-1">COPY</span>';
      }, 2000);
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    fetch('ai/prompts/prompts.json')
      .then(res => res.json())
      .then(data => {
        if (!data || data.length === 0) return;
        const laatste = data.sort((a, b) => new Date(b.datum) - new Date(a.datum))[0];
        document.getElementById('prompt-titel').textContent = laatste.titel;
        document.getElementById('prompt-inhoud').textContent = laatste.prompt;
      })
      .catch(error => {
        console.error('Fout bij het laden van prompts:', error);
      });
  });




  




const kolommen = [
  {
    id: 'kolom-samenvattingen',
    json: 'boek-samenvattingen/boek-samenvattingen.json',
    overzichtUrl: '/boek-samenvattingen',
    overzichtLabel: 'Bekijk alle samenvattingen'
  },
  {
    id: 'kolom-verkoop',
    json: 'verkoop/verkoop.json',
    overzichtUrl: '/verkoop',
    overzichtLabel: 'Bekijk alle verkoopartikelen'
  },
  {
    id: 'kolom-bedrijfsvoeren',
    json: 'bedrijfsvoeren/bedrijfsvoeren.json',
    overzichtUrl: '/bedrijfsvoeren',
    overzichtLabel: 'Bekijk alle bedrijfsartikelen'
  }
];

kolommen.forEach(kolom => {
  fetch(kolom.json)
    .then(response => response.json())
    .then(data => {
      const artikel = data
        .sort((a, b) => new Date(b.datum) - new Date(a.datum))
        .slice(0, 1)[0];

      const container = document.getElementById(kolom.id);
      const wrapper = document.createElement('article');
      wrapper.className = 'bg-gray-50 rounded-xl shadow-md p-6 flex flex-col justify-between';

      let imageHtml = '';
      if (artikel.foto) {
        imageHtml = `
          <div class="h-48 overflow-hidden rounded-md mb-4">
            <img src="${artikel.foto}" alt="${artikel.titel}" class="w-full h-full object-cover">
          </div>
        `;
      }

      let tagsHtml = '';
      if (artikel.tags && artikel.tags.length > 0) {
        tagsHtml = `
          <div class="flex flex-wrap gap-2 mt-3">
            ${artikel.tags.map(tag => `
              <span class="text-xs px-2 py-1 bg-gray-100 rounded-full text-gray-600">${tag}</span>
            `).join('')}
          </div>
        `;
      }

      wrapper.innerHTML = `
        <a href="${artikel.url}">
          ${imageHtml}
          <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-blue-600">${artikel.titel}</h3>
            ${artikel.beschrijving ? `<p class="text-gray-600">${artikel.beschrijving}</p>` : ''}
            ${tagsHtml}
            <div class="mt-4">
              <span class="text-blue-500 font-medium hover:text-blue-700 inline-flex items-center">
                Lees meer <i class="fas fa-arrow-right ml-1 text-sm"></i>
              </span>
            </div>
          </div>
        </a>
        <div class="mt-6">
          <a href="${kolom.overzichtUrl}" class="inline-flex items-center px-5 py-2 border border-gray-300 text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-gray-100">
            ${kolom.overzichtLabel}
            <i class="fas fa-arrow-right ml-2 text-sm"></i>
          </a>
        </div>
      `;

      container.appendChild(wrapper);
    })
    .catch(error => console.error(`Error loading ${kolom.json}:`, error));
});







    </script>


</body>
</html>