<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
     <a class="navbar-brand" href="/" >TODO LIST</a>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link {{ Request::is('/')?'active':''}}" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/')?'active':''}}" href="/Todo/create">Create</a>
      
    
  </div>
</nav>