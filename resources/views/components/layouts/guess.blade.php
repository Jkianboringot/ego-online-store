@props(['title'=>''])
   <main>
      <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
          <div class="auth-page-form">
            <div class="text-center">
              <a href="/">
                <img src="/img/logoipsum-265.svg" alt="" />
              </a>
            </div>
 <h1 class="auth-page-title text-4xl font-extrabold text-gray-600 mb-6 drop-shadow-lg">
                    {{ $title }}
                </h1>
           {{ $slot }}
            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                 <x-layouts.fb-button/>
              <x-layouts.google-button/>
              </div>
              
              <div class="login-text-dont-have-account">
           {{ $footerLinks }}
              </div>
          </div>
          <div class="auth-page-image">
            <img src="images (6).png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
    </main>