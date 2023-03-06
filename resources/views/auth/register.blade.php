@extends('layouts.authuser')
@section('content')
    
<div class="form">
  
    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Register</a></li>
      <li class="tab"><a href="#login">Log In</a></li>
    </ul>
    
    <div class="tab-content">
        {{-- signup --}}
      <div id="signup">   
        <h1>Selamat Datang di Fashion Shop!</h1>
        
        <form action="/register" method="post">
        
        <div class="top-row">
          <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" />
          </div>
      
          <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
        </div>

        <div class="field-wrap">
          <label>
            Email<span class="req">*</span>
          </label>
          <input type="email"required autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
          <label>
            Password<span class="req">*Minimum 8 characters!</span>
          </label>
          <input type="password"required autocomplete="off"/>
        </div>
        
        <button type="submit" class="button button-block"/>Register</button>
        <p style="text-align: center;color: white;font-size: 14px;">Already registered? <a href="/login">Login</a></p>
        </form>

      </div>
      
      {{-- login --}}
      @include('auth.login')
      
    </div><!-- tab-content -->
    
</div> <!-- /form -->
@endsection
