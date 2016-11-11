<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Registration | ecp</title>

   <link rel="stylesheet" href="assets/css/register.css" media="screen" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
<div class="container">
<ul class="progressbar">
<li class="active">Profile</li>
<li>Employment</li>
<li>Residence</li>
<li>Household</li>	
</ul>

</div>
<h2> Profile</h2> 
<fieldset>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
 <div class="form-group">

 <p><label >Nationality</label>
         <select name="citizenship" autofocus required>
        <option value="" selected>(please select:)</option>
        <option value="kenyan">Kenyan</option>
        <option value="ugandan">Ugandan</option>
        <option value="american">American</option>
        <option value="tanzanian">Tanzanian</option>
         </select>	</p>
   <div class="top-margin">
<label class="center">Identification <span class="text-danger"></span></label><br>
<input type="text" class="form-control" name="Identification" placeholder="Enter National ID or Passport No." required >
</div>
 <div class="top-margin">
<label class="center">Last Name <span class="text-danger"></span></label><br>
<input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required >
</div>
 <div class="top-margin">
<label class="center">First Name <span class="text-danger"></span></label><br>
<input type="text" class="form-control" name="fname" placeholder="Enter First Name" required >
</div>
    <p><label >Gender </label>
        <input type="radio" name="gendertype" value="Male" />Male
        <input type="radio" name="gendertype" value="Female" /> Female
		</p>
        <p><label >Marital Status</label>
           <select name="marital_status" autofocus required>
        <option value="select" selected>(please select:)</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="divorced">Divorced</option>
        <option value="widow(er)">Widow(er)</option>
         </select>	</p>
         <div class="form-group">
 <label >State Special Need</label><br>
 <textarea name="need" required="required" class="form-control" rows="4" placeholder="Enter Special Need or Condition" ></textarea >
   </div>
 <div class="top-margin">
<label class="center">Mobile Number <span class="text-danger"></span></label><br>
<input type="text" class="form-control" name="lname" placeholder="Enter Mobile Number" required >
</div>
<div class="top-margin">
<label class="center">Email Address<span class="text-danger"></span></label><br>
<input type="text" class="form-control" name="lname" placeholder="Enter Email Address" required >
</div>
<div class="top-margin">
<label class="center">Password <span class="text-danger"></span></label><br>
<input type="password" class="form-control" name="password" placeholder="Enter Password" required >
</div>
<div class="top-margin">
<label class="center">Confirm Password <span class="text-danger"></span></label><br>
<input type="password" class="form-control" name="password" placeholder="Confirm Password" required >
</div>
<div class="col-lg-8">
    <label class="checkbox">
		<input type="checkbox" required> 
	I agree to the <a href="#">Terms and Conditions</a>
	</label>                        
</div>
 </div> 
 </form>
 <div class="col-sm-6">
 <button type="button" name="next"  class="btn btn-success ">Continue</button>
 </div>
<h2>Employment</h2>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="form-row">
                <label>
                    <span>Status</span>
                    <label class="radio-inline"><input type="radio" name="optradio">Employed</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Self-Employed</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Unemployed</label>
    
                </label>
            </div><br>
    <label for='sector' >Sector</label>
    <select name="sector" autofocus required>
    <option value="select" selected>(please select:)</option>
    <option>Government</option>
    <option>Private</option>
    </select>
    <div class="form-group">
 <label >Postal Address</label><br>
 <textarea name="address" required="required" class="form-control" rows="4" placeholder="Enter  postal address " ></textarea >
   </div>
 <div class="top-margin">
<label class="center">Building Name <span class="text-danger"></span></label><br>
<input type="password" class="form-control" name="building" placeholder="Enter Building Name or Office Block" required >
</div>
<div class="top-margin">
<label class="center">Road<span class="text-danger"></span></label><br>
<input type="password" class="form-control" name="road" placeholder="Enter street or road or avenue" required >
</div>
<div class="top-margin">
<label class="center">Office Number<span class="text-danger"></span></label><br>
<input type="password" class="form-control" name="office" placeholder="Enter floor or office number" required >
</div>
</form>
<button type="button" name="next"  class="btn btn-success ">Continue</button>
<h2>Residence</h2>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
 <div class="form-group">
 <label >Postal Address</label><br>
 <textarea name="address" required="required" class="form-control" rows="4" placeholder="Enter  postal address " ></textarea >
   </div><br>
   <label for='county' >County:</label>
    <select  >
    <option>BARINGO</option>
    <option>BOMET</option>
    <option>BUNGOMA</option>
    <option>BUSIA</option>
    <option>ELGEYO MARAKWET</option>
    <option>EMBU</option>
    <option>GARISSA</option>
    <option>HOMA BAY</option>
    <option>ISIOLO</option>
    <option>KAJIADO</option>
    <option>KAKAMEGA</option>
    <option>KERICHO</option>
    <option>KIAMBU</option>
    <option>KILIFI</option>
    <option>KIRINYAGA</option>
    <option>KISII</option>
    <option>KISUMU</option>
    <option>KITUI</option>
    <option>KWALE</option>
    <option>LAMU</option>
    <option>MACHAKOS</option>
    <option>MAKUENI</option>
    <option>MANDERA</option>
    <option>MERU</option>
    <option>MIGORI</option>
    <option>MARSABIT</option>
    <option>MOMBASA</option>
    <option>MURANG'A</option>
    <option>NAIROBI</option>
    <option>NAKURU</option>
    <option>NANDI</option>
    <option>NAROK</option>
    <option>NYAMIRA</option>
    <option>NYANDARUA</option>
    <option>NYERI</option>
    <option>SAMBURU</option>
    <option>SIAYA</option>
    <option>TAITA TAVETA</option>
    <option>TANA RIVER</option>
    <option>THARAKA NITHI</option>
    <option>TRANS NZOIA</option>
    <option>TURKANA</option>
    <option>UASIN GISHU</option>
    <option>VIHIGA</option>
    <option>WAJIR</option>
    <option>WEST POKOT</option>
    </select>
    <br>
    &nbsp;&nbsp;
    <br>
    <label for='sub county' >Sub- County:</label>
    <select  >
    <option>NAKURU</option>
    <option>NAIVASHA</option>
    <option>GILGIL</option>
    <option>MOLO</option>
    </select>
    <br>
    &nbsp;&nbsp;
    <br>
   
    <label for='ward' >Ward:</label>
   <select>
  <option value="nakuru">NAKURU</option>
  <option value="naivasha">NAIVASHA</option>
  <option value="gilgil">GILGIL</option>
  <option value="molo">MOLO</option>
  </select>
    <br>
    &nbsp;&nbsp;
    <br>
    <label for='location' >Location:</label>
   <select>
  <option value="nakuru">NAKURU</option>
  <option value="naivasha">NAIVASHA</option>
  <option value="gilgil">GILGIL</option>
  <option value="molo">MOLO</option>
  </select>
    <br>
    &nbsp;&nbsp;
    <br>
    <label for='sub-location' >Sub-Location:</label>
   <select>
  <option value="nakuru">NAKURU</option>
  <option value="naivasha">NAIVASHA</option>
  <option value="gilgil">GILGIL</option>
  <option value="molo">MOLO</option>
  </select>
    <br>
    &nbsp;&nbsp;
    <br>
    <p><label>House Type:</label>
           <select name="marital_status" autofocus required>
        <option value="" selected>(please select:)</option>
        <option value="single">Estate</option>
        <option value="married">Market Center</option>
        <option value="divorced">Apartments</option>
        <option value="widow(er)">Homestead</option>
        <option value="single">Bulla</option>
        <option value="married">Manyatta</option>
        <option value="divorced">House</option>
        <option value="widow(er)">Court</option>
         </select>	</p>
 <div class="top-margin">
<label class="center">Road :<span class="text-danger"></span></label>
<input type="road" class="form-control" name="road" placeholder="Enter street or road or avenue" required >
</div>
<div class="top-margin">
<label class="center">Building Type :<span class="text-danger"></span></label>
<input type="building" class="form-control" name="road" placeholder=" Enter if it is 3 floor or bungalow" required >
</div>
 <div class="top-margin">
<p><label >House Number :</label>
<input type="text" name="house" id="status" required autocomplete="off" autofocus pattern="[A-Za-z']{3,12}" placeholder="House Number" /></p>
</div>
<div class="top-margin">
<p><label >Door Number :</label>
<input type="text" name="door" id="status" required autocomplete="off" autofocus pattern="[A-Za-z']{3,12}" placeholder="Door Number" /></p>
</div>

</form>
<div class="col-sm-6">
<button type="button" name="next"  class="btn btn-success ">Continue</button>
</div>
<h2>Household</h2>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
<div class="top-margin">
<p><label >Cluster Code :</label>
<input type="text" name="cluster" id="status" required autocomplete="off" autofocus pattern="[A-Za-z']{3,12}" placeholder="Enter KEN47/6/1/1/1/C4/H1" /></p>
</div>
<br>
<table border="1" cellpadding="5" cellspacing="5">
<tr>
<th>Photo</th>
<th>Identification</th>
<th>Full Name</th>
<th>Gender</th>
<th>Special Need</th>
<th>Contacts</th>
<th>Occupation</th>
<th>Institution</th>
<th>Type of Relationship</th>
</tr>
</form>

<!--div class="col-sm-6">
<button type="button" name="submit"  class="btn btn-success ">Submit</button>
</div-->
<script src="assets/js/scripts.js"></script>
</body>
</html>