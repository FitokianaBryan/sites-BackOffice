<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inscription</title>
	<!-- core:css -->
	<link rel="stylesheet" href="/assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="/assets/css/demo_5/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="{{ url('/') }}" class="noble-ui-logo d-block mb-2">Mada<span>News</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">Créer un compte gratuit.</h5>
                    <form class="forms-sample" action="/Signup" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Nom</label>
                                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Prénom</label>
                                    <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Mot de passe">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Retapez le mot de passe</label>
                        <input type="password" name="password_repeat" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Retapez le mot de passe">
                      </div>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          S'inscrire
                        </button>
                      </div>
                      @if(session()->has('success'))
                            <div class="alert alert-icon-success" role="alert">
								<i data-feather="alert-circle"></i>
								{{ session('success') }}
							</div>
                        @elseif(session()->has('Error'))
                            <div class="alert alert-icon-danger" role="alert">
								<i data-feather="alert-circle"></i>
								{{ session('Error') }}
							</div>
                            <p></p>
                        @endif
                      <a href="{{ url('/') }}" class="d-block mt-3 text-muted">Déjà inscrit? Connectez-vous</a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="/assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>