<!DOCTYPE html>
<html>




<head>
    <title> Get a covid test </title>
    <script src="https://kit.fontawesome.com/327625b7b5.js" ></script>
      <link rel="stylesheet"  href=".\css\orderKit.css">
</head>


<body>
  <p class="logo"><img src=".\images\kent-logo.jpg" alt="Kent-logo" width="50" height="32">  Kent borough council</p>


  <hr class="new4">
   <h3>Get a covid test </h3>
  <hr class="new4">


<h4>Get a free NHS test to check if you have coronavirus</h4>

<p>You can have a swab test to check if you have coronavirus (COVID-19) now.</p>

<h4>Who can get a free test</h4>
<p>
You can only get a free NHS test if at least one of the following applies:<br>
•	you have a high temperature<br>
•	you have a new, continuous cough<br>
•	you’ve lost your sense of smell or taste or it’s changed<br>
•	you’ve been asked to get a test by a local council<br>
•	you’re taking part in a government pilot project<br>
•	you’ve been asked to get a test to confirm a positive result<br>
You can also get a test for someone you live with if they have symptoms.<br></p>

<h4>If you’re going into hospital</h4>
<p>You may need to get tested if you’re due to have surgery or a procedure.
The hospital will arrange this for you. Contact your hospital department if you have any questions. </p>

<h4>Who cannot get a free test</h4><p>
You cannot use this service to get a test if:<br>
•	you’ve come to the UK from a high-risk country<br>
•	you’re planning to leave the country<br>
•	your employer or school has asked you to get a test but you have no symptoms<br>
You can pay for a private test.</p>

<h4>When to get a test</h4>
<p>If you have symptoms, get a test as soon as possible.
Book a visit to a test site to have the test today. Test sites are open 7 days a week.
Order a home test kit if you cannot get to a test site.<br>

You need to get the test done in the first 8 days of having symptoms.
On days 1 to 7, you can get tested at a site or at home. If you’re ordering a home test kit on day 7, do it by 3pm.
On day 8, you need to go to a test site - it’s too late to order a home test kit
</p>


<h4>Get help applying</h4>

<p>If no tests are available online, do not call helplines to get a test. No extra tests are available through the helplines.
If you have other problems using the online service, call:	119 , Lines are open 7am to 11pm.</p>

<h4>Stay at home if you have symptoms</h4>
<p>If you’re getting a test because you have symptoms, you and anyone you live with must self-isolate until you get your result. This also applies to anyone in your support bubble (where someone who lives alone - or just with their children - can meet people from 1 other household).
You must also self-isolate if you cannot get a test.
</p>

<h4>What the test involves</h4>
<p>The test involves taking a swab of the inside of your nose and the back of your throat, using a long cotton bud.
You can do the swab yourself (if you are aged 12 or over) or someone can do it for you. Parents or guardians have to swab test children aged 11 or under.
</p>

<h4>Getting a test for someone else</h4>
<p>If other people you live with have symptoms, you can order tests for up to 3 of them.
If you’re applying for someone who’s 13 or over, check that they’re happy for you to get a test for them.
</p>

<h4>If you need medical advice about your symptoms</h4>
<p>Get help at: NHS 111 online coronavirus service<br>Call 999 if you feel very unwell or think there’s something seriously wrong.</p>




<div class="getkit">
  <div class="container">

  	<div class="header">

  		<h2>  Order Your Home Test Kit</h2>

  	</div>


  	<form id="form" class="form">

  		<div class="form-control">

  			<label for="forname">Forname</label>

  			<input type="text" placeholder="Mohamed" id="forname" />
  			<i class="fas fa-check-circle"></i>
  			<i class="fas fa-exclamation-circle"></i>
  			<small>Error message</small>
  		</div>

      <div class="form-control">
        <label for="forname">Surname</label>
        <input type="surname" placeholder="Messadi" id="surname"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
    <!-- add Adress -->

    <div class="form-control">
      <label for="forname">House Number</label>
      <input type="houseno" placeholder="21" id="houseno"/>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>

    <div class="form-control">
      <label for="forname">Street Name</label>
      <input type="street" placeholder="Camden road" id="street"/>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>

    <div class="form-control">
      <label for="forname">Postcode (space included)</label>
      <input type="postcode" placeholder="TN13 3AY" id="postcode"/>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>

    <div class="form-control">
      <label for="forname">City</label>
      <input type="city" placeholder="Tonbridge" id="city"/>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
    </div>



  <!-- End of add Adress -->
  		<div class="form-control">
  			<label for="forname">Email</label>
  			<input type="email" placeholder="mmessadi@yahoo.com" id="email" />
  			<i class="fas fa-check-circle"></i>
  			<i class="fas fa-exclamation-circle"></i>
  			<small>Error message</small>
  		</div>



  		<div class="form-control">
  			<label for="forname">Phone Number</label>
  			<input type="phone" placeholder="0123456789" id="phone"/>
  			<i class="fas fa-check-circle"></i>
  			<i class="fas fa-exclamation-circle"></i>
  			<small>Error message</small>
  		</div>

      <div class="form-control">
        <label for="forname">Pick the Date</label>
        <input type="datetime-local"  id="datetime"  min= "2020-12-26T00:00"  />
      </div>


  		<button>Submit</button>

  <script  src=".\scripts\getThetest.js"> </script>
</form>

  </div>
</div>


</body>
</html>
