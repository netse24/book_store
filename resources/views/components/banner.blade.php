<div class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div id="controls-carousel" class="relative w-full bg-gray-300" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('love.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class=" duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{asset('idea.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('miss.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('ghost.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('monosajetna.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carouselItems = document.querySelectorAll('[data-carousel-item]');
        const prevButton = document.querySelector('[data-carousel-prev]');
        const nextButton = document.querySelector('[data-carousel-next]');
        let activeIndex = 0;

        // Function to show the current active item
        function showActiveItem() {
            carouselItems.forEach(function(item, index) {
                if (index === activeIndex) {
                    item.classList.add('opacity-300');
                    item.classList.remove('opacity-0');
                } else {
                    item.classList.add('opacity-0');
                    item.classList.remove('opacity-100');
                }
            });
        }

        // Function to go to the previous item
        function goToPrevItem() {
            activeIndex = (activeIndex - 1 + carouselItems.length) % carouselItems.length;
            showActiveItem();
        }

        // Function to go to the next item
        function goToNextItem() {
            activeIndex = (activeIndex + 1) % carouselItems.length;
            showActiveItem();
        }

        // Event listener for the previous button
        prevButton.addEventListener('click', function() {
            goToPrevItem();
        });

        // Event listener for the next button
        nextButton.addEventListener('click', function() {
            goToNextItem();
        });

        // Automatically go to the next item every 5 seconds
        setInterval(goToNextItem, 2500);

        // Show the initial active item
        showActiveItem();
    });
</script>