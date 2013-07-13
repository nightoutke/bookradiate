@extends('layouts.bookcheetah2')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

@section('toplinks2')
	@if (Auth::check())
		<li>Logged in as {{ Auth::user()->fullName() }}</li> |
		<li>College {{ Auth::user()->collegeName() }}</li> |
		<li>My Books</li> | 
	    <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">My Account</a></li> | 
	    <li><a href="{{ URL::to('account/logout') }}">Log Out</a></li>
	@else
		<li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
	    <li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
	@endif
@stop

@section('content')
	<div class="a-content clearfix">

    <div id="a-area-18-body" class="a-area a-normal a-area-body     clearfix">
 
          <div id="a-slots-18-body" class="a-slots clearfix">
  
        <div class="a-slot a-normal  
          aRichText           clearfix" data-pageid="18" data-name="body" data-permid="1" data-width="800" id="a-slot-18-body-1">
    
            <div class="a-slot-content clearfix" id="a-slot-content-18-body-1">
    
	<h3>
	PRIVACY AND ONLINE DATA COLLECTION NOTICE</h3>
<p>
	Effective March 30, 2012</p>
<h4>
	TABLE OF CONTENTS</h4>
<ul><li>
		Our Commitment to Privacy</li>
	<li>
		The Information We Collect</li>
	<li>
		How We Use Information</li>
	<li>
		Our Commitment to Data Security</li>
	<li>
		Our Commitment to Children’s Privacy</li>
	<li>
		How to Access or Correct Your Information</li>
	<li>
		Changes Regarding this Privacy and Online Data Collection Notice</li>
	<li>
		How to Contact Us</li>
</ul><h4>
	OUR COMMITMENT TO PRIVACY</h4>
<p>
	Your privacy is important to us.&nbsp; To better protect your privacy, we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. &nbsp;At BookCheetah, we will never sell, rent, trade or license, in whole-part or piecemeal, any information that we hold about or relating to you, however gathered, to any third-party. Access to your information with BookCheetah will be restricted and accessible only where necessary to the function for which it was collected.&nbsp; To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested.</p>
<h4>
	THE INFORMATION WE COLLECT</h4>
<p>
	This notice applies to all information collected or submitted on the BookCheetah web site.&nbsp; The types of personal information collected by BookCheetah’s web pages are:</p>
<ul><li>
		Name</li>
	<li>
		Email address</li>
	<li>
		School</li>
</ul><p>
	You may elect to provide the following information for specific activities on our website:</p>
<ul><li>
		Address(es)</li>
	<li>
		Phone number</li>
	<li>
		Credit/Debit card information</li>
	<li>
		Book identifiers</li>
</ul><h4>
	HOW WE USE INFORMATION</h4>
<p>
	We use the information you provide about yourself when you are attempting to trade a book(s) or order a product only to complete that book trade or order.&nbsp; We do not share this information with outside parties except to the extent necessary to complete that trade or order.</p>
<p>
	We use return email addresses to answer the email we receive, and to connect you with someone with whom you elect to communicate.&nbsp; We will occasionally email you to remind you of opportunities to buy or sell items you have placed on your bookshelf or wishlist.&nbsp; Such addresses are not used for any other purpose and are not shared with outside parties.</p>
<p>
	You can “like us on Facebook” if you would like to receive special offers or announcements of service updates.&nbsp; Information you submit on our website will otherwise not be used for this purpose.</p>
<p>
	We use non-identifying and aggregate information to better design our web site and to share with potential advertisers.&nbsp; For example, we may tell an advertiser that <em>x </em>number of individuals visited a certain area on our website, or that <em>y </em>number of people filled out our registration form, but we would not disclose anything that could be used to identify those individuals.</p>
<p>
	Passed data is information about yourself that you actively and willfully pass to us by explicitly engaging in active functions on the BookCheetah web site, such as contacting us through the BookCheetah web site email contact form or entering information to conduct a book trade.&nbsp; BookCheetah reserves the right, in its sole discretion, to immediately remove any information generated by you relating to yourself, another person, web site, entity or other organization that BookCheetah determines might be disagreeable to BookCheetah or others.</p>
<p>
	Finally, we never use or share the personally identifiable information provided to us online in ways unrelated to the ones described above, including generating cross-reference or collate-passed and passive data to generate “user profiles,” without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.&nbsp; We never seek any more information except that which is absolutely necessary for the desired action to be completed.&nbsp; We do not place “cookies” (small text files) on your system for any reason.</p>
<h4>
	OUR COMMITMENT TO DATA SECURITY</h4>
<p>
	To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online to protect the integrity of your data, at least as carefully as it would for BookCheetah’s data, against modification, disclosure or destruction.&nbsp; In the event it is discovered that unauthorized access to data occurred, accidentally or otherwise, BookCheetah will attempt to immediately notify you and explain BookCheetah’s remedial action.</p>
<h4>
	OUR COMMITMENT TO CHILDREN’S PRIVACY</h4>
<p>
	Protecting the privacy of the very young is very important.&nbsp; For that reason, BookCheetah never collects or maintains information at our website from those we actually know are under 13, and no part of our web site is structured to attract anyone under 13.</p>
<h4>
	HOW TO ACCESS OR CORRECT YOUR INFORMATION</h4>
<p>
	You can access all your personally identifiable information that we collect online and maintain by reviewing your profile via the links on every page of our website.&nbsp; We use this procedure to better safeguard your information.</p>
<p>
	You can correct factual errors in your personally identifiable information by changing your profile online, or by sending us a request that credibly shows error.&nbsp; You can, at any time, request that BookCheetah permanently erase any and all of your personal and identifiable information directly related to yourself at any time and BookCheetah will take action regarding your request as quickly as reasonably possible and notify you when the action is completed.</p>
<p>
	To protect your privacy and security, we will also take reasonable steps to verify your identify before granting access or making corrections.</p>
<h4>
	CHANGES REGARDING THIS PRIVACY AND ONLINE DATA COLLECTION NOTICE</h4>
<p>
	BookCheetah reserves the right to change or modify the terms of this Privacy and Online Data Collection Notice and shall take reasonable action to notify BookCheetah users of any changes.</p>
<h4>
	HOW TO CONTACT US</h4>
<p>
	Should you have other questions or concerns about these privacy policies, please email us at info@bookcheetah.com.</p>	

         </div>
    </div>

      </div>    </div>   
  	
		</div>
@stop