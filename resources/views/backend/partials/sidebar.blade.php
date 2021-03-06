<div class="sidebar-menu">
   <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
       <!--<img id="logo" src="" alt="Logo"/>-->
   </a> </div>
  <div class="menu">
    <ul id="menu" >
      <li id="menu-home" ><a href="{{route('backend.index')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
      <li><a href="{{route('backend.produtos')}}"><i class="fa fa-cogs"></i><span>Produtos</span><span class="fa fa-angle-right" style="float: right"></span></a>
        <ul>
        <li><a href="{{route('backend.produtos.create')}}">Cadastro</a></li>
          <li><a href="portlet.html">Importação</a></li>
        </ul>
      </li>
      <li><a href="{{route('backend.grupos')}}"><i class="fa fa-cogs"></i><span>Grupos</span><span class="fa fa-angle-right" style="float: right"></span></a>
        <ul>
        <li><a href="{{route('backend.grupos.create')}}">Cadastro</a></li>
        </ul>
      </li>
      <li id="menu-comunicacao" ><a href="{{route('backend.promocoes')}}"><i class="fa fa-book nav_icon"></i><span>Promoções</span><span class="fa fa-angle-right" style="float: right"></span></a>
        <ul id="menu-comunicacao-sub" >
          <li id="menu-mensagens"><a href="{{route('backend.promocoes.create')}}">Cadastro de Promoções</a>
          </li>
          <li id="menu-mensagens"><a href="{{route('backend.unidades')}}">Cadastro de Unidades</a>
          </li>
        </ul>
      </li>
      <li id="menu-academico" ><a href="{{route('backend.usuarios')}}"><i class="fa fa-file-text"></i><span>Usuários</span><span class="fa fa-angle-right" style="float: right"></span></a>
        <ul id="menu-academico-sub" >
          <li id="menu-academico-boletim" ><a href="{{route('backend.usuarios.create')}}">Cadastro</a></li>
        </ul>
      </li>
       <li><a href="{{route('backend.configuracoes')}}"><i class="fa fa-cog"></i><span>Configurações</span></a>
       </li>
    </ul>
  </div>
</div>
