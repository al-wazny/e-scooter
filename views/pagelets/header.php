<html>
<head>
<link rel="stylesheet" href="../../assets/css/styles.css">
<style>
  .dropbtn {
  background-color: white;
  color: black;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  padding: 16px;
  border-radius: 24px;
  font-size: 16px;
   margin-top: 10px;
   width: 200%;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left: 120px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  border-radius: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight:lighter;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #525452;
}
svg{
  margin-left: 45px;
  margin-top: 10px;
}
.CompanyLogo {
  text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  visibility: visible;
  font: inherit;
  color: #bab9bd;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  min-width: 100px;
  text-decoration: none;
  margin-right: 3cm;
}
.bar{
  display: flex;
  flex-direction: row;
}
 .Log{
  display: flex;
  flex-direction: row;
  position: relative;
  left: 35cm;
  }
  .Log a {
    color: #e6e6e6;
    text-align: center;
    width: 140px;
    padding: 15px 30px;
    height: 50;
    margin-right: 20px;
    margin-top: 30px;
    text-decoration: none;
    font-size: 17px;
    border-radius: 25px;
}
.Log a:hover {
    background-color: azure;
    color: black;
}
.Log a.login{
  display:inline;
  position:   relative;
  background-color: inherit;
  margin-left: 10px;
}
.Log a.registrate{
  background-color: rgb(34, 65, 236);

}
</style>
</head>
<body>
  <div class="bar">
    <div class="CompanyLogo">
      <a class="CompanyLogo" href="../index.php"> 
        <img class="CompanyLogo" src="../../assets/Images/AtomLogo.png" alt="Company Logo" width="200">
      </div>
    </a>
    <div class="Log">
      <a class="login" href="pages/login" target="_top">Login</a>
      <a class="registrate" href="../pages/registrate.php " target="_top">Registrate</a>
    </div>
  </div>
 

    
    <div class="dropdown">
      <button class="dropbtn">Marken</button>
      <div class="dropdown-content">
    <svg color="" width="50px" height="50px" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
      <path d="M333,125C333,102,352,83,375,83H572L738,584C742,583,746,583,750,583C842,583,917,658,917,750C917,842,842,917,750,917C658,917,583,842,583,750C583,691,614,640
      ,659,610L642,559L487,792H411C393,864,328,917,250,917C158,917,83,842,83,750C83,658,158,583,250,583C328,583,393,636,411,708H442L609,459L512,167H375C352,167,333,148,333,125zM322,708C308,
      683,281,667,250,667C204,667,167,704,167,750C167,796,204,833,250,833C281,833,308,817,322,792H250C227,792,208,773,208,750C208,727,227,708,250,708H322zM710,763L688,695C675,709,667,729,667,750C667,
      796,704,833,750,833C796,833,833,796,833,750C833,710,
      805,676,767,668L790,737C797,759,785,782,763,790C741,797,718,785,710,763z"></path></svg>
  <a href="#">Grover</a>
  <a href="#">Segway</a>
  <a href="#">SoFlow</a>
  <a href="#">Xiaomi</a>
</div>
</div>
</htm>
</body>
