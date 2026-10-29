<?php
// Simple form processing to ensure the page functions transparently for Google Ads bots.
// Zero redirects or cloaking logic are used here.
$form_submitted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    // In a real scenario, you would insert into a DB or send an email here.
    // We set this to true to show a success message to the user.
    $form_submitted = true;
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spice & Spoon | Premium Food Recipes & Meal Plans</title>
    <meta name="description" content="Discover chef-crafted recipes, personalized meal plans, and cooking tutorials with Spice & Spoon. Start your culinary journey today.">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            green: '#065f46', // Emerald 800
                            orange: '#f97316', // Orange 500
                            light: '#fff7ed', // Orange 50
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-light text-gray-800 font-sans antialiased">

    <!-- Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                <span class="text-2xl font-bold text-brand-green tracking-tight">Spice & Spoon</span>
            </div>
            <nav class="hidden md:flex gap-6">
                <a href="#about" class="text-gray-600 hover:text-brand-orange font-medium transition">About Us</a>
                <a href="#services" class="text-gray-600 hover:text-brand-orange font-medium transition">Our Services</a>
                <a href="#testimonials" class="text-gray-600 hover:text-brand-orange font-medium transition">Reviews</a>
            </nav>
            <a href="#contact" class="bg-brand-orange text-white px-5 py-2 rounded-full font-semibold hover:bg-orange-600 transition shadow-md">Get Recipes</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center py-16 md:py-24 gap-12">
            <div class="w-full md:w-1/2 flex flex-col items-start text-left space-y-6">
                <h1 class="text-4xl md:text-5xl font-extrabold text-brand-green leading-tight">
                    Bring Restaurant Quality Meals to Your Kitchen Table
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Stop stressing over what to cook. Get access to our exclusive vault of easy-to-follow, highly rated recipes and tailored weekly meal plans.
                </p>
                <a href="#contact" class="inline-block bg-brand-orange text-white text-lg font-bold px-8 py-4 rounded-full hover:bg-orange-600 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Send Me Free Recipes
                </a>
                <p class="text-sm text-gray-500 flex items-center gap-2">
                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Trusted by over 10,000 home chefs
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Delicious home cooked meal with spices" class="rounded-2xl shadow-2xl object-cover h-[400px] w-full">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-brand-green mb-4">How We Elevate Your Cooking</h2>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">Whether you are a beginner or a seasoned home chef, our services are designed to save you time and maximize flavor.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-14 h-14 bg-orange-100 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Curated Recipe Vault</h3>
                    <p class="text-gray-600">Access thousands of meticulously tested recipes, from 15-minute dinners to weekend gourmet projects.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-14 h-14 bg-orange-100 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Weekly Meal Plans</h3>
                    <p class="text-gray-600">Receive customized grocery lists and weekly prep guides to take the guesswork out of grocery shopping.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-14 h-14 bg-orange-100 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Video Tutorials</h3>
                    <p class="text-gray-600">Watch high-definition, step-by-step cooking techniques taught by professional culinary instructors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Chef preparing fresh ingredients" class="rounded-2xl shadow-xl object-cover h-[450px] w-full">
            </div>
            <div class="w-full md:w-1/2 text-left space-y-6">
                <h2 class="text-3xl font-bold text-brand-green">About Spice & Spoon</h2>
                <div class="w-20 h-1 bg-brand-orange rounded"></div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Founded by culinary enthusiasts, Spice & Spoon was created with a simple mission: to make incredible, wholesome cooking accessible to absolutely everyone. 
                </p>
                <p class="text-gray-600 text-lg leading-relaxed">
                    We know that after a long day, the last thing you want is a complicated recipe with hard-to-find ingredients. Our team rigorously tests every recipe to ensure maximum flavor with minimal effort, providing you with the confidence to cook up a storm in your very own kitchen.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-20 bg-brand-green text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-12">What Our Community Says</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-emerald-900 p-8 rounded-xl text-left border border-emerald-700">
                    <div class="flex text-brand-orange mb-4">
                        ★★★★★
                    </div>
                    <p class="italic mb-6">"I used to eat takeout 5 nights a week. The meal plans from Spice & Spoon completely changed my routine. The recipes are insanely fast and taste better than my local restaurants!"</p>
                    <p class="font-bold">- Sarah Jenkins, NY</p>
                </div>
                <div class="bg-emerald-900 p-8 rounded-xl text-left border border-emerald-700">
                    <div class="flex text-brand-orange mb-4">
                        ★★★★★
                    </div>
                    <p class="italic mb-6">"As a busy parent, the 30-minute dinner collections are a lifesaver. My kids are finally eating their vegetables because of the clever flavor combinations."</p>
                    <p class="font-bold">- Michael T., CA</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Capture Form Section -->
    <section id="contact" class="py-24 bg-brand-light relative">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 md:p-12 rounded-2xl shadow-2xl border-t-4 border-brand-orange">
                
                <?php if($form_submitted): ?>
                    <!-- Success State -->
                    <div class="text-center py-8">
                        <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Success! You're on the list.</h3>
                        <p class="text-gray-600">Check your inbox shortly for your first batch of exclusive recipes.</p>
                        <a href="/" class="mt-6 inline-block text-brand-orange font-semibold hover:underline">Return Home</a>
                    </div>
                <?php else: ?>
                    <!-- Form State -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-brand-green mb-3">Join the Spice & Spoon Club</h2>
                        <p class="text-gray-600">Enter your details below to get 5 of our top-rated recipes sent instantly to your inbox for free.</p>
                    </div>
                    
                    <form action="#contact" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange outline-none transition">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange outline-none transition">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-orange focus:border-brand-orange outline-none transition">
                        </div>
                        <div class="flex items-start">
                            <input id="consent" name="consent" type="checkbox" required class="h-4 w-4 text-brand-orange focus:ring-brand-orange border-gray-300 rounded mt-1">
                            <label for="consent" class="ml-2 block text-sm text-gray-500">
                                I agree to receive recipe emails and promotions. I understand I can unsubscribe at any time. View our <a href="#privacy" class="text-brand-orange hover:underline">Privacy Policy</a>.
                            </label>
                        </div>
                        <button type="submit" class="w-full bg-brand-orange text-white font-bold text-lg py-4 rounded-xl hover:bg-orange-600 transition shadow-md">
                            Send My Free Recipes Now
                        </button>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- Footer with Google Ads Trust Signals -->
    <footer class="bg-gray-900 text-gray-300 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm text-center md:text-left">
            
            <!-- Business Info (Crucial for Ad compliance) -->
            <div>
                <h4 class="text-white font-bold text-lg mb-4">Spice & Spoon LLC</h4>
                <p class="mb-2">123 Flavor Street, Suite 400</p>
                <p class="mb-2">Foodville, NY 10001, United States</p>
                <p class="mb-2">Phone: <a href="tel:+15551234567" class="hover:text-white transition">(555) 123-4567</a></p>
                <p>Email: <a href="mailto:hello@spiceandspoon.example.com" class="hover:text-white transition">hello@spiceandspoon.example.com</a></p>
            </div>

            <!-- Links (Crucial for Ad compliance) -->
            <div>
                <h4 class="text-white font-bold text-lg mb-4">Legal & Support</h4>
                <ul class="space-y-2">
                    <li><a href="#privacy-policy" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="#terms-of-service" class="hover:text-white transition">Terms of Service</a></li>
                    <li><a href="#contact" class="hover:text-white transition">Contact Us</a></li>
                    <li><a href="#about" class="hover:text-white transition">About Our Company</a></li>
                </ul>
            </div>

            <!-- Disclaimer -->
            <div>
                <h4 class="text-white font-bold text-lg mb-4">Disclaimer</h4>
                <p class="text-xs text-gray-500 leading-relaxed">
                    This site is not a part of the Google website or Google Inc. Additionally, this site is NOT endorsed by Google in any way. GOOGLE is a trademark of GOOGLE Inc. Results from following our recipes or meal plans may vary depending on individual cooking skill and appliance calibration.
                </p>
            </div>

        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-gray-800 text-center text-xs text-gray-500">
            &copy; <?php echo date("Y"); ?> Spice & Spoon LLC. All rights reserved.
        </div>
    </footer>

</body>
</html>