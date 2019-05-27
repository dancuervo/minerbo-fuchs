<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.analytics')
    @include('partials.head')
</head>

@yield('content')
    
<div class="container">
    <!-- Insertar Footer -->
  <footer class="bg-light py-5">
    <div class="small text-center text-muted">Copyright &copy; 2019 - 13º Andar - www.13andar.com</div>
    </div>
  </footer>

@include('partials.footer-scripts')

</html>