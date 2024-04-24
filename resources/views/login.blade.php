<x-header/>
<div class="container mt-5 mb-5">
    <h3>Login</h3>
    <?php if(session('error')){?>
       <div class="alert alert-danger"><?php echo session('error'); ?></div>
        <?php }?>
<form action = "{{ URL('/login') }}" method ="post">
    @csrf
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name = "Password"class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<x-footer/>