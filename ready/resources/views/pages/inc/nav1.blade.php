
<nav class="navbar is-primary" role="navigation" aria-label="dropdown navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#"style="font-weight:bold;">Techconsult</a>
            <span class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
            <a onclick="location.href='{{url('about')}}';" class="navbar-item ">About</a>
            <a onclick="location.href='{{url('services')}}';" class="navbar-item ">Services</a>
            <a onclick="location.href='{{url('business')}}';" class="navbar-item ">Business Partnership</a>
            <a  onclick="location.href='{{url('contact')}}';" class="navbar-item ">Contact us</a>
                <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">More</a>
                <div class="navbar-dropdown is-boxed">
                <a class="navbar-item" href="{{url('about')}}">
                         About
                       </a>
                       <a class="navbar-item"  href="{{url('services')}}">
                         Jobs
                       </a>
                       <a class="navbar-item"  href="{{url('contact')}}">
                         Contact
                       </a>
                       <hr class="navbar-divider">
                       <a class="navbar-item">
                         Report an issue
                       </a>
                     </div>
               
                </div>

               <a class="button is-info is-inverted is-outlined" onclick="location.href='{{url('login')}}';"> <strong>Login</strong></a>
               <a class="button is-info is-inverted is-outlined" onclick="location.href='{{url('register')}}';"> <strong>Register</strong></a>
            </div>
        </div>
    </div>   
</nav>
<script type="text/javascript">
        (function(){
          var burger= document.querySelector('.burger');
          var nav = document.querySelector('#'+burger.dataset.target);
          burger.addEventListener('click',function(){
              burger.classList.toggle('is-active');
              nav.classList.toggle('is-active');
          });
        })();
</script>
