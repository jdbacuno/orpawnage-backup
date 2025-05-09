<x-auth-layout>
  <!-- ===== Page Wrapper Start ===== -->
  <div class="relative p-6 bg-white z-1 sm:p-0">
    <div class="flex flex-col justify-center w-full h-screen py-10 lg:flex-row">
      <!-- Form -->
      <div class="flex flex-col flex-1 w-full lg:w-1/2 overflow-y-auto no-scrollbar py-8">
        <div class="flex flex-col justify-center flex-1 w-full max-w-md mx-auto">
          <div class="lg:hidden mb-10 sm:mb-10">
            <img src="{{ asset('images/orpawnage-logo.png') }}" class="h-20 mx-auto" alt="Flowbite Logo" />
          </div>
          <div class="mb-5 sm:mb-8">
            <h1 class="mb-2 font-semibold text-gray-800 text-title-sm sm:text-title-md">
              Sign Up
            </h1>
            <p class="text-sm text-gray-500">
              Enter your email and password to sign up!
            </p>
          </div>

          <div>
            <div class="grid grid-cols-1 gap-3">
              <button
                class="inline-flex items-center justify-center gap-3 py-3 text-sm font-normal text-gray-700 transition-colors bg-gray-100 rounded-lg px-7 hover:bg-gray-200 hover:text-gray-800">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.7511 10.1944C18.7511 9.47495 18.6915 8.94995 18.5626 8.40552H10.1797V11.6527H15.1003C15.0011 12.4597 14.4654 13.675 13.2749 14.4916L13.2582 14.6003L15.9087 16.6126L16.0924 16.6305C17.7788 15.1041 18.7511 12.8583 18.7511 10.1944Z"
                    fill="#4285F4" />
                  <path
                    d="M10.1788 18.75C12.5895 18.75 14.6133 17.9722 16.0915 16.6305L13.274 14.4916C12.5201 15.0068 11.5081 15.3666 10.1788 15.3666C7.81773 15.3666 5.81379 13.8402 5.09944 11.7305L4.99473 11.7392L2.23868 13.8295L2.20264 13.9277C3.67087 16.786 6.68674 18.75 10.1788 18.75Z"
                    fill="#34A853" />
                  <path
                    d="M5.10014 11.7305C4.91165 11.186 4.80257 10.6027 4.80257 9.99992C4.80257 9.3971 4.91165 8.81379 5.09022 8.26935L5.08523 8.1534L2.29464 6.02954L2.20333 6.0721C1.5982 7.25823 1.25098 8.5902 1.25098 9.99992C1.25098 11.4096 1.5982 12.7415 2.20333 13.9277L5.10014 11.7305Z"
                    fill="#FBBC05" />
                  <path
                    d="M10.1789 4.63331C11.8554 4.63331 12.9864 5.34303 13.6312 5.93612L16.1511 3.525C14.6035 2.11528 12.5895 1.25 10.1789 1.25C6.68676 1.25 3.67088 3.21387 2.20264 6.07218L5.08953 8.26943C5.81381 6.15972 7.81776 4.63331 10.1789 4.63331Z"
                    fill="#EB4335" />
                </svg>
                Sign up with Google
              </button>
            </div>
            <div class="relative py-3 sm:py-5">
              <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-200"></div>
              </div>
              <div class="relative flex justify-center text-sm">
                <span class="p-2 text-gray-400 bg-white sm:px-5 sm:py-2">Or</span>
              </div>
            </div>

            <form action="/register" method="POST" id="registerForm">
              @csrf

              @if (session('success'))
              <div id="alert-3" class="flex items-center p-4 my-3 text-green-800 rounded-lg bg-green-50 sm:col-span-7"
                role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  viewBox="0 0 20 20">
                  <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                  {!! session('success') !!}
                </div>
                <button type="button"
                  class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                  data-dismiss-target="#alert-3" aria-label="Close" id="triggerElement">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                </button>
              </div>
              @endif

              <div class="space-y-5">
                <!-- User Name -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700">
                    Username<span class="text-error-500">*</span>
                  </label>
                  <input type="text" id="username" name="username" placeholder="Enter your username"
                    class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-orange-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    value="{{ old('username') }}" required />

                  <x-form-error name="username" />
                </div>

                <!-- Email -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700">
                    Email<span class="text-error-500">*</span>
                  </label>
                  <input type="email" id="email" name="email" placeholder="Enter your email"
                    class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    value="{{ old('email') }}" required />

                  <x-form-error name="email" />
                </div>

                <!-- Email -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700">
                    Contact no.<span class="text-error-500">*</span>
                  </label>
                  <input type="tel" id="contactno" name="contact_number"
                    placeholder="Enter your contact (e.g. 09123456789)"
                    class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                    value="{{ old('contact_number') }}" required />
                  <p class="mt-1 text-sm text-gray-500">Format: 09XXXXXXXXX (11 digits)</p>

                  <x-form-error name="contact_number" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                  <label class="mb-1.5 block text-sm font-medium text-gray-700">
                    Password<span class="text-error-500">*</span>
                  </label>
                  <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                      class="h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-4 pr-11 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10"
                      value="{{ old('password') }}" required />

                    <span id="toggle-password"
                      class="absolute z-30 text-gray-500 -translate-y-1/2 cursor-pointer right-4 top-1/2">
                      {{-- Eye Open --}}
                      <svg id="eye-open" class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10.0002 13.8619C7.23361 13.8619 4.86803 12.1372 3.92328 9.70241C4.86804 7.26761 7.23361 5.54297 10.0002 5.54297C12.7667 5.54297 15.1323 7.26762 16.0771 9.70243C15.1323 12.1372 12.7667 13.8619 10.0002 13.8619ZM10.0002 4.04297C6.48191 4.04297 3.49489 6.30917 2.4155 9.4593C2.3615 9.61687 2.3615 9.78794 2.41549 9.94552C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C13.5184 15.3619 16.5055 13.0957 17.5849 9.94555C17.6389 9.78797 17.6389 9.6169 17.5849 9.45932C16.5055 6.30919 13.5184 4.04297 10.0002 4.04297ZM9.99151 7.84413C8.96527 7.84413 8.13333 8.67606 8.13333 9.70231C8.13333 10.7286 8.96527 11.5605 9.99151 11.5605H10.0064C11.0326 11.5605 11.8646 10.7286 11.8646 9.70231C11.8646 8.67606 11.0326 7.84413 10.0064 7.84413H9.99151Z"
                          fill="#98A2B3" />
                      </svg>

                      {{-- Eye Off --}}
                      <svg id="eye-closed" class="hidden fill-current" width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M4.63803 3.57709C4.34513 3.2842 3.87026 3.2842 3.57737 3.57709C3.28447 3.86999 3.28447 4.34486 3.57737 4.63775L4.85323 5.91362C3.74609 6.84199 2.89363 8.06395 2.4155 9.45936C2.3615 9.61694 2.3615 9.78801 2.41549 9.94558C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C11.255 15.3619 12.4422 15.0737 13.4994 14.5598L15.3625 16.4229C15.6554 16.7158 16.1302 16.7158 16.4231 16.4229C16.716 16.13 16.716 15.6551 16.4231 15.3622L4.63803 3.57709ZM12.3608 13.4212L10.4475 11.5079C10.3061 11.5423 10.1584 11.5606 10.0064 11.5606H9.99151C8.96527 11.5606 8.13333 10.7286 8.13333 9.70237C8.13333 9.5461 8.15262 9.39434 8.18895 9.24933L5.91885 6.97923C5.03505 7.69015 4.34057 8.62704 3.92328 9.70247C4.86803 12.1373 7.23361 13.8619 10.0002 13.8619C10.8326 13.8619 11.6287 13.7058 12.3608 13.4212ZM16.0771 9.70249C15.7843 10.4569 15.3552 11.1432 14.8199 11.7311L15.8813 12.7925C16.6329 11.9813 17.2187 11.0143 17.5849 9.94561C17.6389 9.78803 17.6389 9.61696 17.5849 9.45938C16.5055 6.30925 13.5184 4.04303 10.0002 4.04303C9.13525 4.04303 8.30244 4.17999 7.52218 4.43338L8.75139 5.66259C9.1556 5.58413 9.57311 5.54303 10.0002 5.54303C12.7667 5.54303 15.1323 7.26768 16.0771 9.70249Z"
                          fill="#98A2B3" />
                      </svg>
                    </span>
                  </div>

                  {{-- Strength text only --}}
                  <p id="strength-text" class="text-xs mt-2 text-blue-700">Start typing to see strength...</p>

                  <!-- Password Strength Progress Bar -->
                  <div class="mt-3">
                    <div class="h-1 rounded-full w-full bg-gray-300">
                      <div id="strength-progress" class="h-1 rounded-full w-0 bg-red-600"></div>
                    </div>
                  </div>

                  <x-form-error name="password" />
                </div>

                <div class="bg-blue-50 p-3 rounded-md mt-1">
                  <h4 class="text-sm font-medium text-blue-800 mb-1">Password Requirements:</h4>
                  <ul class="text-xs space-y-1">
                    <li id="req-length" class="flex items-center text-blue-700">
                      <i class="ph-fill ph-check-circle mr-2"></i> Minimum 6 characters
                    </li>
                    <li id="req-uppercase" class="flex items-center text-blue-700">
                      <i class="ph-fill ph-check-circle mr-2"></i> At least one uppercase letter
                    </li>
                    <li id="req-lowercase" class="flex items-center text-blue-700">
                      <i class="ph-fill ph-check-circle mr-2"></i> At least one lowercase letter
                    </li>
                    <li id="req-number" class="flex items-center text-blue-700">
                      <i class="ph-fill ph-check-circle mr-2"></i> At least one number
                    </li>
                    <li id="req-symbol" class="flex items-center text-blue-700">
                      <i class="ph-fill ph-check-circle mr-2"></i> At least one symbol
                    </li>
                  </ul>
                </div>

                <script>
                  const passwordInput = document.getElementById('password');
                  const strengthText = document.getElementById('strength-text');
                  const togglePassword = document.getElementById('toggle-password');
                  const eyeOpen = document.getElementById('eye-open');
                  const eyeClosed = document.getElementById('eye-closed');
                  
                  const reqLength = document.getElementById('req-length');
                  const reqUpper = document.getElementById('req-uppercase');
                  const reqLower = document.getElementById('req-lowercase');
                  const reqNumber = document.getElementById('req-number');
                  const reqSymbol = document.getElementById('req-symbol');
                  
                  const strengthProgress = document.getElementById('strength-progress');
                
                  // Initially hide the progress bar and strength text
                  strengthProgress.style.width = '0%';
                  strengthText.innerText = 'Start typing to see strength...';
                  strengthProgress.style.backgroundColor = '#f44336'; // Red
                
                  const updateRequirement = (condition, element) => {
                    if (condition) {
                      element.classList.add('text-green-600');
                      element.classList.add('line-through');
                      element.classList.remove('text-blue-700');
                    } else {
                      element.classList.remove('text-green-600');
                      element.classList.remove('line-through');
                      element.classList.add('text-blue-700');
                    }
                  };
                
                  const updateStrength = (password) => {
                    const hasLength = password.length >= 6;
                    const hasUpper = /[A-Z]/.test(password);
                    const hasLower = /[a-z]/.test(password);
                    const hasNumber = /[0-9]/.test(password);
                    const hasSymbol = /[^A-Za-z0-9]/.test(password);
                    
                    updateRequirement(hasLength, reqLength);
                    updateRequirement(hasUpper, reqUpper);
                    updateRequirement(hasLower, reqLower);
                    updateRequirement(hasNumber, reqNumber);
                    updateRequirement(hasSymbol, reqSymbol);
                
                    let strength = 0;
                    if (hasLength) strength += 1;
                    if (hasUpper) strength += 1;
                    if (hasLower) strength += 1;
                    if (hasNumber) strength += 1;
                    if (hasSymbol) strength += 1;
                
                    let progressPercentage = (strength / 5) * 100;
                    strengthProgress.style.width = `${progressPercentage}%`;
                
                    if (progressPercentage === 0) {
                      strengthText.innerText = 'Start typing to see strength...';
                      strengthProgress.style.backgroundColor = '#f44336'; // Red
                    } else if (progressPercentage < 40) {
                      strengthText.innerText = 'Weak';
                      strengthProgress.style.backgroundColor = '#f44336'; // Red
                    } else if (progressPercentage < 70) {
                      strengthText.innerText = 'Medium';
                      strengthProgress.style.backgroundColor = '#ff9800'; // Orange
                    } else {
                      strengthText.innerText = 'Strong';
                      strengthProgress.style.backgroundColor = '#4caf50'; // Green
                    }
                  };
                
                  passwordInput.addEventListener('input', () => {
                    updateStrength(passwordInput.value);
                    // Show the progress bar and strength text when typing starts
                    strengthProgress.style.display = 'block';
                    strengthText.style.display = 'block';
                  });
                
                  togglePassword.addEventListener('click', () => {
                    const type = passwordInput.type === 'password' ? 'text' : 'password';
                    passwordInput.type = type;
                
                    eyeOpen.classList.toggle('hidden');
                    eyeClosed.classList.toggle('hidden');
                  });
                </script>

                <!-- Confirm Password -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700">
                    Repeat Password<span class="text-error-500">*</span>
                  </label>
                  <div x-data="{ showPassword: false }" class="relative">
                    <input :type="showPassword ? 'text' : 'password'" placeholder="Enter your password"
                      name="password_confirmation"
                      class="h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-4 pr-11 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                    <span @click="showPassword = !showPassword"
                      class="absolute z-30 text-gray-500 -translate-y-1/2 cursor-pointer right-4 top-1/2">
                      <svg x-show="!showPassword" class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10.0002 13.8619C7.23361 13.8619 4.86803 12.1372 3.92328 9.70241C4.86804 7.26761 7.23361 5.54297 10.0002 5.54297C12.7667 5.54297 15.1323 7.26762 16.0771 9.70243C15.1323 12.1372 12.7667 13.8619 10.0002 13.8619ZM10.0002 4.04297C6.48191 4.04297 3.49489 6.30917 2.4155 9.4593C2.3615 9.61687 2.3615 9.78794 2.41549 9.94552C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C13.5184 15.3619 16.5055 13.0957 17.5849 9.94555C17.6389 9.78797 17.6389 9.6169 17.5849 9.45932C16.5055 6.30919 13.5184 4.04297 10.0002 4.04297ZM9.99151 7.84413C8.96527 7.84413 8.13333 8.67606 8.13333 9.70231C8.13333 10.7286 8.96527 11.5605 9.99151 11.5605H10.0064C11.0326 11.5605 11.8646 10.7286 11.8646 9.70231C11.8646 8.67606 11.0326 7.84413 10.0064 7.84413H9.99151Z"
                          fill="#98A2B3" />
                      </svg>
                      <svg x-show="showPassword" class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M4.63803 3.57709C4.34513 3.2842 3.87026 3.2842 3.57737 3.57709C3.28447 3.86999 3.28447 4.34486 3.57737 4.63775L4.85323 5.91362C3.74609 6.84199 2.89363 8.06395 2.4155 9.45936C2.3615 9.61694 2.3615 9.78801 2.41549 9.94558C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C11.255 15.3619 12.4422 15.0737 13.4994 14.5598L15.3625 16.4229C15.6554 16.7158 16.1302 16.7158 16.4231 16.4229C16.716 16.13 16.716 15.6551 16.4231 15.3622L4.63803 3.57709ZM12.3608 13.4212L10.4475 11.5079C10.3061 11.5423 10.1584 11.5606 10.0064 11.5606H9.99151C8.96527 11.5606 8.13333 10.7286 8.13333 9.70237C8.13333 9.5461 8.15262 9.39434 8.18895 9.24933L5.91885 6.97923C5.03505 7.69015 4.34057 8.62704 3.92328 9.70247C4.86803 12.1373 7.23361 13.8619 10.0002 13.8619C10.8326 13.8619 11.6287 13.7058 12.3608 13.4212ZM16.0771 9.70249C15.7843 10.4569 15.3552 11.1432 14.8199 11.7311L15.8813 12.7925C16.6329 11.9813 17.2187 11.0143 17.5849 9.94561C17.6389 9.78803 17.6389 9.61696 17.5849 9.45938C16.5055 6.30925 13.5184 4.04303 10.0002 4.04303C9.13525 4.04303 8.30244 4.17999 7.52218 4.43338L8.75139 5.66259C9.1556 5.58413 9.57311 5.54303 10.0002 5.54303C12.7667 5.54303 15.1323 7.26768 16.0771 9.70249Z"
                          fill="#98A2B3" />
                      </svg>
                    </span>

                  </div>
                  <x-form-error name="password_confirmation" />
                </div>

                <!-- Button -->
                <div class="mt-10">
                  <button type="submit"
                    class="flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600">
                    Sign Up
                  </button>
                </div>
              </div>
            </form>
            <div class="mt-5">
              <p class="text-sm font-normal text-center text-gray-700 sm:text-start">
                Already have an account?
                <a href="/login" class="text-brand-500 hover:text-brand-600">Sign In</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT SIDE: Responsive Background Image with Overlay and Centered Logo -->
      <div class="relative hidden w-full lg:grid lg:w-1/2 bg-cover bg-center sticky top-0 h-screen" style="
          background: gray url({{ asset('images/vet_spaying.jpg') }}) no-repeat
          center center;
          background-size: cover;
          background-blend-mode: screen;
        ">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Centered Logo -->
        <div class="relative z-10 flex items-center justify-center w-full h-full">
          <img src="{{ asset('images/orpawnage-logo.png') }}" alt="Logo" class="block w-28 sm:w-32 md:w-36 lg:w-40" />
        </div>
      </div>
    </div>
  </div>
  <!-- ===== Page Wrapper End ===== -->
</x-auth-layout>