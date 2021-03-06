<%@ Language=VBScript %>
<%
Dim objNewMail
'Set objNewMail = Server.CreateObject("CDONTS.NewMail") 
 
''Set the from field
'objNewMail.From = "inforeq@amberlodging.com"
 
''Set the to field
'objNewMail.To = "inforeq@amberlodging.com"

 
'Set the body field

BodyStr = "Current Resident Request From Amberlodging Website" & vbCRLF
BodyStr = BodyStr & "The user entered: " & vbCRLF
BodyStr = BodyStr & "Name: " & Request.Form("FirstName") & " " & Request.Form("LastName") & vbCRLF
BodyStr = BodyStr & "Apartment: " & Request.Form("AptNo") & vbCRLF
BodyStr = BodyStr & "Property Name: " &  Request.Form("PropertyName") & vbCRLF
BodyStr = BodyStr & "Phone: "  &  Request.Form("phone") & vbCRLF
BodyStr = BodyStr & "Email: " &  Request.Form("email") & vbCRLF
BodyStr = BodyStr & "Comments: "  &  Request.Form("comments") & vbCRLF

'objNewMail.Body = BodyStr
 
''Set the subject
'objNewMail.Subject = "Current Resident Request Mail from Amberlodging mailform." 
 
''Now attach a file
''objNewMail.AttachFile server.mappath("global.asa")
 
'Now send the message
'objNewMail.Send ,,,,1
 

'
    Set objNewMail = CreateObject("CDO.Message")
    objNewMail.Subject = "Current Resident Request Mail from Amberlodging mailform." 
    objNewMail.From = "mail@amberlodging.com"
    objNewMail.Sender = "mail@amberlodging.com"
    objNewMail.To = "mail@amberlodging.com"
    objNewMail.TextBody = BodyStr
    
       
    objNewMail.Configuration.Fields.Item _
        ("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2

    'Name or IP of Remote SMTP Server
    objNewMail.Configuration.Fields.Item _
        ("http://schemas.microsoft.com/cdo/configuration/smtpserver") = "azumaexch1"
    
    'Server port (typically 25)
    objNewMail.Configuration.Fields.Item _
        ("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
    
    objNewMail.Configuration.Fields.Update
    objNewMail.Send


'Then clean up after yourself
set objNewMail = nothing
%>

<% 

title="AMBER Lodging - Information Request"
section="Request"
sectionHeader="INFORMATION REQUEST"

%>
<!DOCTYPE html>
<html>
<head>
  <title>Request Information :: Amber Lodging</title>
  
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

</head>

<body>

<div id="container">

<header>
  <!--#include file="inc/header.asp"-->
</header>

<nav>
  <!--#include file="inc/nav.asp"-->
</nav>

<div class="banner">
    <img
    srcset="img/banner_crr_1500.jpg 1500w,
            img/banner_crr_960.jpg 960w,
            img/banner_crr_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/banner_crr_960.jpg' width="100%" 
    alt="Amber Contact Resident Request" />
  <h1 class="banner-text">Current Resident Request</h1>

</div>

<section class="main">

<article>
  <p>Thank you for your interest in Amber Lodging Company. Your request is being processed and a representative will contact you shortly.</p>
</article>

</section>

<footer>
  <!--#include file="inc/footer.asp"-->
</footer>

</div>

<script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>

  <script type="text/javascript" language="javascript">

  $(document).ready(function() {
    $(".show_menu").click(function () {
      $(this).siblings($(this)).toggle();
    });
  });

  </script>

</body>

</html>