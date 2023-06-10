<div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/home">Home</a>
    <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="/profile">Profile</a>
    <a class="nav-link {{ request()->is('student') ? 'active' : '' }}" href="/student">Student</a>
    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
  </div>