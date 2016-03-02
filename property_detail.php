<?php

$client = "Johnny Washington";

$search_parameters = array('city' => "Austin", 'state' => "TX", 'move_in' => "Mar 01", 'move_out' => "Mar 31");

$selected_property = array('property_name' => "Gables West Avenue", 
                           'neighborhood' => "Downtown", 
                           'id' => "987654", 
                           'size' => "1BD / 1BA", 
                           'property_address' => "300 West Avenue", 
                           'property_city' => "Austin", 
                           'property_state' => "TX", 
                           'property_postal_code' => "78701", 
                           'property_country_code' => "US",
                           'property_latitude' => "30.2680695",
                           'property_longitude' => "-97.7538387",
                           'daily_price' => "260", 
                           'min_stay' => "30",
                           'images' => array("property_feature_1.jpg", "property_feature_2.jpg", "property_feature_3.jpg", "property_feature_4.jpg", "property_feature_5.jpg"), 
                           'features' => array("One bedroom, one full bathroom","785 sqft","2nd floor","Balcony with sitting area","High Speed Internet","Washer/dryer in unit","Fully furnished","Full size kitchen"),
                           'amenities' => array("Built in 2001, recently renovated","Ceiling Fans","Club Room","Extra Storage Available","High Speed Internet","Laundry On Site","Pool","Public Transportation Near By","Rooftop Amenities","Wireless High Speed Internet"));

$nearby_properties = array(0 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Green Pastures", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "987654", 
                                      'size' => "1BD / 1BA", 
                                      'property_address' => "800 Brazos Street", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "198",
                                      'min_stay' => "30"),
                           1 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Travis Heights Arms", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "123456", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "1136 Travis Heights Boulevard", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78704", 
                                      'property_country_code' => "US",
                                      'daily_price' => "198",
                                      'min_stay' => "30"),
                           2 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Lakeside Apartments", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "234567", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "85 Trinity Street", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "295",
                                      'min_stay' => "30"));

?>


<!DOCTYPE html>
<html>
<head>
  <title>Property Detail :: Amber Lodging</title>
  

  <link rel="stylesheet" href="inc/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,400,600,400italic,600italic,800italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

</head>


<body>
<div class="title-bar alc">Amber Lodging Company</div>
<div class="title-bar client-name"><?php echo $client ?> <span class="caret"></span></div>

<div id="black_overlay" style="width: 100%;">
</div>


  <div class="reserve_now_form">
  <form action="" method="post">
  <p class="close">&times;</p>
  <h1>Guest Details For Reservation</h1>
  <p class="small-print"><em>All reservations are subject to availability. Changes to the reservation may alter pricing and availability.</em></p>
  <p class="small-print"><em>Reservations are not set until confirmed. Confirmations are sent Mon-Fri between the hours of 7-7CST</em></p>
<section class="container-fluid no-padding">
  <div class="row">
      <div class="col-md-6">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" />
      </div>
      <div class="col-md-6">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" />
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
        <label for="reference_no">File # / Reference # / Employee ID</label>
        <input type="text" id="reference_no" name="reference_no" />
      </div>
      <div class="col-md-6">
        <label for="department">Department</label>
        <input type="text" id="department" name="department" />
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
        <label for="client_id">Employer / Client</label>
        <input type="text" id="client_id" name="client_id" />
      </div>
      <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
      </div>
  </div>
  <label for="email">Important Notes</label>
  <textarea id="notes" rows="7" class="boxsizingBorder" ></textarea>


  <hr class="form-hr"/>
  <h2>Agent requesting information</h2>
  <div class="row">
      <div class="col-md-6">
        <label for="guest_first_name">First Name</label>
        <input type="text" id="guest_first_name" name="guest_first_name">
      </div>
      <div class="col-md-6">
        <label for="guest_last_name">Last Name</label>
        <input type="text" id="guest_last_name" name="guest_last_name">
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
        <label for="guest_email">Email</label>
        <input type="text" id="guest_email" name="guest_email">
      </div>
      <div class="col-md-6">
        <label for="guest_phone">Phone Number</label>
        <input type="text" id="guest_phone" name="guest_phone">
      </div>

  </div>
  <div class="text-center" style="margin: 0 auto;">
    <input type="submit" value="Confirm Reservation" id="submit" class="li-button">
  </div>
</form>
</div>

<div id="container">

<div class="info-bar">
  <span class="info-back"><i class="fa fa-long-arrow-left"></i> Back to properties</span>
  <span class="location"><i class="fa fa-map-marker"></i> <?php echo $search_parameters[city], ", ", $search_parameters[state] ?></span>
  <span class="dates"><i class="fa fa-calendar"></i> <?php echo $search_parameters[move_in], " - ", $search_parameters[move_out] ?></span>
  <span class="update-search"><a href="#">edit search</a></span>
</div>

<section class="property-detail container-fluid">
  <div class="row">
    <div class="col-md-7">

      <div id="feature_property-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">

<?php
           foreach($selected_property[images] as $key => $value) {  echo 
              '<li data-target="#feature_property-carousel" data-slide-to="' . $key . '"';
              if ($key == 0) { 
                 echo ' class="active"';
                 } 
              echo '></li>';
              }
          ?>
        </ol>
 
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
          foreach($selected_property[images] as $key => $value) {  echo 
              '<div class="item ' ;
              if ($key == 0) { 
                 echo 'active';
                 } 
              echo '">
                <img src="img/clients/' . $value . '" alt="...">
              </div>';
              }

          ?>

        </div>
       </div>

    </div>
    <div class="col-md-4">
      <h1 class="location-title"><?php echo $selected_property[property_name] ?></h1>
      <div class="location-id">ID# <?php echo $selected_property[id] ?></div> 
      <div class="location-address"><?php echo $selected_property[property_address], " | ", $selected_property[property_city], ", ", $selected_property[property_state], " ", $selected_property[property_postal_code], ", ", $selected_property[property_country_code] ?></div>
      <div class="row property-numbers">
        <div class="col-md-5">
          <div class="daily-price">$<?php echo $selected_property[daily_price] ?></div> USD
          <div class="small-print">avg/night</div>
        </div>
        <div class="col-md-7">
          <div class="min-stay"><?php echo $selected_property[min_stay] ?></div> DAY
          <div class="small-print">min stay</div>
        </div>
      </div>
      <div class="row">
      <div class="btn btn-primary reserve-now">Reserve This Property Now</div>
        <p class="small-print text-center">or</br />
          <a href="#">Request Info</a>
        </p>
        <p class="small-print"><em>All reservations are subject to availability. Changes to the reservation may alter pricing and availability.</em></p>
        <p class="small-print"><em>Reservations are not set until confirmed. Confirmations are sent Mon-Fri between the hours of 7-7CST</em></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7">
      <h2 class="property-about">About This Rental</h2>
        <ul class="property-features">
          <?php foreach($selected_property[features] as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
      <h2 class="property-amenities">Property Amenities</h2>
        <ul class="property-amenities">
          <?php foreach($selected_property[amenities] as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
    </div>
    <div class="col-md-4 cal-section">
    <h3>Confirm your dates are available</h3>
    <div class="row row-spacing">
        <script language="javascript" type="text/javascript">

          var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
          var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

          //  Declare And Initialize Variables
          var Calendar = new Date();

          var year = Calendar.getFullYear();     // Returns year
          var month = Calendar.getMonth();       // Returns month (0-11)
          var today = Calendar.getDate();        // Returns day (1-31)
          var weekday = Calendar.getDay();       // Returns day (1-31)

          var DAYS_OF_WEEK = 7;                  // "constant" for number of days in a week
          var DAYS_OF_MONTH = 31;                // "constant" for number of days in a month
          var cal;                               // Used for printing

          Calendar.setDate(1);                   // Start the calendar day at '1'
          Calendar.setMonth(month);              // Start the calendar month at now


          // Variables For Formatting

          var tr_start = '<tr>';
          var tr_end = '</tr>';
          var td_start = '<td width="45" class="cal-body">';
          var td_end = '</td>';

          // Begin Code For Calendar

          cal =  '<table class="calendar"><tr><td>';
          cal += '<table class="">' + tr_start;
          cal += '<td colspan="' + DAYS_OF_WEEK + '" bgcolor="#efefef"><center><b>';
          cal += month_of_year[month]  + '   ' + year + '</b>' + td_end + tr_end;
          cal += tr_start;

          // Loops For Each Day Of Week
          for(index=0; index < DAYS_OF_WEEK; index++)
          {

          // Bold Today's Day Of Week
          if(weekday == index)
          cal += td_start + '<B>' + day_of_week[index] + '</B>' + td_end;

          // Prints Day
          else
          cal += td_start + day_of_week[index] + td_end;
          }

          cal += td_end + tr_end;
          cal += tr_start;

          // Fill In Blank Gaps Until Today's Day
          for(index=0; index < Calendar.getDay(); index++)
          cal += td_start + '  ' + td_end;

          // Loops For Each Day In Calendar
          for(index=0; index < DAYS_OF_MONTH; index++)
          {
          if( Calendar.getDate() > index )
          {
            // Returns The Next Day To Print
            week_day =Calendar.getDay();

            // Start New Row For First Day Of Week
            if(week_day == 0)
            cal += tr_start;

            if(week_day != DAYS_OF_WEEK)
            {

            // Set Variable Inside Loop For Incrementing Purposes
            var day  = Calendar.getDate();

            // Highlight Today's Date
            if( today==Calendar.getDate() )
            cal += td_start + day + td_end + td_end;

            // Prints Day
            else
            cal += td_start + day + td_end;
            }

            // End Row For Last Day Of Week
            if(week_day == DAYS_OF_WEEK)
            cal += tr_end;
            }

            // Increments Until End Of The Month
            Calendar.setDate(Calendar.getDate()+1);

          }// end for loop

          cal += '</td></tr></table></table>';

          //  Print Calendar
          document.write(cal);

      </script>

      </div>
      <div class="row row-spacing">
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key requested_dates"></div> <span class="small">Move in / out</span>
        </div>
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key"></div> <span class="small">Available</span>
        </div>
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key pending_dates"></div> <span class="small">Pending</span>
        </div>
      </div>
      <p class="small-print"><em><strong>Note:</strong> Calendar shows the standard nightly rate. See pricing above for the best average price based on the dates you have selected.</em></p>
    </div>
  </div>
</section>

<section class="properties-nearby container-fluid">
  <div class="row">
    <div class="col-md-7">
    <h2 class="property-about">Nearby Rentals Like This One</h2>
 
 
 <?php 
 foreach($nearby_properties as $inner) { echo    
      '<div class="nearby-box  container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-3">
            <img src="img/clients/'.$inner[property_thumb].'" alt="<##>" />
          </div>
          <div class="col-sm-12 col-md-6">
          <h1 class="nearby">'.$inner[property_name].'</h1>
          <p class="neighborhood">'.$inner[neighborhood].'</p>
          <p>ID# '.$inner[id] . ' | ' . $inner[size].'</p>
          <p class="nearby-address">'.$inner[property_address] . '<br />
          ' .$inner[property_city] . ', '.$inner[property_state] . ' ' .$inner[property_postal_code] . ', '.$inner[property_country_code] . ' </p>
           <p class="min-stay">minimum '.$inner[min_stay].' day stay</p>
          </div>
          <div class="col-sm-12 col-md-3 text-right">
          <div class="daily-price">$'.$inner[daily_price] . '</div> <a href="">USD</a>
          <div class="small-print">avg/night</div>
          <div class="btn btn-primary view-details">View Details</div>
          </div>
          </div>
      </div>
      '

  ; } 
  ?>  
    
    </div>
    <div class="col-md-4">
    &nbsp;
    <h3 class="map-header">Getting to the property</h3>
    <img src="http://maps.googleapis.com/maps/api/staticmap?zoom=11&size=350x350&maptype=roadmap&markers=color:red%7Clabel:X%7C<?php echo "$selected_property[property_latitude],$selected_property[property_longitude]" ?>&sensor=false" %>

    
  </div>    
</section>

</div>


</body>

  <script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $(".reserve-now").click(function() {
          var h = $("body").height() + 'px';
          $("#black_overlay").css({"height":h,"visibility":"visible"});
          $(".reserve_now_form").css('display','block');
        });
        $(".close, #submit").click(function() {
        $(".reserve_now_form").css('display','none');
        $("#black_overlay").css("visibility","hidden");
      });
    });
  </script>
</html>