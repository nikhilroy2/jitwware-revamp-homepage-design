<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study: Dedoncker.be Redesign</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dedoncker: '#fcb62d',
                        dedonckerDark: '#e6a026'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f9fafb;
        }
        
         .before-after-container {
            display: flex;
            border-radius: 12px;
            box-shadow: 0 20px 30px rgba(0,0,0,0.12);
            overflow: hidden;
            max-height: 40vh;
                height: 40vh; /* belangrijk */
        }
        
        .before-image,
        .after-image {
            flex: 1;
            overflow-y: auto;
        }
        
        .before-image {
            border-right: 3px solid #fcb62d;
        }
        
        .before-image img,
        .after-image img {
            width: 100%;
            display: block;
                height: auto; /* zodat lange afbeelding niet verkleind wordt */
        }
        
        .slider-handle {
            position: absolute;
            top: 50%;
            left: 50% !important;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #fcb62d;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: grab;
            box-shadow: 0 5px 15px rgba(252, 182, 45, 0.5);
            z-index: 10;
            transition: all 0.3s ease;
        }
        
        .slider-handle:hover {
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 8px 25px rgba(252, 182, 45, 0.7);
        }
        
        .handle-icon {
            color: white;
            font-size: 24px;
        }
        
        .timeline-item:not(:last-child):after {
            content: '';
            position: absolute;
            top: 24px;
            left: 24px;
            height: 100%;
            width: 2px;
            background: #fcb62d;
            z-index: 0;
        }
        
        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0,0,0,0.1);
        }
        
        .carousel-slide {
            transition: opacity 0.5s ease-in-out;
        }
        
        .carousel-indicator.active {
            background: #fcb62d;
        }
        
        @media (max-width: 768px) {
            .before-after-container {
                height: 300px;
            }
            
            .stat-grid {
                grid-template-columns: 1fr;
            }
            
            .timeline-item:not(:last-child):after {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="w-full py-8 px-4 sm:px-8 bg-white shadow-sm">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-6 md:mb-0">
                <div class="w-12 h-12 rounded-full bg-dedoncker flex items-center justify-center">
                    <span class="font-bold text-white text-xl">D</span>
                </div>
                <h1 class="text-2xl font-bold ml-4">Case study: </br><span class="text-dedoncker">De Doncker</span></h1>
            </div>
            
            <div class="flex space-x-4">
                <a href="https://www.dedoncker.be" class="px-6 py-2 rounded-full font-medium bg-dedoncker text-white hover:bg-dedonckerDark transition duration-300">website</a>
                <a href="/contact" class="px-6 py-2 rounded-full font-medium border-2 border-gray-300 text-gray-700 hover:bg-gray-100 transition duration-300">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative py-16 md:py-24 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">Modernisering van <span class="text-dedoncker">De Doncker</span></h1>
                    <p class="text-xl text-gray-600 mb-8">Van verouderd webdesign naar een moderne digitale ervaring die de merkidentiteit versterkt en gebruikers aantrekt.</p>
                    
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-dedoncker bg-opacity-10 text-dedoncker px-4 py-2 rounded-full font-medium">Web Redesign</div>
                                                <div class="bg-dedoncker bg-opacity-10 text-dedoncker px-4 py-2 rounded-full font-medium">SEO</div>
                        <div class="bg-dedoncker bg-opacity-10 text-dedoncker px-4 py-2 rounded-full font-medium">UX/UI Design</div>
                        <div class="bg-dedoncker bg-opacity-10 text-dedoncker px-4 py-2 rounded-full font-medium">Branding</div>

                    </div>
                </div>
                
                <div class="md:w-1/2 relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-xl h-96 overflow-hidden">
                            <img src="bestanden/oud-design-dedoncker.jpg" alt="Oud design" class="w-full h-full object-cover object-top">
                        </div>

                        <div class="rounded-xl h-96 overflow-hidden">
                            <img src="bestanden/nieuw-design-dedoncker.jpg" alt="Nieuw design" class="w-full h-full object-cover object-top">
                        </div>

                                            <div class="absolute -top-6 -right-6 z-10">
                        <div class="w-24 h-24 rounded-full bg-dedoncker flex items-center justify-center animate-pulse">
                            <span class="font-bold text-white text-lg">NU</span>
                        </div>
                    </div>




                        <!--
                        <div class="bg-dedoncker bg-opacity-10 border-2 border-dedoncker rounded-xl h-64 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-dedoncker flex items-center justify-center">
                                <i class="fas fa-sync-alt text-2xl text-white"></i>
                            </div>
                        </div>

                        <div class="bg-gray-200 border-2 border-dashed rounded-xl h-64 flex items-center justify-center text-gray-500">
                            <i class="fas fa-mobile-alt text-4xl"></i>
                        </div>
                        -->
                    </div>
                    

                </div>
            </div>
        </div>
    </section>






    <!-- Before/After Slider -->
    <section class="py-16 bg-gray-50 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Visuele transformatie</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Zie zelf het verschil tussen het oude design en onze nieuwe, moderne aanpak</p>
            </div>
            
            <div class="before-after-container mx-auto max-w-5xl relative">
                <!-- Before image -->
                <div class="before-image">
                    <img src="bestanden/oud-design-dedoncker.jpg" alt="Oud design" class="w-full object-cover">
                </div>
                
                <!-- After image -->
                <div class="after-image">
                    <img src="bestanden/nieuw-design-dedoncker.jpg" alt="Nieuw design" class="w-full object-cover">
                </div>
                
                <!-- Slider handle -->
                <div class="slider-handle" id="slider-handle">
                    <i class="fas fa-arrows-alt-h handle-icon"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
<section class="py-16 px-4">
  <div class="max-w-7xl mx-auto">
    <!-- 2 hoofdkolommen -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- hoofdkolom 1: 2x2 blokken -->
      <div class="grid grid-cols-2 gap-4">
        <div class="stat-card bg-white rounded-2xl p-8 shadow-lg flex flex-col items-center text-center border-t-4 border-dedoncker">
          <div class="text-5xl font-bold text-dedoncker mb-4">+87%</div>
          <h3 class="text-xl font-bold mb-2">Verhoogde betrokkenheid</h3>
          <p class="text-gray-600">Gemiddeld aantal bezoekers</p>
        </div>
        <div class="stat-card bg-white rounded-2xl p-8 shadow-lg flex flex-col items-center text-center border-t-4 border-dedoncker">
          <div class="text-5xl font-bold text-dedoncker mb-4">+</div>
          <h3 class="text-xl font-bold mb-2">Meer leads</h3>
          <p class="text-gray-600">Contactaanvragen via website</p>
        </div>
        <div class="stat-card bg-white rounded-2xl p-8 shadow-lg flex flex-col items-center text-center border-t-4 border-dedoncker">
          <div class="text-5xl font-bold text-dedoncker mb-4">-62%</div>
          <h3 class="text-xl font-bold mb-2">Snellere laadtijd</h3>
          <p class="text-gray-600">Gemiddelde paginalaadtijd</p>
        </div>
        <div class="stat-card bg-white rounded-2xl p-8 shadow-lg flex flex-col items-center text-center border-t-4 border-dedoncker">
          <div class="text-5xl font-bold text-dedoncker mb-4">90%</div>
          <h3 class="text-xl font-bold mb-2">Mobiel gebruik</h3>
          <p class="text-gray-600">Mobiele compatibiliteitsscore</p>
        </div>
      </div>

      <!-- hoofdkolom 2: afbeelding -->
      <div class="bg-dedoncker bg-opacity-10 border-2 border-dedoncker rounded-xl h-full flex items-center justify-center">
        <img src="bestanden/statistieken-nieuwe-website-stijging.png" alt="Nieuw design" class="w-full h-full object-fit object-top rounded-xl">
      </div>

    </div>
  </div>
</section>


    <!-- Design Process -->
    <section class="py-16 bg-gradient-to-br from-white to-gray-100 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ons design proces</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Een gestructureerde aanpak om tot het beste resultaat te komen</p>
            </div>
            
            <div class="relative max-w-4xl mx-auto">
                <!-- Timeline -->
                <div class="space-y-12">
                    <div class="timeline-item relative pl-20">
                        <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-dedoncker flex items-center justify-center z-10">
                            <span class="text-white font-bold">1</span>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Onderzoek en Analyse</h3>
                            <p class="text-gray-600 mb-4">We begonnen met een grondige analyse van de oude website, gebruikersgedrag en merkidentiteit.</p>
                            <div class="flex flex-wrap gap-2">
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Gebruikerstesten</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Competitieve analyse</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Technische audit</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item relative pl-20">
                        <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-dedoncker flex items-center justify-center z-10">
                            <span class="text-white font-bold">2</span>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Merkstrategie</h3>
                            <p class="text-gray-600 mb-4">Ontwikkeling van een visuele identiteit die zowel modern als herkenbaar is voor het bestaande publiek.</p>
                            <div class="flex flex-wrap gap-2">
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Kleurenpalet</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Typografie</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Visuele elementen</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item relative pl-20">
                        <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-dedoncker flex items-center justify-center z-10">
                            <span class="text-white font-bold">3</span>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Wireframing & Prototyping</h3>
                            <p class="text-gray-600 mb-4">Uitwerking van de gebruikersinterface met focus op intuïtieve navigatie en informatiearchitectuur.</p>
                            <div class="flex flex-wrap gap-2">
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Low-fidelity mockups</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Interactieve prototypes</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Gebruikerstesten</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item relative pl-20">
                        <div class="absolute left-0 top-0 w-12 h-12 rounded-full bg-dedoncker flex items-center justify-center z-10">
                            <span class="text-white font-bold">4</span>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-md">
                            <h3 class="text-2xl font-bold mb-4">Ontwikkeling & Implementatie</h3>
                            <p class="text-gray-600 mb-4">Moderne technische implementatie met focus op snelheid, toegankelijkheid en onderhoudbaarheid.</p>
                            <div class="flex flex-wrap gap-2">
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Responsive design</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Performance optimalisatie</div>
                                <div class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Kwaliteitscontrole</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Transformation -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 w-32 h-32 bg-dedoncker rounded-full opacity-20"></div>
                        <div class="relative bg-gray-800 rounded-3xl p-1 inline-block shadow-2xl">
                            <div class="bg-gray-900 rounded-2xl overflow-hidden w-64">
                                <div class="h-10 bg-gray-800 flex items-center px-4">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                                <div class="relative h-96 overflow-y-auto">
                                    <div class="h-full" style="background: linear-gradient(135deg, #1a202c, #2d3748);">
                                        <div class="p-6">
                                            <div class="text-center text-white mb-8">
                                                <div class="w-16 h-16 bg-dedoncker rounded-full mx-auto flex items-center justify-center">
                                                    <i class="fas fa-home text-white text-2xl"></i>
                                                </div>
                                                <h3 class="text-xl font-bold mt-4">Mobiele Experience</h3>
                                            </div>
                                            
                                            <div class="space-y-4">
                                                <div class="bg-gray-700 rounded-xl p-4">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 rounded-full bg-gray-600 flex-shrink-0"></div>
                                                        <div class="ml-3">
                                                            <div class="h-4 bg-gray-600 rounded w-40 mb-2"></div>
                                                            <div class="h-3 bg-gray-600 rounded w-32"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="bg-dedoncker rounded-xl p-4 text-white">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex-shrink-0"></div>
                                                        <div class="ml-3">
                                                            <div class="font-bold mb-1">Verbeterde navigatie</div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 md:pl-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Mobiele transformatie</h2>
                    <p class="text-gray-600 text-lg mb-8">Het nieuwe design is volledig geoptimaliseerd voor mobiele gebruikers, die het merendeel van het verkeer vormen.</p>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-dedoncker flex items-center justify-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold mb-1">Touch-vriendelijke interfaces</h3>
                                <p class="text-gray-600">Grotere knoppen en interactie-elementen voor optimaal gebruik op smartphones</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-dedoncker flex items-center justify-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold mb-1">Versneld laden</h3>
                                <p class="text-gray-600">Geoptimaliseerde afbeeldingen en caching voor snelle laadtijden op mobiele netwerken</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-dedoncker flex items-center justify-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold mb-1">Verticale workflows</h3>
                                <p class="text-gray-600">Contentherstructurering voor optimale weergave op smalle schermen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-800 text-white px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center">
                        <div class="w-40 h-10 rounded-full bg-dedoncker flex items-center justify-center">
                            <a href="https://www.jitware.be"><span class="font-bold text-white">Jitware</span></a>
                        </div>
                        
                    </div>
                    <p class="mt-4 text-gray-400 max-w-md">Moderne digitale oplossingen voor een betere klantervaring en hogere conversies</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Bekijk het eindresultaat</h3>
                    <a href="https://www.dedoncker.be" class="px-8 py-3 rounded-full font-medium bg-dedoncker text-white hover:bg-dedonckerDark transition duration-300 inline-flex items-center">
                        Bezoek dedoncker.be
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>© 2023 Dedoncker redesign case study. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>

    <script>
        // Before/After Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sliderHandle = document.getElementById('slider-handle');
            const afterImage = document.querySelector('.after-image');
            const container = sliderHandle.parentElement;
            let isDragging = false;
            
            function updateSliderPosition(clientX) {
                const containerRect = container.getBoundingClientRect();
                let x = clientX - containerRect.left;
                
                // Keep within container bounds
                x = Math.max(0, Math.min(x, containerRect.width));
                
                const percentage = (x / containerRect.width) * 100;
                afterImage.style.width = `${percentage}%`;
                sliderHandle.style.left = `${x}px`;
            }
            
            // Initialize slider position
            updateSliderPosition(container.offsetWidth / 2);
            
            sliderHandle.addEventListener('mousedown', function(e) {
                isDragging = true;
                sliderHandle.style.cursor = 'grabbing';
                e.preventDefault();
            });
            
            document.addEventListener('mousemove', function(e) {
                if (!isDragging) return;
                updateSliderPosition(e.clientX);
            });
            
            document.addEventListener('mouseup', function() {
                isDragging = false;
                sliderHandle.style.cursor = 'grab';
            });
            
            // Touch events for mobile
            sliderHandle.addEventListener('touchstart', function(e) {
                isDragging = true;
                sliderHandle.style.cursor = 'grabbing';
                updateSliderPosition(e.touches[0].clientX);
                e.preventDefault();
            }, {passive: false});
            
            document.addEventListener('touchmove', function(e) {
                if (!isDragging) return;
                updateSliderPosition(e.touches[0].clientX);
                e.preventDefault();
            }, {passive: false});
            
            document.addEventListener('touchend', function() {
                isDragging = false;
                sliderHandle.style.cursor = 'grab';
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                const currentPercentage = parseFloat(afterImage.style.width) || 50;
                const containerWidth = container.offsetWidth;
                const newPosition = (currentPercentage / 100) * containerWidth;
                sliderHandle.style.left = `${newPosition}px`;
            });
        });
    </script>
</body>
</html>