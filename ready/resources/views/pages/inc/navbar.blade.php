
<nav class="navbar navbar-expand-lg" style="height:70px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> <i class="fa fa-navicon"></i> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Techconsult</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
         <!--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('services')}}">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('business')}}">Business Partnership</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                    </li>
        
      </ul>
      <form>
      <input type="button" class="btn btn-success" value="Login" onclick="location.href = '{{url('login')}}';">
      <input type="button" class="btn btn-success" value="Register" onclick="location.href = '{{url('register')}}';">
      </form>
    </div>
  </nav>