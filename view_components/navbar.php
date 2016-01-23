<style type="text/css">
#header-container {
  width: 100%;
  height: 100px;
  background: #0c234b;
  border-top: #ab0520 solid 20px;
  position: relative;
}

#header {
    margin-right: auto;
    margin-left: auto;
    width: 900px;
}

#page-title {
  color: white;
  text-align: center;
}

#header-container #header {
    position: relative;
}

#nav-bar-container {
  width: 100%;
  height: 45px;
  background: rgba(30,30,30,0.8);
  text-align: center;
  padding-top: 3px;
}

#nav-bar-place-holder {
  width: 100%;
  height: 45px;
}

#nav-bar {
  margin-right: auto;
  margin-left: auto;
  min-width: 900px;
}

.nav-bar-link {
  height: 40px;
  margin: 0px;
  margin-left: 4px;
  padding: 8px;
  padding-left: 45px;
  padding-right: 45px;
  color: #dcdcdc;
  font-size: 16px;
  font-weight: 700;
  letter-spacing: 1px;
  text-decoration: none;
  text-transform: uppercase;
  cursor: auto; 
}

.nav-bar-link:hover {
  background: #666666;
  text-shadow: none;
  color: white;
  text-decoration: none;
}

.nav-link-separator {
  border-right: 1px solid white;
  display: inline;
  margin: 2px;
}

#nav-bar-container.affix {
  top:0px;
}

</style>

<header class="page-row">
  <div id="header-container">
    <div id="header">
      <h1 id="page-title">Website Name</h1>
    </div>
  </div>
</header>

<!-- NAVBAR -->
<!--  -->
<div id="nav-bar-place-holder">
<div id="nav-bar-container" data-spy="affix" data-offset-top="100">
  <div id="nav-bar">
    <div class="nav-link-separator"></div>
    <div class="nav-link-separator"></div>
    <a class="nav-bar-link btn primary-btn" href="#">Home</a>
    <div class="nav-link-separator"></div>
    <div class="nav-link-separator"></div>
    <a class="nav-bar-link btn primary-btn" href="#">About Us</a>
    <div class="nav-link-separator"></div>
    <div class="nav-link-separator"></div>
    <a class="nav-bar-link btn primary-btn" href="#">How It Works</a>
    <div class="nav-link-separator"></div>
    <div class="nav-link-separator"></div>
    <a class="nav-bar-link btn primary-btn" href="#">Login</a>
    <div class="nav-link-separator"></div>
    <div class="nav-link-separator"></div>
  </div>
</div>
</div>
<!-- END NAVBAR -->
