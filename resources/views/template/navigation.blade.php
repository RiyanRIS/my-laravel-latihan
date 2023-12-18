 <!-- Start::nav -->
 <nav class="main-menu-container nav nav-pills flex-column sub-open">
  <div class="slide-left" id="slide-left">
      <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
          viewBox="0 0 24 24">
          <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
      </svg>
  </div>
  <ul class="main-menu">
      <!-- Start::slide__category -->
      <li class="slide__category"><span class="category-name">Main</span></li>
      <!-- End::slide__category -->

      <!-- Start::slide -->
      <li class="slide">
          <a href="{{ route('home') }}" class="side-menu__item">
              <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                  viewBox="0 0 24 24" width="24px" fill="#000000">
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path
                      d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
              </svg>
              <span class="side-menu__label">Dashboard</span>
          </a>
      </li>

      <li class="slide">
        <a href="{{ route('home') }}" class="side-menu__item">
            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path
                    d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
            </svg>
            <span class="side-menu__label">Pegawai</span>
        </a>
    </li>
      <!-- End::slide -->

  </ul>
  <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
          fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
          <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
          </path>
      </svg></div>
</nav>
<!-- End::nav -->