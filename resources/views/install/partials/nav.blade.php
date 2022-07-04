<ul class="nav nav-pills nav-justified">
  <li role="presentation" @if($active == 'install') class="active" @endif>
    <a href="#">Instruções</a>
  </li>
  <!-- <li role="presentation" @if($active == 'server') class="active" @endif>
    <a href="#">Server Requirements</a>
  </li> -->
  <li role="presentation" @if($active == 'app_details') class="active" @endif>
    <a href="#">Detalhes da aplicação</a>
  </li>
  <li role="presentation" @if($active == 'success') class="active" @endif>
    <a href="#">Sucesso</a>
  </li>
</ul>
<br/>