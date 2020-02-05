<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Jamilapub</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Tableau de bord</li>
            <li class=active><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i> <span>Tableau de bord</span></a></li>
            <li class="menu-header">Début</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Annonces</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('post.index')}}">liste des Annonces</a></li>
                <li><a class="nav-link" href="{{route('post.semble_supprime')}}">Annonces supprimées</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard"></i> <span>Catégorie</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('category.index')}}">liste des catégories</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bookmark"></i> <span>Tag</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('tag.index')}}">liste des Tags</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map-marker-alt"></i> <span>Région</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('region.index')}}">liste des régions</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map-marker"></i> <span>Ville</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('ville.index')}}">liste des villes</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Utilisateurs</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('user.index')}}">liste des utilisateurs</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span>Messages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('message.index')}}">liste des messages</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span>Images</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('upload.index')}}">Images des annonces</a></li>
              </ul>
            </li>

        </aside>
      </div>