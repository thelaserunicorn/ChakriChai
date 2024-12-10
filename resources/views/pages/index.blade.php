<x-layout>
    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Welcome To ChakriChai</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs available</p>
        @endforelse
    </div>
    <a href="{{route('jobs.index')}}" class="block text-xl text-center">
        <i class="fa fa-arrow-alt-circle-right"></i> Show All Jobs
    </a>
    <!-- testimonial-->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <!-- Heading -->
            <h4 class="text-sm font-medium text-indigo-600 uppercase tracking-wider">Testimonial</h4>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
                We care about our clients experiences
            </h2>
        </div>

        <!-- Cards Container -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4 lg:px-8">
            <!-- Card 1 -->
            <div
                class="p-6 bg-white rounded-lg shadow-lg border border-transparent hover:border-indigo-600 transition duration-300"
            >
                <img
                    src="https://via.placeholder.com/150"
                    alt="user-picture-1"
                    class="w-16 h-16 rounded-full mx-auto"
                />
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Rashid Iftekhar</h3>
                <p class="text-sm text-indigo-600">Full Stack Developer</p>
                <div class="flex justify-center items-center mt-2">
                    <span class="text-yellow-500">★★★★★</span>
                </div>
                <p class="mt-4 text-sm text-gray-700">
                    ChakriChai has made finding and applying to jobs easier. I can easily find jobs according to my preferences.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="p-6 bg-white rounded-lg shadow-lg border border-transparent hover:border-indigo-600 transition duration-300"
            >
                <img
                    src="https://via.placeholder.com/150"
                    alt="user-picture-1"
                    class="w-16 h-16 rounded-full mx-auto"
                />
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Sariha Sanjeena</h3>
                <p class="text-sm text-indigo-600">Journalist</p>
                <div class="flex justify-center items-center mt-2">
                    <span class="text-yellow-500">★★★★★</span>
                </div>
                <p class="mt-4 text-sm text-gray-700">
                    Thanks to ChakriChai I'm finally employed!!
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="p-6 bg-white rounded-lg shadow-lg border border-transparent hover:border-indigo-600 transition duration-300"
            >
                <img
                    src="https://via.placeholder.com/150"
                    alt="user-picture-3"
                    class="w-16 h-16 rounded-full mx-auto"
                />
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Isaac Gomes</h3>
                <p class="text-sm text-indigo-600">Musician</p>
                <div class="flex justify-center items-center mt-2">
                    <span class="text-yellow-500">★★★★★</span>
                </div>
                <p class="mt-4 text-sm text-gray-700">
                    Finally found a job at a music store. End of my homeless era!
                </p>
            </div>

            <!-- Card 4 -->
            <div
                class="p-6 bg-white rounded-lg shadow-lg border border-transparent hover:border-indigo-600 transition duration-300"
            >
                <img
                    src="https://via.placeholder.com/150"
                    alt="user-picture-4"
                    class="w-16 h-16 rounded-full mx-auto"
                />
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Kaniz Fatema Kanta</h3>
                <p class="text-sm text-indigo-600">Software Developer</p>
                <div class="flex justify-center items-center mt-2">
                    <span class="text-yellow-500">★★★★★</span>
                </div>
                <p class="mt-4 text-sm text-gray-700">
                    ChakriChai helped me to find my desired job!
                </p>
            </div>
        </div>
    </section>
    <!-- FAQ-->
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16">
                <h2
                    class="text-4xl font-manrope text-center font-bold text-gray-900 leading-[3.25rem]"
                >
                    Frequently asked questions
                </h2>
            </div>
            <div class="accordion-group">
                <div
                    class="accordion border border-solid border-gray-300 p-4 rounded-xl transition duration-500 mb-8 lg:p-4"
                >
                    <button
                        class="accordion-toggle group inline-flex items-center justify-between text-left text-lg font-normal leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600"
                        aria-expanded="false"
                    >
                        <h5>How can I reset my password?</h5>
                        <svg
                            class="w-6 h-6 text-gray-900 transition duration-500 block group-hover:text-indigo-600"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 12H18M12 18V6"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </button>
                    <div
                        class="accordion-content w-full overflow-hidden pr-4 max-h-0 transition-all duration-300"
                    >
                        <p class="text-base text-gray-900 font-normal leading-6 mt-4">
                            To reset your password, go to the login page and click the "Forgot
                            Password" link. Follow the instructions to reset your password.
                        </p>
                    </div>
                </div>
                <!-- Repeat this block for other FAQs -->
                <div
                    class="accordion border border-solid border-gray-300 p-4 rounded-xl transition duration-500 mb-8 lg:p-4"
                >
                    <button
                        class="accordion-toggle group inline-flex items-center justify-between text-left text-lg font-normal leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600"
                        aria-expanded="false"
                    >
                        <h5>How can I get a job?</h5>
                        <svg
                            class="w-6 h-6 text-gray-900 transition duration-500 block group-hover:text-indigo-600"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 12H18M12 18V6"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </button>
                    <div
                        class="accordion-content w-full overflow-hidden pr-4 max-h-0 transition-all duration-300"
                    >
                        <p class="text-base text-gray-900 font-normal leading-6 mt-4">
                            To get a job you need to be qualified and if you're qualified then you should apply.
                        </p>
                    </div>
                </div>
                <div
                    class="accordion border border-solid border-gray-300 p-4 rounded-xl transition duration-500 mb-8 lg:p-4"
                >
                    <button
                        class="accordion-toggle group inline-flex items-center justify-between text-left text-lg font-normal leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600"
                        aria-expanded="false"
                    >
                        <h5>How can I delete my account?</h5>
                        <svg
                            class="w-6 h-6 text-gray-900 transition duration-500 block group-hover:text-indigo-600"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 12H18M12 18V6"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </button>
                    <div
                        class="accordion-content w-full overflow-hidden pr-4 max-h-0 transition-all duration-300"
                    >
                        <p class="text-base text-gray-900 font-normal leading-6 mt-4">
                            Go to your user profile settings and click on the delete button.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const accordions = document.querySelectorAll(".accordion");

            accordions.forEach((accordion) => {
                const toggle = accordion.querySelector(".accordion-toggle");
                const content = accordion.querySelector(".accordion-content");

                toggle.addEventListener("click", () => {
                    const isOpen = toggle.getAttribute("aria-expanded") === "true";

                    // Close all accordions
                    accordions.forEach((otherAccordion) => {
                        otherAccordion.querySelector(".accordion-content").style.maxHeight =
                            "0";
                        otherAccordion
                            .querySelector(".accordion-toggle")
                            .setAttribute("aria-expanded", "false");
                    });

                    // If this accordion was not open, open it
                    if (!isOpen) {
                        content.style.maxHeight = content.scrollHeight + "px";
                        toggle.setAttribute("aria-expanded", "true");
                    }
                });
            });
        });
    </script>
    <!--Form-->
    <div class="mb-16">
        <h2
            class="text-4xl font-manrope text-center font-bold text-gray-900 leading-[3.25rem]"
        >
            Contact Us
        </h2>
    </div>
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[1080px]">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="mb-5">
                    <label
                        for="name"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Full Name
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                <div class="mb-5">
                    <label
                        for="email"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Email Address
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="example@domain.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                </div>
                <div class="mb-5">
                    <label
                        for="message"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Message
                    </label>
                    <textarea
                        rows="4"
                        name="message"
                        id="message"
                        placeholder="Type your message"
                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    ></textarea>
                </div>
                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] hover:bg-[#4E49D8] py-3 px-8 text-base font-semibold text-white outline-none transition-colors duration-300"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>


    <x-bottom-banner />
</x-layout>
