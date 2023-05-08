<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ajout d'article</title>
	<!-- core:css -->
	<link rel="stylesheet" href="/assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="/assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ url('/Home') }}" class="sidebar-brand">
          Mada<span>News</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Principal</li>
          <li class="nav-item">
            <a href="{{ url('/Home') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Accueil</span>
            </a>
          </li>
		  <li class="nav-item">
            <a href="{{ url('/ToSearch') }}" class="nav-link">
              <i class="link-icon" data-feather="search"></i>
              <span class="link-title">Rechercher</span>
            </a>
          </li>
          <li class="nav-item nav-category">Article</li>
		  <li class="nav-item">
            <a href="{{ url('/ToAddArticle') }}" class="nav-link">
				<i class="link-icon" data-feather="plus-circle"></i>
              <span class="link-title">Ajouter un article</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
              Dark
            </label>
          </div>
        </div>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<ul class="navbar-nav">
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Profile
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="j{{ url('/Logout') }}" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Déconnexion</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Accueil</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title text-muted">Ajouter un article</h4>
								<form action="/addArticle" method="POST" class="forms-sample" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                      @if(!empty($categorie))
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Catégorie</label>
                                                <select name="categorie" class="form-control" id="select-categorie">
                                                    @foreach($categorie as $categories)
                                                        <option value="{{ $categories }}">{{ $categories }}</option>
                                                    @endforeach
                                                    <option value="another">Autre...</option>
                                                </select>
                                            </div>
                                        </div><!-- Col -->
                                        @else 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label id="label-categorie" class="control-label">Catégorie</label>
                                                <input type="text" name="categorie" id="input-categorie" class="form-control" placeholder="Catégorie">
                                            </div>
                                        </div><!-- Col -->
                                        @endif
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style="visibility: hidden;" id="label-categorie" class="control-label">Autre catégorie</label>
                                                <input type="hidden" id="input-categorie" class="form-control" placeholder="Catégorie">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
									<div class="form-group">
										<label for="exampleInputUsername1">Titre</label>
										<input type="text" name="titre" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Titre" required>
									</div>
                                    <div class="form-group">
										<label>File upload</label>
										<input type="file" name="image" class="file-upload-default">
										<div class="input-group col-xs-12">
											<input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" required>
											<span class="input-group-append">
												<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Résumé</label>
										<textarea name="resume" class="form-control" rows="6" required></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Contenu</label>
										<textarea class="form-control ckeditor" name="contenu" rows="6" required></textarea>
									</div>
                  <div class="form-group">
										<label for="exampleInputUsername1">Date de publication</label>
										<input type="datetime-local" name="datepublication" class="form-control" id="exampleInputUsername1" autocomplete="off" required>
									</div>
                  @if(session()->has('success'))
                    <div class="alert alert-icon-success" role="alert">
                      <i data-feather="alert-circle"></i>
                      {{ session('success') }}
                    </div>
                  @endif
									<button type="submit" class="btn btn-primary mr-2">Ajouter</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com" target="_blank">MadaNews</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="/assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="/assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="/assets/js/data-table.js"></script>
    <script src="/assets/js/file-upload.js"></script>
    <script src="/assets/ckeditor/ckeditor.js"></script>
  <script>
    function toggle() {
        const select = document.getElementById('select-categorie');
        const input = document.getElementById('input-categorie');
        if(select.value == "another") {
            document.getElementById('label-categorie').style = "visibility: visible";
            input.type = "text";
            input.name = "categorie";
            select.name = "none";
        }
        else {
            document.getElementById('label-categorie').style = "visibility: hidden";
            input.type = "hidden";
            input.name = "";
            select.name = "categorie";
        }
    }
    document.getElementById('select-categorie').addEventListener("change",toggle);
  </script>
	<!-- end custom js for this page -->
</body>
</html>
<!-- 











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJout d'article</title>
</head>
<body>
    <p><a href="{{ url('/Logout') }}">Déconnexion</a> - <a href="{{ url('/Home') }}">Accueil</a></p>
    <h1>Ajouter un article</h1>
    <form action="{{ url('/addArticle') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if(!empty($categorie))
            Catégorie : <select name="categorie" id="select-categorie">
                @foreach($categorie as $categories)
                    <option value="{{ $categories }}">{{ $categories }}</option>
                @endforeach
                <option value="another">Autre...</option>
            </select>
            <input type="hidden" name="none" id="input-categorie">
        @else 
            Catégorie : <input type="text" name="categorie" placeholder="Catégorie">
        @endif<br>
        Titre : <input type="text" name="titre" placeholder="Titre"><br>
        Image : <input type="file" name="image" required><br>
        Resume : <textarea name="resume"></textarea><br>
        Contenu : <textarea name="contenu"></textarea><br>
        Date publication : <input type="datetime-local" name="datepublication"><br>
        <button type="submit">Enregistrer</button>
        @if(session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
    </form>
</body>
<script>
    function toggle(select, input) {
        if(select.value == "another") {
            input.name = "categorie";
            input.type = "text";
            input.placeholder = "Catégorie";
            input.required = true;
            select.name = "none";
        }
        else {
            input.type = "hidden";
            input.name = "none";
            input.placeholder = "";
            input.required = false;
            select.name = "categorie";
        }
    }
    document.getElementById("select-categorie").addEventListener("change",function() {
        toggle(document.getElementById("select-categorie"),document.getElementById("input-categorie"));
    });
</script>
</html> -->