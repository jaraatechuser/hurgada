<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-pink-50 via-purple-50 to-indigo-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <h1 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600 mb-4" style="font-family: 'Dancing Script', cursive;">
        Contact & Connect
      </h1>
      <p class="text-lg text-gray-600 italic" style="font-family: 'Crimson Text', serif;">
        Let's create something beautiful together ✨
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-start">
      
      <!-- Author Information Section -->
      <div class="space-y-8">
        <!-- Author Card -->
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-pink-100">
          <div class="text-center mb-8">
            <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-br from-pink-400 to-purple-500 flex items-center justify-center text-white text-4xl font-bold shadow-lg" style="font-family: 'Playfair Display', serif;">
              IT
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2" style="font-family: 'Playfair Display', serif;">
              Inna Tarasyan
            </h2>
            <p class="text-lg text-pink-600 italic mb-4" style="font-family: 'Dancing Script', cursive;">
              Crafting digital experiences that feel modern, simple & human-friendly
            </p>
          </div>

          <div class="space-y-6">
            <!-- Introduction -->
            <div class="text-gray-700 leading-relaxed" style="font-family: 'Crimson Text', serif;">
              <p class="text-lg mb-4">
                Hi, I'm <span class="font-semibold text-pink-600">Inna Tarasyan</span> — a passionate web developer from Armenia. I love building clean, intuitive applications that make complex things simple.
              </p>
              <p class="text-base">
                I specialize in solutions that merge real-time data, intuitive design, and practical functionality. Recently, I built a Coin Trading Platform with trusted crypto data — giving traders reliable, up-to-date insights.
              </p>
            </div>

            <!-- Main Features -->
            <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center" style="font-family: 'Playfair Display', serif;">
                ✨ Main Features
              </h3>
              <ul class="space-y-2 text-gray-700">
                <li class="flex items-center"><span class="text-pink-500 mr-3">⚡</span>Real-time crypto tracking</li>
                <li class="flex items-center"><span class="text-purple-500 mr-3">📊</span>Interactive TradingView charts</li>
                <li class="flex items-center"><span class="text-indigo-500 mr-3">📰</span>Events calendar & news</li>
                <li class="flex items-center"><span class="text-pink-500 mr-3">🤖</span>Smart price predictions</li>
              </ul>
            </div>

            <!-- Professional Experience -->
            <div class="space-y-4">
              <h3 class="text-xl font-semibold text-gray-800" style="font-family: 'Playfair Display', serif;">
                💼 Professional Experience
              </h3>
              <div class="space-y-4 text-gray-700" style="font-family: 'Crimson Text', serif;">
                <div class="bg-white/60 rounded-xl p-4 border-l-4 border-pink-400">
                  <p class="text-sm font-medium text-pink-600 mb-2">2018 - 2024</p>
                  <p class="font-semibold">DreamTeam - Full-stack Developer</p>
                  <p class="text-sm">Healthcare platform "ВсеврачиЗдесь.ru" - maintaining performance, enhancing functionality, and ensuring platform robustness.</p>
                </div>
                <div class="bg-white/60 rounded-xl p-4 border-l-4 border-purple-400">
                  <p class="text-sm font-medium text-purple-600 mb-2">March 2024 - April 2025</p>
                  <p class="font-semibold">Ambi Development - Backend & Frontend</p>
                  <p class="text-sm">Continued work on "ВсеврачиЗдесь.ru" - improving scalability, usability, and long-term system reliability.</p>
                </div>
                <div class="bg-white/60 rounded-xl p-4 border-l-4 border-indigo-400">
                  <p class="text-sm font-medium text-indigo-600 mb-2">Student Years</p>
                  <p class="font-semibold">Educational Android Apps</p>
                  <p class="text-sm">Built collection of apps (GRE prep, English grammar, geography games) - downloaded 2,500+ times on Amazon.</p>
                </div>
              </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center bg-gradient-to-r from-pink-100 to-purple-100 rounded-2xl p-6">
              <p class="text-lg font-medium text-gray-800 mb-4" style="font-family: 'Playfair Display', serif;">
                🚀 I'm always open to remote opportunities. Let's build something great together!
              </p>
              <p class="text-base text-pink-600 italic" style="font-family: 'Dancing Script', cursive;">
                I also love Hurgada. Place I feel really alive. Place where colors come alive. 🌺
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form Section -->
      <div class="space-y-8">
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-pink-100">
          <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" style="font-family: 'Playfair Display', serif;">
            Get In Touch
          </h2>
          
          @if(session('status'))
            <div class="mb-6 p-4 rounded-2xl bg-green-50 text-green-700 border border-green-200 text-center">
              {{ session('status') }}
            </div>
          @endif

          <form method="post" action="{{ route('contact.store') }}" class="space-y-6">
            @csrf
            
            <div>
              <input 
                class="w-full p-4 rounded-2xl border-2 border-pink-100 focus:border-pink-400 focus:ring-2 focus:ring-pink-200 transition-all duration-300 bg-white/70 backdrop-blur-sm" 
                name="name" 
                placeholder="Your beautiful name ✨" 
                value="{{ old('name') }}"
                style="font-family: 'Crimson Text', serif;"
              >
              @error('name')
                <div class="text-red-500 text-sm mt-2 flex items-center">
                  <span class="mr-2">💔</span>{{ $message }}
                </div>
              @enderror
            </div>

            <div>
              <input 
                class="w-full p-4 rounded-2xl border-2 border-pink-100 focus:border-pink-400 focus:ring-2 focus:ring-pink-200 transition-all duration-300 bg-white/70 backdrop-blur-sm" 
                name="email" 
                type="email" 
                placeholder="Your email address 📧" 
                value="{{ old('email') }}"
                style="font-family: 'Crimson Text', serif;"
              >
              @error('email')
                <div class="text-red-500 text-sm mt-2 flex items-center">
                  <span class="mr-2">💔</span>{{ $message }}
                </div>
              @enderror
            </div>

            <div>
              <textarea 
                class="w-full p-4 rounded-2xl border-2 border-pink-100 focus:border-pink-400 focus:ring-2 focus:ring-pink-200 transition-all duration-300 bg-white/70 backdrop-blur-sm resize-none" 
                name="message" 
                rows="6" 
                placeholder="Tell me about your dream project... 💭"
                style="font-family: 'Crimson Text', serif;"
              >{{ old('message') }}</textarea>
              @error('message')
                <div class="text-red-500 text-sm mt-2 flex items-center">
                  <span class="mr-2">💔</span>{{ $message }}
                </div>
              @enderror
            </div>

            <button 
              class="w-full px-8 py-4 rounded-2xl bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold text-lg hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl"
              style="font-family: 'Playfair Display', serif;"
            >
              Send Message with Love 💌
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</x-app-layout>
