<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | Play Tailwind</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/tailwind.css" />

  <!-- ==== WOW JS ==== -->
  <script src="assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</head>

<body>
  <!-- ====== Navbar Section Start -->
  <div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
    <div class="container">
      <div class="relative -mx-4 flex items-center justify-between">
        <div class="w-60 max-w-full px-4">
          <a href="index.html" class="navbar-logo block w-full py-5">
            <img src="assets/images/logo/logo.svg" alt="logo" class="w-full" />
          </a>
        </div>
        <div class="flex w-full items-center justify-between px-4">
          <div>
            <button id="navbarToggler"
              class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark"></span>
            </button>
            <nav id="navbarCollapse"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
              <ul class="blcok lg:flex 2xl:ml-20">
                <li class="group relative">
                  <a href="#home"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color">
                    Home
                  </a>
                </li>
                <li class="group relative">
                  <a href="/#about"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                    About
                  </a>
                </li>
                <li class="group relative">
                  <a href="/#pricing"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                    Pricing
                  </a>
                </li>
                <li class="group relative">
                  <a href="/#team"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                    Team
                  </a>
                </li>
                <li class="group relative">
                  <a href="/#contact"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                    Contact
                  </a>
                </li>
                <li class="submenu-item group relative">
                  <a href="javascript:void(0)"
                    class="relative mx-8 flex items-center justify-between py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-8 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-body-color xl:ml-10">
                    Pages

                    <svg class="fill-current ml-2" width="16" height="20" viewBox="0 0 16 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z" />
                    </svg>
                  </a>
                  <div
                    class="submenu relative top-full left-0 hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                    <a href="about.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      About Page
                    </a>
                    <a href="pricing.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      Pricing Page
                    </a>
                    <a href="contact.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      Contact Page
                    </a>
                    <a href="blog-grids.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      Blog Grid Page
                    </a>
                    <a href="blog-details.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      Blog Details Page
                    </a>
                    <a href="signup.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      Sign Up Page
                    </a>
                    <a href="signin.html"
                      class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      Sign In Page
                    </a>
                    <a href="404.html" class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary">
                      404 Page
                    </a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
          <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
            <a href="signin.html" class="loginBtn py-2 px-[22px] text-base font-medium text-dark hover:text-primary">
              Sign In
            </a>
            <a href="signup.html"
              class="signUpBtn rounded-md bg-primary py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-blue-dark">
              Sign Up
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Navbar Section End -->

  <!-- ====== Banner Section Start -->
  <div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px]">
    <div class="w-full h-px bg-gradient-to-r from-stroke/0 via-stroke to-stroke/0 absolute left-0 bottom-0">
    </div>
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="text-center">
            <h1 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] md:leading-[1.2]">Sign Up Page</h1>
            <p class="mb-5 text-base text-body-color">
              There are many variations of passages of Lorem Ipsum available.
            </p>

            <ul class="flex items-center justify-center gap-[10px]">
              <li>
                <a href="index.html" class="flex items-center gap-[10px] text-base font-medium text-dark">
                  Home
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="flex items-center gap-[10px] text-base font-medium text-body-color">
                  <span class="text-body-color"> / </span>
                  Sign Up
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== Forms Section Start -->
  <section class="bg-[#F4F7FF] py-14 lg:py-[90px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div
            class="wow fadeInUp relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-form bg-white py-14 px-8 text-center sm:px-12 md:px-[60px]"
            data-wow-delay=".15s">
            <div class="mb-10 text-center">
              <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
                <img src="assets/images/logo/logo.svg" alt="logo" />
              </a>
            </div>
            <form>
              <div class="mb-[22px]">
                <input type="text" placeholder="Name"
                  class="border-stroke w-full rounded-md border py-3 px-5 text-base text-body-color placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
              </div>
              <div class="mb-[22px]">
                <input type="email" placeholder="Email"
                  class="border-stroke w-full rounded-md border py-3 px-5 text-base text-body-color placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
              </div>
              <div class="mb-[22px]">
                <input type="password" placeholder="Password"
                  class="border-stroke w-full rounded-md border py-3 px-5 text-base text-body-color placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
              </div>
              <div class="mb-9">
                <input type="submit" value="Sign Up"
                  class="border-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition duration-300 ease-in-out hover:bg-blue-dark" />
              </div>
            </form>
            <span class="relative z-1 block text-center mb-7">
              <span class="block absolute -z-1 left-0 top-1/2 h-px w-full bg-stroke"></span>
              <span class="inline-block px-3 bg-white text-base text-body-secondary relative z-10">Connect With</span>
            </span>
            <ul class="-mx-2 mb-9 flex justify-between">
              <li class="w-full px-2">
                <a href="javascript:void(0)"
                  class="flex h-11 items-center justify-center rounded-md bg-[#4064AC] transition hover:bg-opacity-90">
                  <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9.29878 8H7.74898H7.19548V7.35484V5.35484V4.70968H7.74898H8.91133C9.21575 4.70968 9.46483 4.45161 9.46483 4.06452V0.645161C9.46483 0.290323 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.80645 3.18262 4.48387V7.29032V7.93548H2.62912H0.747223C0.359774 7.93548 0 8.29032 0 8.80645V11.129C0 11.5806 0.304424 12 0.747223 12H2.57377H3.12727V12.6452V19.129C3.12727 19.5806 3.43169 20 3.87449 20H6.47593C6.64198 20 6.78036 19.9032 6.89106 19.7742C7.00176 19.6452 7.08478 19.4194 7.08478 19.2258V12.6774V12.0323H7.66596H8.91133C9.2711 12.0323 9.54785 11.7742 9.6032 11.3871V11.3548V11.3226L9.99065 9.09677C10.0183 8.87097 9.99065 8.6129 9.8246 8.35484C9.76925 8.19355 9.52018 8.03226 9.29878 8Z"
                      fill="white" />
                  </svg>
                </a>
              </li>
              <li class="w-full px-2">
                <a href="javascript:void(0)"
                  class="flex h-11 items-center justify-center rounded-md bg-[#1C9CEA] transition hover:bg-opacity-90">
                  <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M19.5516 2.75538L20.9 1.25245C21.2903 0.845401 21.3968 0.53229 21.4323 0.375734C20.3677 0.939335 19.3742 1.1272 18.7355 1.1272H18.4871L18.3452 1.00196C17.4935 0.344423 16.429 0 15.2935 0C12.8097 0 10.8581 1.81605 10.8581 3.91389C10.8581 4.03914 10.8581 4.22701 10.8935 4.35225L11 4.97847L10.2548 4.94716C5.7129 4.82192 1.9871 1.37769 1.38387 0.782779C0.390323 2.34834 0.958064 3.85127 1.56129 4.79061L2.76774 6.54403L0.851613 5.6047C0.887097 6.91977 1.45484 7.95303 2.55484 8.7045L3.5129 9.33072L2.55484 9.67515C3.15806 11.272 4.50645 11.9296 5.5 12.18L6.8129 12.4932L5.57097 13.2446C3.58387 14.4971 1.1 14.4031 0 14.3092C2.23548 15.6869 4.89677 16 6.74194 16C8.12581 16 9.15484 15.8748 9.40322 15.7808C19.3387 13.7143 19.8 5.8865 19.8 4.32094V4.10176L20.0129 3.97652C21.2194 2.97456 21.7161 2.44227 22 2.12916C21.8935 2.16047 21.7516 2.22309 21.6097 2.2544L19.5516 2.75538Z"
                      fill="white" />
                  </svg>
                </a>
              </li>
              <li class="w-full px-2">
                <a href="javascript:void(0)"
                  class="flex h-11 items-center justify-center rounded-md bg-[#D64937] transition hover:bg-opacity-90">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.8477 8.17132H9.29628V10.643H15.4342C15.1065 14.0743 12.2461 15.5574 9.47506 15.5574C5.95916 15.5574 2.8306 12.8821 2.8306 9.01461C2.8306 5.29251 5.81018 2.47185 9.47506 2.47185C12.2759 2.47185 13.9742 4.24567 13.9742 4.24567L15.7024 2.47185C15.7024 2.47185 13.3783 0.000145544 9.35587 0.000145544C4.05223 -0.0289334 0 4.30383 0 8.98553C0 13.5218 3.81386 18 9.44526 18C14.4212 18 17.9967 14.7141 17.9967 9.79974C18.0264 8.78198 17.8477 8.17132 17.8477 8.17132Z"
                      fill="white" />
                  </svg>
                </a>
              </li>
            </ul>

            <p class="mb-4 text-base text-body-secondary">
              By creating an account you are agree with our
              <a href="javascript:void(0)" class="text-primary hover:underline">
                Privacy
              </a>
              and
              <a href="javascript:void(0)" class="text-primary hover:underline">
                Policy
              </a>
            </p>

            <p class="text-base text-body-secondary">
              Already have an account?
              <a href="signin.html" class="text-primary hover:underline">
                Sign In
              </a>
            </p>

            <div>
              <span class="absolute top-1 right-1">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)"
                    fill="#3056D3" />
                  <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3" />
                  <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3" />
                  <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3" />
                  <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3" />
                </svg>
              </span>
              <span class="absolute left-1 bottom-1">
                <svg width="29" height="40" viewBox="0 0 29 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3" />
                  <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)"
                    fill="#3056D3" />
                  <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3" />
                  <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)"
                    fill="#3056D3" />
                  <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3" />
                  <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3" />
                  <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)"
                    fill="#3056D3" />
                  <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)"
                    fill="#3056D3" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Forms Section End -->

  <!-- ====== Footer Section Start -->
  <footer class="wow fadeInUp relative z-10 bg-[#090E34] pt-20 lg:pt-[100px]" data-wow-delay=".15s">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
          <div class="mb-10 w-full">
            <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
              <img src="assets/images/logo/logo-white.svg" alt="logo" class="max-w-full" />
            </a>
            <p class="mb-8 max-w-[270px] text-base text-gray-7">
              We create digital experiences for brands and companies by using
              technology.
            </p>
            <div class="-mx-3 flex items-center">
              <a href="javascript:void(0)" class="px-3 text-gray-7 hover:text-white">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="fill-current">
                  <path
                    d="M16.294 8.86875H14.369H13.6815V8.18125V6.05V5.3625H14.369H15.8128C16.1909 5.3625 16.5003 5.0875 16.5003 4.675V1.03125C16.5003 0.653125 16.2253 0.34375 15.8128 0.34375H13.3034C10.5878 0.34375 8.69714 2.26875 8.69714 5.12187V8.1125V8.8H8.00964H5.67214C5.19089 8.8 4.74402 9.17812 4.74402 9.72812V12.2031C4.74402 12.6844 5.12214 13.1313 5.67214 13.1313H7.94089H8.62839V13.8188V20.7281C8.62839 21.2094 9.00652 21.6562 9.55652 21.6562H12.7878C12.994 21.6562 13.1659 21.5531 13.3034 21.4156C13.4409 21.2781 13.544 21.0375 13.544 20.8312V13.8531V13.1656H14.2659H15.8128C16.2596 13.1656 16.6034 12.8906 16.6721 12.4781V12.4438V12.4094L17.1534 10.0375C17.1878 9.79688 17.1534 9.52187 16.9471 9.24687C16.8784 9.075 16.569 8.90312 16.294 8.86875Z" />
                </svg>
              </a>
              <a href="javascript:void(0)" class="px-3 text-gray-7 hover:text-white">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="fill-current">
                  <path
                    d="M20.1236 5.91236C20.2461 5.76952 20.0863 5.58286 19.905 5.64972C19.5004 5.79896 19.1306 5.8974 18.5837 5.95817C19.2564 5.58362 19.5693 5.04828 19.8237 4.39259C19.885 4.23443 19.7 4.09092 19.5406 4.16647C18.8931 4.47345 18.1945 4.70121 17.4599 4.83578C16.7338 4.11617 15.6988 3.6665 14.5539 3.6665C12.3554 3.6665 10.5725 5.32454 10.5725 7.36908C10.5725 7.65933 10.6081 7.94206 10.6752 8.21276C7.51486 8.06551 4.6968 6.71359 2.73896 4.64056C2.60477 4.49848 2.36128 4.51734 2.27772 4.69063C2.05482 5.15296 1.93056 5.66584 1.93056 6.20582C1.93056 7.49014 2.6332 8.62331 3.70132 9.28732C3.22241 9.27293 2.76441 9.17961 2.34234 9.02125C2.13684 8.94416 1.90127 9.07964 1.92888 9.28686C2.14084 10.8781 3.42915 12.1909 5.09205 12.5011C4.75811 12.586 4.40639 12.6311 4.04253 12.6311C3.95431 12.6311 3.86685 12.6284 3.78019 12.6231C3.55967 12.6094 3.38044 12.8067 3.47499 12.9954C4.09879 14.2404 5.44575 15.1096 7.0132 15.1367C5.65077 16.13 3.93418 16.7218 2.06882 16.7218C1.83882 16.7218 1.74015 17.0175 1.9442 17.1178C3.52016 17.8924 5.31487 18.3332 7.22182 18.3332C14.545 18.3332 18.549 12.6914 18.549 7.79843C18.549 7.63827 18.545 7.47811 18.5377 7.31945C19.1321 6.92012 19.6664 6.44528 20.1236 5.91236Z" />
                </svg>
              </a>
              <a href="javascript:void(0)" class="px-3 text-gray-7 hover:text-white">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="fill-current">
                  <path
                    d="M11.0297 14.4305C12.9241 14.4305 14.4598 12.8948 14.4598 11.0004C14.4598 9.10602 12.9241 7.57031 11.0297 7.57031C9.13529 7.57031 7.59958 9.10602 7.59958 11.0004C7.59958 12.8948 9.13529 14.4305 11.0297 14.4305Z" />
                  <path
                    d="M14.7554 1.8335H7.24463C4.25807 1.8335 1.83334 4.25823 1.83334 7.24479V14.6964C1.83334 17.7421 4.25807 20.1668 7.24463 20.1668H14.6962C17.7419 20.1668 20.1667 17.7421 20.1667 14.7555V7.24479C20.1667 4.25823 17.7419 1.8335 14.7554 1.8335ZM11.0296 15.4948C8.51614 15.4948 6.53496 13.4545 6.53496 11.0002C6.53496 8.54586 8.54571 6.50554 11.0296 6.50554C13.4839 6.50554 15.4946 8.54586 15.4946 11.0002C15.4946 13.4545 13.5134 15.4948 11.0296 15.4948ZM17.2393 6.91952C16.9436 7.24479 16.5 7.42221 15.9973 7.42221C15.5538 7.42221 15.1102 7.24479 14.7554 6.91952C14.4301 6.59425 14.2527 6.18027 14.2527 5.67758C14.2527 5.17489 14.4301 4.79049 14.7554 4.43565C15.0807 4.08081 15.4946 3.90339 15.9973 3.90339C16.4409 3.90339 16.914 4.08081 17.2393 4.40608C17.535 4.79049 17.7419 5.23403 17.7419 5.70715C17.7124 6.18027 17.535 6.59425 17.2393 6.91952Z" />
                  <path
                    d="M16.0276 4.96777C15.6432 4.96777 15.318 5.29304 15.318 5.67745C15.318 6.06186 15.6432 6.38713 16.0276 6.38713C16.412 6.38713 16.7373 6.06186 16.7373 5.67745C16.7373 5.29304 16.4416 4.96777 16.0276 4.96777Z" />
                </svg>
              </a>
              <a href="javascript:void(0)" class="px-3 text-gray-7 hover:text-white">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="fill-current">
                  <path
                    d="M18.8065 1.8335H3.16399C2.42474 1.8335 1.83334 2.42489 1.83334 3.16414V18.8362C1.83334 19.5459 2.42474 20.1668 3.16399 20.1668H18.7473C19.4866 20.1668 20.078 19.5754 20.078 18.8362V3.13457C20.1371 2.42489 19.5457 1.8335 18.8065 1.8335ZM7.24464 17.4168H4.55379V8.69371H7.24464V17.4168ZM5.88443 7.48135C4.99733 7.48135 4.31721 6.77167 4.31721 5.91414C4.31721 5.05661 5.0269 4.34694 5.88443 4.34694C6.74196 4.34694 7.45163 5.05661 7.45163 5.91414C7.45163 6.77167 6.8011 7.48135 5.88443 7.48135ZM17.4463 17.4168H14.7554V13.1883C14.7554 12.183 14.7258 10.8523 13.336 10.8523C11.9167 10.8523 11.7097 11.976 11.7097 13.0996V17.4168H9.01884V8.69371H11.6506V9.90608H11.6801C12.0645 9.1964 12.9221 8.48672 14.2527 8.48672C17.0027 8.48672 17.5054 10.2609 17.5054 12.6856V17.4168H17.4463Z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
          <div class="mb-10 w-full">
            <h4 class="mb-9 text-lg font-semibold text-white">About Us</h4>
            <ul>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Home
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Features
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  About
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Testimonial
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
          <div class="mb-10 w-full">
            <h4 class="mb-9 text-lg font-semibold text-white">Features</h4>
            <ul>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  How it works
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Privacy policy
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Terms of Service
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Refund policy
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
          <div class="mb-10 w-full">
            <h4 class="mb-9 text-lg font-semibold text-white">
              Our Products
            </h4>
            <ul>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  LineIcons
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  Ecommerce HTML
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  TailAdmin
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                  PlainAdmin
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full px-4 md:w-2/3 lg:w-6/12 xl:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="mb-9 text-lg font-semibold text-white">Latest blog</h4>
            <div class="flex flex-col gap-8">
              <a href="blog-details.html" class="group flex items-center gap-[22px]">
                <div class="overflow-hidden rounded">
                  <img src="./assets/images/blog/blog-footer-01.jpg" alt="blog">
                </div>
                <span class="max-w-[180px] text-gray-7 text-base group-hover:text-white">
                  I think really important to design with...
                </span>
              </a>
              <a href="blog-details.html" class="group flex items-center gap-[22px]">
                <div class="overflow-hidden rounded">
                  <img src="./assets/images/blog/blog-footer-02.jpg" alt="blog">
                </div>
                <span class="max-w-[180px] text-gray-7 text-base group-hover:text-white">
                  Recognizing the need is the primary...
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-12 border-t border-[#8890A4] border-opacity-40 py-8 lg:mt-[60px]">
      <div class="container">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 md:w-2/3 lg:w-1/2">
            <div class="my-1">
              <div class="-mx-3 flex items-center justify-center md:justify-start">
                <a href="javascript:void(0)" class="px-3 text-base text-gray-7 hover:text-white hover:underline">
                  Privacy policy
                </a>
                <a href="javascript:void(0)" class="px-3 text-base text-gray-7 hover:text-white hover:underline">
                  Legal notice
                </a>
                <a href="javascript:void(0)" class="px-3 text-base text-gray-7 hover:text-white hover:underline">
                  Terms of service
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/3 lg:w-1/2">
            <div class="my-1 flex justify-center md:justify-end">
              <p class="text-base text-gray-7">
                Designed and Developed by
                <a href="https://tailgrids.com" rel="nofollow noopner" target="_blank"
                  class="text-gray-1 hover:underline">
                  TailGrids and UIdeck
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <span class="absolute left-0 top-0 z-[-1]">
        <img src="assets/images/footer/shape-1.svg" alt="" />
      </span>

      <span class="absolute bottom-0 right-0 z-[-1]">
        <img src="assets/images/footer/shape-3.svg" alt="" />
      </span>

      <span class="absolute top-0 right-0 z-[-1]">
        <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M1.8667 33.1956C2.89765 33.1956 3.7334 34.0318 3.7334 35.0633C3.7334 36.0947 2.89765 36.9309 1.8667 36.9309C0.835744 36.9309 4.50645e-08 36.0947 0 35.0633C-4.50645e-08 34.0318 0.835744 33.1956 1.8667 33.1956Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 33.1956C19.3249 33.1956 20.1606 34.0318 20.1606 35.0633C20.1606 36.0947 19.3249 36.9309 18.2939 36.9309C17.263 36.9309 16.4272 36.0947 16.4272 35.0633C16.4272 34.0318 17.263 33.1956 18.2939 33.1956Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 33.195C35.7519 33.195 36.5876 34.0311 36.5876 35.0626C36.5876 36.0941 35.7519 36.9303 34.7209 36.9303C33.69 36.9303 32.8542 36.0941 32.8542 35.0626C32.8542 34.0311 33.69 33.195 34.7209 33.195Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 33.195C51.965 33.195 52.8008 34.0311 52.8008 35.0626C52.8008 36.0941 51.965 36.9303 50.9341 36.9303C49.9031 36.9303 49.0674 36.0941 49.0674 35.0626C49.0674 34.0311 49.9031 33.195 50.9341 33.195Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M1.8667 16.7605C2.89765 16.7605 3.7334 17.5966 3.7334 18.6281C3.7334 19.6596 2.89765 20.4957 1.8667 20.4957C0.835744 20.4957 4.50645e-08 19.6596 0 18.6281C-4.50645e-08 17.5966 0.835744 16.7605 1.8667 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 16.7605C19.3249 16.7605 20.1606 17.5966 20.1606 18.6281C20.1606 19.6596 19.3249 20.4957 18.2939 20.4957C17.263 20.4957 16.4272 19.6596 16.4272 18.6281C16.4272 17.5966 17.263 16.7605 18.2939 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 16.7605C35.7519 16.7605 36.5876 17.5966 36.5876 18.6281C36.5876 19.6596 35.7519 20.4957 34.7209 20.4957C33.69 20.4957 32.8542 19.6596 32.8542 18.6281C32.8542 17.5966 33.69 16.7605 34.7209 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 16.7605C51.965 16.7605 52.8008 17.5966 52.8008 18.6281C52.8008 19.6596 51.965 20.4957 50.9341 20.4957C49.9031 20.4957 49.0674 19.6596 49.0674 18.6281C49.0674 17.5966 49.9031 16.7605 50.9341 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M1.8667 0.324951C2.89765 0.324951 3.7334 1.16115 3.7334 2.19261C3.7334 3.22408 2.89765 4.06024 1.8667 4.06024C0.835744 4.06024 4.50645e-08 3.22408 0 2.19261C-4.50645e-08 1.16115 0.835744 0.324951 1.8667 0.324951Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 0.324951C19.3249 0.324951 20.1606 1.16115 20.1606 2.19261C20.1606 3.22408 19.3249 4.06024 18.2939 4.06024C17.263 4.06024 16.4272 3.22408 16.4272 2.19261C16.4272 1.16115 17.263 0.324951 18.2939 0.324951Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 0.325302C35.7519 0.325302 36.5876 1.16147 36.5876 2.19293C36.5876 3.2244 35.7519 4.06056 34.7209 4.06056C33.69 4.06056 32.8542 3.2244 32.8542 2.19293C32.8542 1.16147 33.69 0.325302 34.7209 0.325302Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 0.325302C51.965 0.325302 52.8008 1.16147 52.8008 2.19293C52.8008 3.2244 51.965 4.06056 50.9341 4.06056C49.9031 4.06056 49.0674 3.2244 49.0674 2.19293C49.0674 1.16147 49.9031 0.325302 50.9341 0.325302Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 33.1956C67.9346 33.1956 68.7704 34.0318 68.7704 35.0633C68.7704 36.0947 67.9346 36.9309 66.9037 36.9309C65.8727 36.9309 65.037 36.0947 65.037 35.0633C65.037 34.0318 65.8727 33.1956 66.9037 33.1956Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 33.1956C84.3616 33.1956 85.1974 34.0318 85.1974 35.0633C85.1974 36.0947 84.3616 36.9309 83.3307 36.9309C82.2997 36.9309 81.464 36.0947 81.464 35.0633C81.464 34.0318 82.2997 33.1956 83.3307 33.1956Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 33.1956C100.789 33.1956 101.624 34.0318 101.624 35.0633C101.624 36.0947 100.789 36.9309 99.7576 36.9309C98.7266 36.9309 97.8909 36.0947 97.8909 35.0633C97.8909 34.0318 98.7266 33.1956 99.7576 33.1956Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 16.7605C67.9346 16.7605 68.7704 17.5966 68.7704 18.6281C68.7704 19.6596 67.9346 20.4957 66.9037 20.4957C65.8727 20.4957 65.037 19.6596 65.037 18.6281C65.037 17.5966 65.8727 16.7605 66.9037 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 16.7605C84.3616 16.7605 85.1974 17.5966 85.1974 18.6281C85.1974 19.6596 84.3616 20.4957 83.3307 20.4957C82.2997 20.4957 81.464 19.6596 81.464 18.6281C81.464 17.5966 82.2997 16.7605 83.3307 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 16.7605C100.789 16.7605 101.624 17.5966 101.624 18.6281C101.624 19.6596 100.789 20.4957 99.7576 20.4957C98.7266 20.4957 97.8909 19.6596 97.8909 18.6281C97.8909 17.5966 98.7266 16.7605 99.7576 16.7605Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 0.324966C67.9346 0.324966 68.7704 1.16115 68.7704 2.19261C68.7704 3.22408 67.9346 4.06024 66.9037 4.06024C65.8727 4.06024 65.037 3.22408 65.037 2.19261C65.037 1.16115 65.8727 0.324966 66.9037 0.324966Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 0.324951C84.3616 0.324951 85.1974 1.16115 85.1974 2.19261C85.1974 3.22408 84.3616 4.06024 83.3307 4.06024C82.2997 4.06024 81.464 3.22408 81.464 2.19261C81.464 1.16115 82.2997 0.324951 83.3307 0.324951Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 0.324951C100.789 0.324951 101.624 1.16115 101.624 2.19261C101.624 3.22408 100.789 4.06024 99.7576 4.06024C98.7266 4.06024 97.8909 3.22408 97.8909 2.19261C97.8909 1.16115 98.7266 0.324951 99.7576 0.324951Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M1.8667 82.2029C2.89765 82.2029 3.7334 83.039 3.7334 84.0705C3.7334 85.102 2.89765 85.9382 1.8667 85.9382C0.835744 85.9382 4.50645e-08 85.102 0 84.0705C-4.50645e-08 83.039 0.835744 82.2029 1.8667 82.2029Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 82.2029C19.3249 82.2029 20.1606 83.039 20.1606 84.0705C20.1606 85.102 19.3249 85.9382 18.2939 85.9382C17.263 85.9382 16.4272 85.102 16.4272 84.0705C16.4272 83.039 17.263 82.2029 18.2939 82.2029Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 82.2026C35.7519 82.2026 36.5876 83.0387 36.5876 84.0702C36.5876 85.1017 35.7519 85.9378 34.7209 85.9378C33.69 85.9378 32.8542 85.1017 32.8542 84.0702C32.8542 83.0387 33.69 82.2026 34.7209 82.2026Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 82.2026C51.965 82.2026 52.8008 83.0387 52.8008 84.0702C52.8008 85.1017 51.965 85.9378 50.9341 85.9378C49.9031 85.9378 49.0674 85.1017 49.0674 84.0702C49.0674 83.0387 49.9031 82.2026 50.9341 82.2026Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M1.8667 65.7677C2.89765 65.7677 3.7334 66.6039 3.7334 67.6353C3.7334 68.6668 2.89765 69.503 1.8667 69.503C0.835744 69.503 4.50645e-08 68.6668 0 67.6353C-4.50645e-08 66.6039 0.835744 65.7677 1.8667 65.7677Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 65.7677C19.3249 65.7677 20.1606 66.6039 20.1606 67.6353C20.1606 68.6668 19.3249 69.503 18.2939 69.503C17.263 69.503 16.4272 68.6668 16.4272 67.6353C16.4272 66.6039 17.263 65.7677 18.2939 65.7677Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 65.7674C35.7519 65.7674 36.5876 66.6036 36.5876 67.635C36.5876 68.6665 35.7519 69.5027 34.7209 69.5027C33.69 69.5027 32.8542 68.6665 32.8542 67.635C32.8542 66.6036 33.69 65.7674 34.7209 65.7674Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 65.7674C51.965 65.7674 52.8008 66.6036 52.8008 67.635C52.8008 68.6665 51.965 69.5027 50.9341 69.5027C49.9031 69.5027 49.0674 68.6665 49.0674 67.635C49.0674 66.6036 49.9031 65.7674 50.9341 65.7674Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M1.8667 98.2644C2.89765 98.2644 3.7334 99.1005 3.7334 100.132C3.7334 101.163 2.89765 102 1.8667 102C0.835744 102 4.50645e-08 101.163 0 100.132C-4.50645e-08 99.1005 0.835744 98.2644 1.8667 98.2644Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M1.8667 49.3322C2.89765 49.3322 3.7334 50.1684 3.7334 51.1998C3.7334 52.2313 2.89765 53.0675 1.8667 53.0675C0.835744 53.0675 4.50645e-08 52.2313 0 51.1998C-4.50645e-08 50.1684 0.835744 49.3322 1.8667 49.3322Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 98.2644C19.3249 98.2644 20.1606 99.1005 20.1606 100.132C20.1606 101.163 19.3249 102 18.2939 102C17.263 102 16.4272 101.163 16.4272 100.132C16.4272 99.1005 17.263 98.2644 18.2939 98.2644Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M18.2939 49.3322C19.3249 49.3322 20.1606 50.1684 20.1606 51.1998C20.1606 52.2313 19.3249 53.0675 18.2939 53.0675C17.263 53.0675 16.4272 52.2313 16.4272 51.1998C16.4272 50.1684 17.263 49.3322 18.2939 49.3322Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 98.2647C35.7519 98.2647 36.5876 99.1008 36.5876 100.132C36.5876 101.164 35.7519 102 34.7209 102C33.69 102 32.8542 101.164 32.8542 100.132C32.8542 99.1008 33.69 98.2647 34.7209 98.2647Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 98.2647C51.965 98.2647 52.8008 99.1008 52.8008 100.132C52.8008 101.164 51.965 102 50.9341 102C49.9031 102 49.0674 101.164 49.0674 100.132C49.0674 99.1008 49.9031 98.2647 50.9341 98.2647Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M34.7209 49.3326C35.7519 49.3326 36.5876 50.1687 36.5876 51.2002C36.5876 52.2317 35.7519 53.0678 34.7209 53.0678C33.69 53.0678 32.8542 52.2317 32.8542 51.2002C32.8542 50.1687 33.69 49.3326 34.7209 49.3326Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M50.9341 49.3326C51.965 49.3326 52.8008 50.1687 52.8008 51.2002C52.8008 52.2317 51.965 53.0678 50.9341 53.0678C49.9031 53.0678 49.0674 52.2317 49.0674 51.2002C49.0674 50.1687 49.9031 49.3326 50.9341 49.3326Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 82.2029C67.9346 82.2029 68.7704 83.0391 68.7704 84.0705C68.7704 85.102 67.9346 85.9382 66.9037 85.9382C65.8727 85.9382 65.037 85.102 65.037 84.0705C65.037 83.0391 65.8727 82.2029 66.9037 82.2029Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 82.2029C84.3616 82.2029 85.1974 83.0391 85.1974 84.0705C85.1974 85.102 84.3616 85.9382 83.3307 85.9382C82.2997 85.9382 81.464 85.102 81.464 84.0705C81.464 83.0391 82.2997 82.2029 83.3307 82.2029Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 82.2029C100.789 82.2029 101.624 83.039 101.624 84.0705C101.624 85.102 100.789 85.9382 99.7576 85.9382C98.7266 85.9382 97.8909 85.102 97.8909 84.0705C97.8909 83.039 98.7266 82.2029 99.7576 82.2029Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 65.7674C67.9346 65.7674 68.7704 66.6036 68.7704 67.635C68.7704 68.6665 67.9346 69.5027 66.9037 69.5027C65.8727 69.5027 65.037 68.6665 65.037 67.635C65.037 66.6036 65.8727 65.7674 66.9037 65.7674Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 65.7677C84.3616 65.7677 85.1974 66.6039 85.1974 67.6353C85.1974 68.6668 84.3616 69.503 83.3307 69.503C82.2997 69.503 81.464 68.6668 81.464 67.6353C81.464 66.6039 82.2997 65.7677 83.3307 65.7677Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 65.7677C100.789 65.7677 101.624 66.6039 101.624 67.6353C101.624 68.6668 100.789 69.503 99.7576 69.503C98.7266 69.503 97.8909 68.6668 97.8909 67.6353C97.8909 66.6039 98.7266 65.7677 99.7576 65.7677Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 98.2644C67.9346 98.2644 68.7704 99.1005 68.7704 100.132C68.7704 101.163 67.9346 102 66.9037 102C65.8727 102 65.037 101.163 65.037 100.132C65.037 99.1005 65.8727 98.2644 66.9037 98.2644Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M66.9037 49.3322C67.9346 49.3322 68.7704 50.1684 68.7704 51.1998C68.7704 52.2313 67.9346 53.0675 66.9037 53.0675C65.8727 53.0675 65.037 52.2313 65.037 51.1998C65.037 50.1684 65.8727 49.3322 66.9037 49.3322Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 98.2644C84.3616 98.2644 85.1974 99.1005 85.1974 100.132C85.1974 101.163 84.3616 102 83.3307 102C82.2997 102 81.464 101.163 81.464 100.132C81.464 99.1005 82.2997 98.2644 83.3307 98.2644Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M83.3307 49.3322C84.3616 49.3322 85.1974 50.1684 85.1974 51.1998C85.1974 52.2313 84.3616 53.0675 83.3307 53.0675C82.2997 53.0675 81.464 52.2313 81.464 51.1998C81.464 50.1684 82.2997 49.3322 83.3307 49.3322Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 98.2644C100.789 98.2644 101.624 99.1005 101.624 100.132C101.624 101.163 100.789 102 99.7576 102C98.7266 102 97.8909 101.163 97.8909 100.132C97.8909 99.1005 98.7266 98.2644 99.7576 98.2644Z"
            fill="white" fill-opacity="0.08"></path>
          <path
            d="M99.7576 49.3322C100.789 49.3322 101.624 50.1684 101.624 51.1998C101.624 52.2313 100.789 53.0675 99.7576 53.0675C98.7266 53.0675 97.8909 52.2313 97.8909 51.1998C97.8909 50.1684 98.7266 49.3322 99.7576 49.3322Z"
            fill="white" fill-opacity="0.08"></path>
        </svg>
      </span>
    </div>
  </footer>
  <!-- ====== Footer Section End -->

  <!-- ====== Back To Top Start -->
  <a href="javascript:void(0)"
    class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
    <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
  </a>
  <!-- ====== Back To Top End -->

  <!-- ====== Made With Button Start -->
  <a href="https://tailgrids.com/"
    class="inline-flex items-center gap-[10px] py-2 px-[14px] rounded-lg bg-white shadow-2 fixed bottom-8 left-4 sm:left-9 z-[999]">
    <span class="text-base font-medium text-dark-3">
      Made with
    </span>
    <span class="w-px h-4 block bg-stroke"></span>
    <span class="block max-w-[88px] w-full">
      <img src="./assets/images/brands/tailgrids.svg" alt="tailgrids">
    </span>
  </a>
  <!-- ====== Made With Button End -->

  <!-- ====== All Scripts -->
  <script src="assets/js/main.js"></script>
</body>

</html>