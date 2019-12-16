


    <nav class="navbar navbar-expand-lg navbar-light bg-light mkd-navbar sticky-top">
        <a class="navbar-brand mkd-logo" href="/"><img src="{{asset('mkd_design/assets/images/logo/logo.png')}}" alt="logo of Make up dunia"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li>
              <form>
                {{-- Search --}}
                <div class="input-group mt-2 mb-2 mr-2">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                  </div>
              </form>
            </li>
            <li class="nav-item active">
              <a class="nav-link mt-1" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link   mt-1" href="/artist-showcase">Artist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link   mt-1" href="/login">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  d-flex flex-row mt-1" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="font-weight-bold" name="user-name"> Arpita Manna</p>
                <img src="{{asset('mkd_design/assets/images/logo/favicon.png')}}" alt="logo of Make up dunia" width="35" height="35" class="d-inline-block align-center">
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/bookings">Bookings</a>

                <a class="dropdown-item" href="/profile/edit">Edit Profile</a>
                <a class="dropdown-item" href="/pricing">Edit Pricing</a>
                <a class="dropdown-item" href="/password">Change Password</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
