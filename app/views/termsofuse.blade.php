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
	<div class="a-slot-content clearfix" id="a-slot-content-16-body-1">
                     





	
	
	<div class="a-content clearfix">
			











  
  
  
    <div id="a-area-17-body" class="a-area a-normal a-area-body     clearfix">
    
        
    
  
    
          <div id="a-slots-17-body" class="a-slots clearfix">
  
    
                                  
   
        <div class="a-slot a-normal  
          aRichText           clearfix" data-pageid="17" data-name="body" data-permid="1" data-width="800" id="a-slot-17-body-1">
    
                   
        
            <div class="a-slot-content clearfix" id="a-slot-content-17-body-1">
                     





	
	
	<p>
	<strong>BOOKCHEETAH WEB SITE TERMS AND CONDITIONS OF USAGE</strong></p>
<p>
	These Terms and Conditions were last updated:&nbsp; March 31, 2013.</p>
<p>
	<strong>IMPORTANT!&nbsp; </strong>These Terms and Conditions (“Terms and Conditions”) govern your (the “User” or “You” or “Your”) use of the http://www.bookcheetah.com Web Site (the “Web Site”) provided by BookCheetah.&nbsp; By accessing or using the Web Site, You are a “User” and You accept and agree to the Terms and Conditions below as a legal and binding contract between You and BookCheetah.&nbsp; These Terms and Conditions are subject to change by BookCheetah at any time in its discretion and any such changes to the Terms and Conditions will be applicable to all subsequent access to or use of the Web Site.&nbsp; Your use of the Web Site after such changes are implemented constitutes your acceptance of the changes.&nbsp; Please consult these Terms and Conditions regularly.&nbsp;</p>
<p>
	If You do not accept and agree to all provisions of the Terms and Conditions of this Web Site, now or in the future, You reject the Terms and Conditions and shall immediately terminate Your access and use of the Web Site.&nbsp; Any continued use or access by You of the Web Site, without Your acceptance and agreement with all provisions of the Terms and Conditions, is unauthorized.</p>
<p>
	By accepting the Terms and Conditions of this Web Site, You are also required to comply with and to ensure compliance with all laws, ordinances, and regulations applicable to your activities on the Web Site.</p>
<p>
	This Web Site is intended and designed for Users 18 years of age and older, and access or use by anyone younger is not authorized.</p>
<p>
	Please note: BookCheetah is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to <a href="http://www.amazon.com">Amazon.com</a>.</p>
<p>
	<strong>TABLE OF CONTENTS</strong></p>
<ul><li>
		Permitted Use</li>
	<li>
		Content and Moderation</li>
	<li>
		Conduct</li>
	<li>
		Proprietary Information</li>
	<li>
		Disclaimers</li>
	<li>
		Limitations on Liability</li>
	<li>
		Indemnity</li>
	<li>
		Injunctive Relief</li>
	<li>
		Miscellaneous</li>
</ul><p>
	<br><strong>PERMITTED USE</strong></p>
<p>
	User has a nonexclusive, nontransferable, limited, and revocable right to use the Web Site solely for User’s personal educational, informational, and entertainment use.&nbsp; User will not use the Web Site for any other purpose, including any commercial purpose, without BookCheetah’s express prior written consent.&nbsp; For example, User will not, and will not authorize any other person to (i) Co-brand the Web Site or portion thereof, or (ii) frame the Web Site or portion thereof (whereby the Web Site or a portion thereof will appear on the same screen with a portion of another web site).&nbsp; “Co-branding” means to display a name, logo, trademark, or other means of attribution or identification of any party in such a manner reasonably likely to give a user the impression that such other party has the right to display, publish, or distribute the Web Site or content accessible within the Web Site (the “Content”).&nbsp; User agrees to cooperate with BookCheetah in causing any unauthorized Co-branding, framing or linking to immediately cease.</p>
<p>
	To maintain the integrity and functionality of BookCheetah for its Users, access to BookCheetah and or activities related to BookCheetah that are harmful to, inconsistent with or disruptive of BookCheetah and or its Users’ beneficial use and enjoyment of BookCheetah are expressly unauthorized and prohibited.&nbsp; Specifically, but not limited to the collection of personal information, including but not limited to email addresses, IP addresses and telephone numbers, is not allowed for any purpose.&nbsp; All copying, aggregation, display, distribution, performance or derivative use of BookCheetah or any Content posted on BookCheetah whether done directly or through intermediaries, including by any electronic means, is prohibited.</p>
<p>
	<br><strong>CONTENT AND MODERATION</strong></p>
<p>
	Information posted on forums, bulletin boards, or similar portions of the Web Site (“Forums”) is supplied by third parties and other users unless BookCheetah or its authorized representative identifies itself as the content poster.&nbsp; Any opinions, advice, statements, services, offers, or other information or content expressed or made available by third parties or any other user are those of the respective author(s) and not of BookCheetah.&nbsp; BookCheetah does not control, is not responsible for and makes no representations or warranties with respect to any user Content.&nbsp; You must conduct any necessary, appropriate, prudent or judicious investigation, inquiry, research and due diligence with respect to any user Content.&nbsp; You are also responsible for any Content that You post or transmit and, if You create an account, You are responsible for all Content posted or transmitted through or by use of Your account.</p>
<p>
	User will not post any of the following Content:</p>
<ul><li>
		Content which threatens or abuses others, or which is defamatory or libelous, or which is invasive of another’s privacy;</li>
	<li>
		Content for which User does not have the right to post, including the proprietary material of any third party and or disclosure of another person’s personal, confidential or proprietary information;</li>
	<li>
		Illegal Content;</li>
	<li>
		Content used in the facilitation of the creation, advertising, distribution, provision or receipt of illegal goods or services;</li>
	<li>
		False or fraudulent Content;</li>
	<li>
		Content for advertising or solicitation;</li>
	<li>
		Offensive Content which is defamatory, threatening, indecent, vulgar, obscene, or pornographic;</li>
	<li>
		Malicious Content including, without limitation, malware or spyware;</li>
	<li>
		Content that offers, promotes, advertises, or provides links to posting or auto-posting products or services, account creation or auto-creation products or services, flagging or auto-flagging products or services, bulk telephone numbers or any other product or service that if utilized with respect to BookCheetah would violate these Terms and Conditions;</li>
	<li>
		Content that offers, promotes, advertises or provides links to unsolicited products or services; or</li>
	<li>
		Material which does not pertain directly to the subject matter of the particular Forum.</li>
</ul><p>
	<br>
	You automatically grant and assign to BookCheetah, and You represent and warrant that You have the right to grant and assign to BookCheetah, a perpetual, irrevocable, unlimited, non-exclusive, royalty-free, fully sub-licensable, worldwide, license to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, perform and display any message posted in Forums (in whole or in part) worldwide or to incorporate any message in other works in any form, media or technology now known or later developed. &nbsp;You also expressly grant and assign to BookCheetah all rights and causes of action to prohibit and enforce against any unauthorized copying, performance, display, distribution, use or exploitation of, or creation of derivative works from, any Content that You post including but not limited to any unauthorized downloading, extraction, harvesting, collection or aggregation of Content that You post.</p>
<p>
	BookCheetah reserves the right, but not the obligation, to monitor Forums and to regulate content and to regulate conduct by any User to enforce compliance with these Terms and Conditions for any reason and in any manner or by any means that BookCheetah in its sole discretion, deems necessary or appropriate, as well as the right to remove or refuse to post any posting, including any of the above postings upon discovery thereof.</p>
<p>
	You also understand and agree that any action or inaction by BookCheetah or any of its directors, officers, members, employees, consultants, agents or other representatives (collectively, “Representatives”) to prevent, restrict, redress or regulate content, or to implement other enforcement measures against any content, conduct or potential Terms and Conditions violation is undertaken voluntarily and in good faith, and You expressly agree that neither BookCheetah nor any of BookCheetah’s Representatives shall be liable to You or anyone else for any action or inaction to prevent, restrict, redress, or regulate content, or to implement other enforcement measures against any content, conduct or potential violation of the Terms and Conditions.</p>
<p>
	BookCheetah also has the right in its sole discretion to limit, modify, interrupt, suspend or discontinue all or any portions of the BookCheetah Web Site at any time without notice.&nbsp; BookCheetah and its Representatives shall not be liable for any such limitations, modifications, interruptions, or suspensions or discontinuance, or any purported losses, harm or damages arising from or related thereto.</p>
<p>
	Notwithstanding these rights, Users remain solely responsible for the content of its postings.&nbsp; User acknowledges and agrees that neither BookCheetah nor any third party content provider will assume or have any liability for any action or inaction by BookCheetah or any third party content provider with respect to any posting on the Forums.&nbsp; User will not (i) select or use a member name or email address of another person with the intent to impersonate that person; (ii) use a user name or email address subject to the rights of any person without authorization; (iii) use a member name in violation of the intellectual property rights of any person; or (iv) use a member name that BookCheetah, in its sole discretion, deems offensive.</p>
<p>
	<br><strong>CONDUCT</strong></p>
<p>
	BookCheetah does not control, is not responsible for and makes no representations or warranties with respect to any user or user conduct.&nbsp; You are solely responsibility for Your interaction with or reliance on any user or user conduct.&nbsp; You must perform any necessary, appropriate, prudent or judicious investigation, inquiry, research and due diligence with respect to any user or user conduct.&nbsp; You are also responsible for Your own conduct and activities on, through or related to BookCheetah, and, if You create an account on BookCheetah, You are responsible for all conduct or activities on, through or by use of Your account.</p>
<p>
	<br><strong>PROPRIETARY INFORMATION</strong></p>
<p>
	User acknowledges and agrees that the Content accessible within the Web Site is the proprietary information of BookCheetah and its content providers and BookCheetah and its content providers retain all right, title, and interest in the Content.&nbsp; Accordingly, User will not reproduce, transmit, publish or distribute such Content to any third party without the prior express written consent of BookCheetah or the applicable content provider except that User may print a copy of the Content solely for User’s personal use.&nbsp; In doing so, User will not remove or alter, or cause to be removed or altered, any copyright, trademark, trade name, service mark, or any other proprietary notice or legend appearing on any of the Content.</p>
<p>
	<br><strong>DISCLAIMERS</strong></p>
<p>
	User will have access to a variety of sources of content through the internet.&nbsp; BookCheetah has made no effort to verify the accuracy or suitability of any information contained in any such sources.&nbsp; Accordingly, BookCheetah will have no liability or responsibility whatsoever for any content contained within any such sources.&nbsp; User accesses, uses, and relies upon such content at User’s own risk.&nbsp; User understands further that the Internet contains unedited materials, some of which are sexually explicit or may be offensive.&nbsp; User accesses such materials at User’s own risk.&nbsp; BookCheetah has no control over and accepts no responsibility whatsoever for such materials.</p>
<p>
	User understands that, except for information, products or services clearly identified as being supplied by BookCheetah, BookCheetah does not operate, control or endorse any information, products or services on the Internet in any way.&nbsp; User also understands that while no downloading of material is necessary for use of the service, BookCheetah cannot and does not guarantee or warrant that files available for downloading from the Internet will be free of infection or viruses, worms, Trojan horses or other code that manifest contaminating or destructive properties.&nbsp; Each User is responsible for implementing sufficient procedures and checkpoints to satisfy User’s particular requirements for accuracy of data input and output, and for maintaining a means external to the Web Site for the reconstruction of any lost data.&nbsp; BookCheetah does not assume any responsibility or risk for User’s use of the Internet.</p>
<p>
	YOUR ACCESS TO, USE OF AND RELIANCE ON BOOKCHEETAH AND CONTENT ACCESSED THROUGH BOOKCHEETAH IS ENTIRELY AT YOUR OWN RISK.&nbsp; THE BOOKCHEETAH WEB SITE, INCLUDING WITHOUT LIMITATION, THE WEB SITE, THE WEB SITE’S PROGRAMS, SERVICES, FORUMS AND CONTENT,&nbsp; IS PROVIDED ON AN “AS IS” OR “AS AVAILABLE” BASIS WITHOUT ANY WARRANTIES OF ANY KIND.</p>
<p>
	ALL EXPRESS AND IMPLIED WARRANTIES (INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT OF PROPRIETARY RIGHTS) ARE EXPRESSLY DISCLAIMED.&nbsp;</p>
<p>
	WITHOUT LIMITING THE FOREGOING, BOOKCHEETAH ALSO DISCLAIMS ALL WARRANTIES FOR OR WITH RESPECT TO: (a) THE SECURITY, RELIABILITY, TIMELINESS, ACCURACY AND PERFORMANCE OF BOOKCHEETAH AND CONTENT ACCESSED THROUGH BOOKCHEETAH; (b) COMPUTER WORMS, VIRUSES, SPYWARE, ADWARE AND ANY OTHER MALWARE, MALICIOUS CODE OR HARMFUL CONTENT OR COMPONENTS ACCESSED, RECEIVED OR DISSEMINATED THROUGH, RELATED TO OR AS A RESULT OF BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH; (c) ANY TRANSACTIONS OR POTENTIAL TRANSACTIONS, GOODS OR SERVICES PROMISED OR EXCHANGED, INFORMATION OR ADVICE OFFERED OR EXCHANGED, OR OTHER CONTENT, INTERACTIONS, REPRESENTATIONS OR COMMUNICATIONS THROUGH, RELATED TO OR AS A RESULT OF USE OF BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH (INCLUDING, WITHOUT LIMITATION, ACCESSED THROUGH ANY LINKS ON BOOKCHEETAH OR IN CONTENT.)</p>
<p>
	THESE DISCLAIMERS SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW.&nbsp; Some jurisdictions do not allow disclaimer of implied warranties.&nbsp; In such jurisdictions, some of the foregoing disclaimers as to implied warranties may not apply.</p>
<p>
	<br><strong>LIMITATIONS ON LIABILITY</strong></p>
<p>
	BookCheetah and its Representatives will not be liable for any incidental, indirect, consequential, or special damages, including loss of revenue or income, pain and suffering, emotional distress or similar damages, even if BookCheetah has been advised of the possibility of such damages.&nbsp; You expressly waive the provisions of California Civil Code Section 1542 (and any similar laws in other jurisdictions) which provides “[A] general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which, if known by him must have materially affected his settlement with the debtor.” In no event will the collective liability of BookCheetah and its Representatives to any party (regardless of the form of action, whether in contract, tort or otherwise) exceed the amount User has paid to BookCheetah for the applicable Content or service out of which liability arose.</p>
<p>
	BOOKCHEETAH AND ITS REPRESENTATIVES SHALL UNDER NO CIRCUMSTANCE BE LIABLE FOR ANY ACCESS TO, USE OR RELIANCE ON BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH BY YOU OR ANYONE ELSE, OR FOR ANY TRANSACTIONS, COMMUNICATIONS, INTERACTIONS, DISPUTES OR RELATIONS BETWEEN YOU AND ANY OTHER PERSON OR ORGANIZATION ARISING OUT OF OR RELATED TO BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH INCLUDING BUT NOT LIMITED TO LIABILITY FOR INJUNCTIVE RELIEF AS WELL AS FOR ANY HARM, INJURY, LOSS OR DAMAGES OF ANY KIND INCURRED BY YOU OR ANYONE ELSE (INCLUDING WITHOUT LIMITATION, DIRECT, INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, STATUORY, EXEMPLARY OR PUNITIVE DAMAGES, EVEN IF BOOKCHEETAH OR ANY BOOKCHEETAH REPRESENTATIVE HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES).&nbsp; THIS LIMITATION OF LIABILITY APPLIES REGARDLESS OF, BUT IS NOT RESTRICTED TO, WHETHER THE ALLEGED LIABILITY, HARM, INJURY, LOSS OR DAMAGES AROSE FROM AUTHORIZED OR UNAUTHORIZED ACCESS TO OR USE OF BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH; ANY INABILITY TO ACCESS OR USE BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH; OR ANY REMOVAL, DELETION, LIMITATION, MODIFICATION, INTERRUPTION, SUSPENSION, DISCONTINUANCE OR TERMINATION OF BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH.</p>
<p>
	THESE LIMITATIONS SHALL ALSO APPLY WITH RESPECT TO DAMAGES RESULTING FROM ANY TRANSACTIONS OR POTENTIAL TRANSACTIONS, GOODS OR SERVICES PROMISED OR EXCHANGED, INFORMATION OR ADVICE OFFERED OR EXCHANGED, OR OTHER CONTENT, INTERACTIONS, REPRESENTATIONS, COMMUNICATIONS OR RELATIONS THROUGH, RELATED TO OR AS A RESULT OF BOOKCHEETAH OR CONTENT ACCESSED THROUGH BOOKCHEETAH (INCLUDING, WITHOUT LIMITATION, ANY LINKS ON BOOKCHEETAH AND LINKS IN CONTENT ACCESSED THROUGH BOOKCHEETAH).</p>
<p>
	<br><strong>INDEMNITY</strong></p>
<p>
	User will indemnify and hold BookCheetah, its Representatives, its Licensors, content providers, service providers and contractors (the “Indemnified Parties”) harmless from any breach of these Terms and Conditions by User, including any use of Content other than as expressly authorized in these Terms and Conditions.&nbsp; User agrees that the Indemnified Parties will have no liability in connection with any such breach or unauthorized use, and agrees to indemnify any and all resulting loss, damages, judgments, awards, costs, expenses, and attorneys’ fees of the Indemnified Parties in connection therewith.&nbsp; User will also indemnify and hold the Indemnified Parties harmless from and against any claims brought by third parties arising out of User’s use of information accessed from the Web Site.</p>
<p>
	User further agrees to indemnify and hold the Indemnified Parties harmless from and against any third-party claim, cause of action, demand or damages related to or arising out of Your own conduct or activities on, through or related to BookCheetah, and related to or arising out of any conduct or activities on, through or by use of Your BookCheetah account, if any.&nbsp;</p>
<p>
	You agree to indemnify and hold BookCheetah and its Representatives harmless from and against any third-party claim, cause of action, demand or damages related to or arising out of content that You post or transmit including but not limited to content that a third-party deems defamatory or otherwise harmful or offensive; activity that occurs through or by use of your account including, without limitation, all content posted or transmitted; Your use of or reliance on any user content; and Your violation of the Terms and Conditions.</p>
<p>
	These indemnification obligations by User include payment of any attorney’s fees and costs incurred by BookCheetah and or its Representatives.</p>
<p>
	<br><strong>INJUNCTIVE RELIEF</strong></p>
<p>
	You acknowledge and agree that any violation or breach of these Terms and Conditions may cause BookCheetah immediate and irreparable harm and damages.&nbsp; Consequently, BookCheetah has the right to, and may in its discretion, immediately obtain preliminary injunctive relief, including without limitation, temporary restraining orders, and seek permanent injunctive relief regarding any violation or breach of the Terms and Conditions.&nbsp; In addition to any and all other remedies available to BookCheetah in law or in equity, BookCheetah may seek specific performance of any term in the Terms and Conditions.</p>
<p>
	<br><strong>MISCELLANEOUS</strong></p>
<p>
	<br><strong>Headings.&nbsp; </strong>The headings of sections of these Terms and Conditions are for ease of reference only and shall not be admissible in any action to alter, modify or interpret the contents of any section hereof.</p>
<p>
	<br><strong>Severability.&nbsp; </strong>If any section or provision of these Terms and Conditions are found to be illegal, unenforceable or in conflict with any law by a court of competent jurisdiction or arbitral tribunal, such section or provision of these Terms and Conditions shall be deemed severed from these Terms and Conditions and the validity of the remainder of these Terms and Conditions shall not be affected thereby.</p>
<p>
	<br><strong>Governing Law.&nbsp; </strong>These Terms and Conditions shall be governed by and construed in accordance with the laws of the state of Wyoming applicable to contracts made and to be enforced wholly within such state.</p>
<p>
	<br><strong>Submission to Jurisdiction.&nbsp; </strong>The parties to these Terms and Conditions each specifically consent to jurisdiction in Wyoming in connection with any dispute between the parties arising out of these Terms and Conditions or pertaining to the subject matter hereof.</p>
<p>
	<br><strong>Venue.&nbsp; </strong>The parties to these Terms and Conditions each agree that venue for any dispute between the parties arising out of these Terms and Conditions or pertaining to the subject matter hereof may be had in the District Court for the city of Cheyenne of the state of Wyoming or in the state courts of Wyoming sitting in a district or county court in Wyoming.</p>
<p>
	<br><strong>Dispute Resolution.</strong>&nbsp; Any and all claims, causes of action or disputes, regardless of theory, between You and BookCheetah arising out of or related to the Terms and Conditions, BookCheetah or the Content accessed through the Web Site shall be governed by the laws of the State of Wyoming without regard to conflict or choice of law principles.&nbsp; You and BookCheetah agree that any such claims, causes of action or disputes shall be brought exclusively in courts located within the District Court for the city of Cheyenne of the state of Wyoming.&nbsp; You further agree that, regardless of any statute or law to the contrary, You must file any such claim or cause of action within one year after such claim or cause of action arose or be forever barred.</p>
<p>
	<br><strong>Notices.&nbsp; </strong>All notices or other written communications required or permitted under these Terms and Conditions shall be given in writing by courier or reputable overnight delivery services, or by certified mail, return receipt requested to either party at its address set forth below (or to such address as such party may subsequently indicate in writing in the manner specified in this section.)</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BookCheetah, LLC</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c/o CT Corporation Systems</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1712 Pioneer Ave, Suite 120</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cheyenne, WY 82001</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (800) 362-1228</p>
<p>
	<br><strong>Waivers and Amendments.&nbsp; </strong>The waiver by either party of any provision of these Terms and Conditions on any occasion and upon any particular circumstances shall not operate as a waiver of such provision of these Terms and Conditions on any other occasion or upon any other circumstances.&nbsp; These Terms and Conditions maybe waived or amended only in writing and signed by both parties.</p>
<p>
	<br><strong>Survival.&nbsp; </strong>These Terms and Conditions, and any other provision which includes but is not limited to, Proprietary Information, Disclaimers, Limitations on Liability, Indemnity, Injunctive Relief, and Miscellaneous, in accordance with its terms are intended to survive these Terms and Conditions, shall survive the expiration or termination of these Terms and Conditions for any reason.</p>
<p>
	<br><strong>Assignment.&nbsp; </strong>Neither party may assign its rights or delegate its duties under these Terms and Conditions except that (i) either party may assign its rights to receive payments under these Terms and Conditions to a secured creditor and (ii) either party may subcontract for the performance of any of its obligations under these Terms and Conditions.</p>
<p>
	<br><strong>Complete Agreement/Incorporation.&nbsp; </strong>These Terms and Conditions contain the complete understanding of the parties with respect to the subject matter hereof and supersedes all other agreements, understandings, communications and promises of any kind, whether oral or written, between such parties with respect to such subject matter.&nbsp; Other than BookCheetah’s Representatives, who are expressly including as named third-party beneficiaries of the Terms and Conditions, there are no third-party beneficiaries to the Terms and Conditions.</p>	




         </div>
    </div>

  
      </div>    </div>   
  




			
		</div>
</ul>	




         </div>
@stop
