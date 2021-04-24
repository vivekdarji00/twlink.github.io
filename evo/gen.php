
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- CSS Tag -->
    <link href="https://toonshub.github.io/beta/stream/style.css" rel="stylesheet" type="text/css" />
    <script src="https://toonshub.github.io/beta/stream/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css' rel='stylesheet' type="text/css"/>

<style>
table {
  width: 100%;
  border-collapse: collapse;
}
input{background-color:white;border:none;}
tr{
  border-bottom: 1px solid #878787; height:40px;}
  button.download{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;color:#fff;background-color:#0069d9;border-color:#0062cc;box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}
  input[type=text] {
  width: 100%;
  max-width: 400px;
  padding: 8px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>
    <title>Generate Link – ToonStream</title>
   </head>
<body class="min-vh-100 d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.toonshub.ml/" title="ToonsHub">
                <img src="https://toonshub.github.io/beta/logo.png" height="30"
                    class="lazyload d-inline-block align-top" alt="ToonsHub">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="navbar-nav my-3 my-lg-0 order-2">
                    <form id="quick_search_form" class="navbar-form input-group input-group-sm"
                        action="https://www.toonshub.ml/search" method="get">
                        <input type="text" value="" name="q" id="search" class="form-control"
                            placeholder="[ToonsHub] Search..." autocomplete="off">
                    </form>
                </div>
                <ul class="nav navbar-nav mr-auto order-1">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.toonshub.ml"><i class="fas fa-home fa-fw"></i> Home</a>
                    </li>
                        <a class="nav-link" href="gen.php"><i class="fa fa-spin fa-cog" aria-hidden="true"></i> Generate Link</a>



                </ul>
                <ul class="navbar-nav my-2 my-lg-0 mx-lg-2 order-3">

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#settings" title="Settings">
                            <i class="fas fa-cloud-moon fa-fw"></i> <span class="d-lg-none">Choose Theme</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
<br>
	<div class="card">
  
  <div class="card-body">
    <center>
    <h5 class="card-header">Convert</h5><br/>
    <div class="card-header"><label>URL</label>
					<form action="" method="POST">
			<input type="text" size="80" name="url" value="" placeholder="Paste your link here">
			<button class="btn btn-primary" input type="submit" value="Generate" name="submit" style="margin: 4px;"><i class="fa fa-cog fa-spin" aria-hidden="true"></i> Generate</button>
		</form></div><br/><br/><br/>


<h5 class="card-header">Your Generated Link</h5><br/>
    <div class="card-header"><input type="text" size="80" height="200px" value="" placeholder="Your Generated Link will Appear Here" id="myInput">
			<button onclick="CopyToClipboard()" class="btn btn-primary" style="margin: 4px;"><i class="fa fa-clipboard" aria-hidden="true"></i> Copy Link</button>
		</form>
</div>
    </center>
  </div>
</div>
<script>
function CopyToClipboard() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>
	<script async="async" type="text/javascript" src="https://toonshub.github.io/beta/stream/menu.js"></script>
	
     <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="settingsLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Settings</h6>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="align-self-center font-weight-bold">Dark Theme</div>
                        <div class="align-self-center">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                                <label class="custom-control-label" for="darkSwitch" id="darkSwitchText">on/off</label>
                            </div>
                        </div>
                    </div>
                    <small>Dark theme turns the light surfaces of the page dark, creating an experience ideal for night.
                        Try it out!
                        Your Dark theme setting will apply to this browser only.</small>
                </div>
            </div>
        </div>
    </div>
        <div class="mt-auto bg-light">
        <div class="container py-3">
            <p class="text-center text-muted">ToonStream is affiliated to <a href="/">ToonsHub</a>. And does not host any files on it’s own . All files or contents are hosted on Google Drive and other sites. <a href="/">ToonsHub</a> does not accept responsibility for contents
                hosted on third party websites. We just index those links which are already available in internet.</p>
            <p class="m-0 text-center text-muted">Copyright &copy; 2020 <a class="skul"
                    href="/">ToonsHub</a></p>
        </div>
    </div>
</body>
</html>
