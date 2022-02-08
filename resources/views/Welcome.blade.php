@extends('layouts.app')
<h1>User Login Form</h1>
<form>
    <!-- Email input -->
    <div class="form-control">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-control">
        <label for="exampleFormControlInput2">Password</label>
        <input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Enter the password">
      </div>
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-control">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        </div>
      </div>
  
      <div class="form-control">
      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
      </div>
    </div>
  
    <!-- Submit button -->
    <div class="form-control">
    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </div>
</form>