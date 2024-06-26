<!DOCTYPE html>
<html>

<head>
    <title> Coronavirus Covid-19 </title>
    <link rel="stylesheet"  href=".\css\a5-style.css">
<body>

    <p class="logo"><img src=".\images\kent-logo.jpg" alt="Kent-logo" width="50" height="32">  Kent borough council</p>

<hr class="new4">
 <h1>Coronavirus (Covid-19)</h1>
<hr class="new4">

<!-- Main symptoms -->

<h2>Main symptoms:</h2><br>
<ul>
  <li>High temperature : This means you feel hot to touch on your chest or back (you do not need to measure your temperature).</li>
  <br><li>New, continuous cough :  This means coughing a lot for more than an hour, or 3 or more coughing episodes in 24 hours
(if you usually have a cough, it may be worse than usual).</li>
  <br><li>Loss of,or change to, your sense of smell or taste :This means you have noticed you cannot smell or taste anything,
or things smell or taste different to normal.</li>
</ul>

<!--How to protect yourself and others ? -->

<div class="simple-rules">
<h3>How to protect yourself and others ? </h3>
<div class="box">
<img  src=".\images\hands-wash.png" alt="wash-hands"
<span><p> Wash your hands:<br>Keep washing your hands regularly.</p></span>
</div>

<div class="box">
<img src=".\images\mask-wear.png" alt="wear-mask"
<span> Cover your face:<br>Wear a face covering in enclosed spaces.</span>
</div>

<div class="box">
<img src=".\images\dist-social.png" alt="keep-distance"
<span> Keep space:<br>Stay at least 2 metres apart - or 1 metre with a
face covering or other precautions.</span>
</div>

</div>

<br>
<!--How to get a test ? -->

<h2>How to get a test ?</h2>
<br>
<div class="row">
  <div  class="column1" style="background-color:#ccc;">

    <p>If you have the symptoms mentioned above,
      you can have a swab test to check if you have coronavirus
      (COVID-19) now.</p>

  </div>

  <div class="column1"style="background-color:rgba(0,0,0,0.0)" >
   <div class="column2">
  <p>If you have other problems using the online service:
    <br><br>  Please call: <strong>119</strong><br><br>Lines are open 7am to 11pm.</p>
  </div>
</div>

  <div class="column1" style="background-color:#ccc;">
  <p>  Home test kits can be delivered to someone's door
      so they can test themselves and their family without
      leaving the house.If you prefer to do the test at home,
      you can order the kit by clicking the button below.</p>

  </div>
</div>
<div style="clear: both;"></div>

<div class="left-button">
    <button class="button" onclick="window.location.href='getTest.php';">Get a test</button>
</div>
<div class="right-button">
    <button class="button"onclick="window.location.href='orderThekit.php';" >Order the kit</button>
</div>

<br><br><br><br><br>

<!--Statistics -->
<h2>Statistics</h2>

<div class="column">
  <!--
<p><a href="https://www.kent.gov.uk/social-care-and-health/health/protect-kent-and-medway/cases-in-kent">
  Weekly data testing in Kent</a></p> -->
  <p><a href="kent-statistics.php">Weekly data testing in Kent</a></p>
<!--  <p><a href="https://coronavirus.data.gov.uk/">Uk daily statistics</a></p>-->

  <p><a href="ukStatistics.php">Uk daily statistics</a></p>
<!--<p><a href="https://www.kpho.org.uk/health-intelligence/disease-groups/coronavirus-covid-19">Kent daily statistics</a></p>-->
<p><a href="kentDailyStat.php">kent daily statistics</a></p>
</div>

<div class="column" >
 <div class="column3">
<p>Please remember that Kent is currently in Tier&nbsp;<span style="color:red;font-weight:bold">4</span>&nbsp; Very High alert<br>
  <br>To find out about all restrictions in this area,follow the link bellow.<br><br>
  <a target="_blank" style="color:white" href="kentTier.php">Kent Tier restrictions</a>
</p>
</div>
</div>


<!--Simple tips to stop the virus spreading -->
<br>
<h2>Simple tips to stop the virus spreading:</h2>
<br>
<div class="row">
  <div class="column">
<video  width="100%"controls>
  <source src=".\videos\tips-comp.mp4" type="video/mp4">
    </video>

<!--View the video transcript -->
    <div class="accordion">
    <button type="button" class="accordion__button">View the video transcript</button>
    <div class="accordion__content">
      <p>
    As winter approaches, we’ll be spending more time indoors. <br>This will increase the risk of coronavirus spreading.

    <br>The following reconstructions of everyday environments show why washing hands regularly, wearing a face covering and keeping at least 2m apart is vital in controlling the spread.

    <br>Coronavirus can live for more than 24 hours indoors.

    You could pick up or pass on the virus by touching a contaminated surface.

    Washing your hands with soap and water, or using hand sanitiser, regularly throughout the day will reduce the risk of catching or passing it on.

    <br>Coronavirus can be found in tiny droplets coming out of your nose and mouth.

    Wearing a face covering over your nose and mouth reduces the spread of droplets carrying the virus.<br> This means if you have it, you’re less likely to pass it on to others.

    Larger droplets can land on other people or on surfaces they touch. Spreading the virus through droplets is most likely to happen when you are less than 2m apart.

    Smaller droplets called aerosols can stay in the air for some time, especially if there is no ventilation.

    So when you are with people not from your household, you must keep at least 2m apart.

    The risk of spreading the virus through smaller droplets is much less outdoors, where there is more ventilation.

    Wash your hands, cover your face, make space. These are the three most effective ways we can all control the spread of the virus.

    Remember if you have any coronavirus symptoms; high temperature, a new continuous cough, or a loss or change in your sense of taste or smell, get a free test by calling 119 or visiting NHS.uk.

    Together, we will control the virus and stop the spread.

    Don’t forget, Hands, Face, Space

      </P>
    </div>
    </div>


</div>


<!--sign-language video -->
<div class="row">
  <div class="column">
<video  width="100%" controls>
    <source src=".\videos\sign-language-comp.mp4" type="video/mp4" >
</video>

    <br>
    <h4>Sign language</h4>
</div>
</div>
<br>

<script src=".\scripts\videoScript.js"> </script>
<!--Frequently asked questions  -->
<h2>Frequently asked questions</h2>


<button type="button" class="collapsible">What is Covid-19 and what are the main symptoms?</button>
<div class="content">
<p>
COVID-19 is the disease resulting from the most recent strand of coronavirus – the term used to describe a broader group of viruses known to cause respiratory issues. In most cases, people who contract the disease will experience it as a mild-moderate respiratory illness;
however COVID-19 can also result in more serious forms of infection, including pneumonia and organ failure.
People who are pregnant, over 65 or who have certain pre-existing health conditions (such as those listed here), have a heightened risk of developing severe versions of the illness but serious cases of COVID-19 are not exclusive to these groups. It is important that all people follow the guidance to protect themselves and others against risk of transmission.
Health specialists have identified two key symptoms associated with COVID-19:
a new, continuous cough – here ‘new’ means a newly developed cough, or a cough that has recently worsened;
and ‘continuous’ means frequent coughing for more than one hour or three or more coughing episodes within a 24 hour period
a high temperature – your back and/or chest feel hot to touch
If you are unsure whether you have COVID-19 symptoms, the NHS 111 online service can help you check and let you
know what to do next — including how to get an isolation note, allowing time off work — if this is needed.
</p>
</div>

<button type="button" class="collapsible">What should I do if I or someone else from my house is
    Presenting with Covid-19 symptoms?</button>
<div class="content">
  <p>It is very important that anyone who thinks they may be experiencing COVID-19 symptoms stays at home for at least seven days after symptoms become present. They should not go to a GP surgery, pharmacy of hospital. After seven days, they can end self-isolation, provided they do not have a high temperature.
  People should use the NHS 111 online coronavirus service if: They feel they cannot cope with their symptoms at home
  Their conditions gets worse
  Their symptoms do not get better after 7 days.
  They should only call 111 if they cannot get help online.
  Children and babies
  Parents or carers should call 111 for advice if they are worried about a baby or child.
  If they seem very unwell, are getting worse or you think there's something seriously wrong, call 999. Do not delay getting help if you are worried.
</p>
</div>
<button type="button" class="collapsible">How should households self-isolated?</button>
<div class="content">
  <p>If sharing a house with others, it is important that all other household members do not leave the house for 14 days (this should start from the first day that the first person to become ill begins to show symptoms). If anyone else begins to show symptoms, they should stay home an additional seven days (regardless of when they began their 14 day isolation period). Their self-isolation can conclude after this, so long as they do not have a high temperature.
  If you, or anyone else in your house, has begun to show symptoms, it is strongly advised that you read the Government guidance Stay at home: guidance for households with possible coronavirus (COVID-19) infection, which provides more comprehensive information and advice.
</p>
</div>

<button type="button" class="collapsible">Where can I find the latest public health advice?</button>
<div class="content">
  <p>This advice is available on the GOV.UK website, which provides latest announcements, coronavirus press conferences and covers topics including how to protect yourself and others against the virus and information for healthcare workers and carers. There is also an option to sign up to get emails when any COVID-19 related information on the website changes.
  Further public health information and advice is provided through the NHS website and Public Health England’s Coronavirus (COVID-19) – what you need to know page.
</p>
</div>

<button type="button" class="collapsible">What guidance is available on the provision of home care?</button>
<div class="content">
  <p>The Government has outlined guidance for provision of homecare. The guidance covers topics including how to maintain delivery of care, what care workers should do if caring for someone with COVID-19 symptoms or if they suspect they themselves have COVID-19, NHS and Government support available. Of particular note for councils, the final topic is ‘Steps for local authorities to support home care provision’. This section recommends that:
  lists of individuals receiving local authority-commissioned home care should be updated
  levels of informal support available to individual should be recorded (working with providers to identify the levels of informal support available)
  all local authority owned care and support plans should be mapped support planning during an outbreak
  all home care providers within the area should be contacted by the local authority to discuss plans for the mutual delivery of aid
  voluntary groups, local community services and primary care providers should all be considered as a potential source of support for the provision of home care, and
  consider the viability of providing home care during the COVID-19, including as it relates to financial resilience.
</p>
</div>
<script src=".\scripts\faqScript.js"> </script>

</head>




 </body>

</html>
